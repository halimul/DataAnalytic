from flask import Flask, render_template, request, url_for
import os

import pandas as pd
import numpy as np

import pickle

from sklearn.feature_extraction.text import CountVectorizer
from sklearn.naive_bayes import MultinomialNB
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split

from werkzeug.utils import secure_filename

df = pd.read_csv('static/Hasil_Analisis_Sentiment_clean.csv')

#feature extraction
df['text'] = df['text'].astype(str)
vec = CountVectorizer().fit(df['text'])
vec_transform = vec.transform(df['text'])

#train test split
X = vec_transform.toarray()
y = df['label']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2)

#training model
model = RandomForestClassifier().fit(X_train, y_train)
# print('Akurasi model MultinomialNB adalah ', model.score(X_test,y_test))

app = Flask(__name__, template_folder=os.getcwd(), static_url_path='/static')

app.config['UPLOAD_FOLDER'] = 'static/'

@app.route('/')
def index():
	return render_template('index.html')

@app.route('/sentimen')
def home_sentimen():
	return render_template('home_sentimen.html')

@app.route('/prediksi_teks', methods = ['GET', 'POST'])
def prediksi_teks():
	if request.method == 'GET':
		return render_template('prediksi_teks.html')

	if request.method == 'POST':
		input_text = np.array([request.form['text']])

		vec_input_text = vec.transform(input_text)

		#prediksi
		prediksi = model.predict(vec_input_text)
		if prediksi==[0]:
			prediksi='negative'
		else:
			prediksi='positive'
		print(prediksi)

		return render_template('prediksi_teks.html', hasil=prediksi)

@app.route('/prediksi_csv', methods = ['GET', 'POST'])
def prediksi_csv():
	if request.method == 'GET':
		return render_template('prediksi_csv.html')

	if request.method == 'POST':
		files = request.files['file']
		filename = secure_filename(files.filename)

		files.save(app.config['UPLOAD_FOLDER'] + filename)
		file = open(app.config['UPLOAD_FOLDER'] + filename, 'r', encoding='utf8')

		df_testing = pd.read_csv(file)
		
		df_testing['Sentiment'] = df_testing['label'].apply(lambda score :'positive' if score == 1 else 'negative')
		print(df_testing)

		return render_template('prediksi_csv.html', df=[df_testing.head(10).to_html()])

app.run(debug=True)