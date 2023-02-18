# Deployment Model Machine Learning (Diagnosis Covid 19)

## Deskripsi singkat Proyek

Repository ini berisi semua file yang dibutuhkan untuk melakukan deployment model Machine Learning untuk Diagnosis Covid 19 menggunakan. Adapun model yang digunakan bernama Categorical Naive Bayes. Model ini sudah di evaluasi dan memiliki tingkat akurasi tertinggi dari dua model Machine Learning lainya yaitu Multibinomial Naive Bayes, dan Decision Tree Classifier. Model akan memprediksi input berupa parameter yang diprediksi pada target terindikasi Covid atau tidak(Poisitif atau Negatif).

## Dataset Pengujian Model Machine Learning

The data used in this project consists of 12 columns and 5434 rows. Data can be accessed [here](https://drive.google.com/file/d/1MY5eRj6iIKeWFMqseGaCyQ7HXmksZWIH/view?usp=sharing).

#

## Tahap Pengembangan Diagnosis Covid 19 Menggunakan Machine Learning

Proyek ini memiliki beberapa tahap sebagai berikut:  
1. Load data:  load data from source
2. Data Preprocessing: 
    * handling missing values, 
    * duplicates data, 
    * Encoding Tipe Data, 
    * Pemilihan Fitur Target dan Penguji,
    * Splitting Dataset (Training-Testing = 80:20).
3. Build Model Machine Learning : 
    * Multibinomial Naive Bayes.
    * Categorical Naive Bayes.
    * Decision Tree Classification
4. Evaluation
5. Save Best Model
6. Deployment Model using Flask

#

## Sekilas mengenai input Model

![alt text](/Diagnosis%20of%20Covid%2019/Tabel%20Input.png)
Agar dapat mendiagnosis Positif atau Negatif, data input model harus memilih Yes atau No sesuai dengan parameter yang disebutkan diatas   

#

## File dan kegunaannya

-   app.py --> Berisi konfigurasi route dan proses prediksi model untuk API.
-   covid-home.html --> Berisi struktur template website Diagnosa Covid 19.
-   deploy_dt.sav --> Model Machine Learning yang sudah di-training.
-   README --> Petunjuk mengenai proyek.


#

## Cara menjalankan API pada komputer Anda

1. Pastikan Anda sudah menginstall Anaconda.
1. Buka terminal/command prompt/power shell.
1. Buat virtual environment dengan\
   `conda create -n <nama-environment> python=3.9`
1. Aktifkan virtual environment dengan\
   `conda activate <nama-environment>`
1. Install semua dependency/package Python dengan\
   `pip install -r requirements.txt`
1. Jalankan API menggunakan perintah\
   `python app.py`

## Akses melalui Website

1. Anda akan diberikan URL untuk membuka website berupa `localhost:5000/` atau `127.0.0.1:5000/`.
1. Buka URL dengan browser, coba masukan jawaban berupa YES atau NO pada tiap tabel Dashboard.
1. Anda akan diberikan hasil Diagnosa beruapa Positif atau Negatif pada halaman website.

## Hasil Demonstrasi Dashboard Diagnosis Covid 19
![](/Diagnosis%20of%20Covid%2019/Demo.gif)
