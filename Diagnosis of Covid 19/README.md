# Application of Machine Learning Model for Covid 19 Diagnosis

## Description Project

This repository contains all the files needed to deploy the Machine Learning model for Covid 19 Diagnosis using. The model used is called Categorical Naive Bayes. This model has been evaluated and has the highest accuracy rate of the other two Machine Learning models, namely Multibinomial Naive Bayes, and Decision Tree Classifier. The model will predict the input in the form of predicted parameters on the target indicating Covid or not (Positive or Negative).

## Dataset

The data used in this project consists of 12 columns and 5434 rows. Data can be accessed [here](https://drive.google.com/file/d/1MY5eRj6iIKeWFMqseGaCyQ7HXmksZWIH/view?usp=sharing).

#

## Stages

This project has several stages as follows:  
1. Loading data: loading data from the source
2. Data Preprocessing: 
    * handle missing values, 
    * Duplicating data, 
    * Data Type Encoding, 
    * Target and Tester Feature Selection,
    * Dataset Splitting (Training-Testing = 80:20).
3. Building Machine Learning Models: 
    * Multibinomial Naive Bayes.
    * Categorical Naive Bayes.
    * Decision Tree Classification
4. Evaluation
5. Save Best Model
6. Deployment Model using Flask

#

## Model Input Parameter

![alt text](/Diagnosis%20of%20Covid%2019/Tabel%20Input.png)
In order to diagnose Positive or Negative, the model input data must select Yes or No according to the parameters mentioned above.

#

## Files and its uses

- app.py --> Contains route configuration and model prediction process for API.
- covid-home.html --> Contains the structure of the Covid-19 Diagnosis website template.
- deploy_dt.sav --> Machine Learning model that has been trained.
- README --> Instructions about the project.

#

## How to run the API on your computer

1. Make sure you have Anaconda installed.
1. Open a terminal/command prompt/power shell.
1. Create a virtual environment with
   `conda create -n <environment-name> python=3.9`.
1. Activate the virtual environment with
   `conda activate <environment-name>`
1. Install all Python dependencies/packages with
   `pip install -r requirements.txt`
1. Run the API using the command
   `python app.py`

#

## Access via Website

1. You will be given a URL to open the website in the form of `localhost:5000/` or `127.0.0.1:5000/`.
1. Open the URL with a browser, then input the answer in the form of YES or NO on each Dashboard table.
1. You will be given Positive or Negative Diagnosis results on the website page.

#

## Covid 19 Diagnosis Dashboard Demonstration Results

![](/Diagnosis%20of%20Covid%2019/Demo.gif)
