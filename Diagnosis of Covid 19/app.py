import os
import pickle as pkl
from flask import Flask, request, render_template
import numpy as np

MODEL_COVID = pkl.load(open('deploy_dt.sav', 'rb'))

app = Flask(__name__, template_folder=os.getcwd())

#untuk home
@app.route('/')
def covid():
    return render_template('covid-home.html')

@app.route('/predict_covid', methods=['POST'])
def predict_covid():
    
    # Index(['Sesak Napas', 'Demam', 'Batuk Kering', 'Sakit Tenggorokan',
    #    'Hidung Meler', 'Sakit Kepala', 'Kelelahan', 'Gastrointestinal ',
    #    'Kontak Dengan Pasien COVID', 'Menghadiri Pertemuan Besar',
    #    'Keluarga Yang Bekerja di Tempat Umum', 'Terinfeksi-COVID'],
    #   dtype='object')
    
    a = int(request.form['a'])
    b = int(request.form['b'])
    c = int(request.form['c'])
    d = int(request.form['d'])
    e = int(request.form['e'])
    f = int(request.form['f'])
    g = int(request.form['g'])
    h = int(request.form['h'])
    i = int(request.form['i'])
    j = int(request.form['j'])
    k = int(request.form['k'])
    
    features = np.array([[a,b,c,d,e,f,g,h,i,j,k]])
    prediction = MODEL_COVID.predict(features)

    return render_template('covid-home.html', prediction=prediction[0])

if __name__ == '__main__':
    app.run(debug=True, port=2020)