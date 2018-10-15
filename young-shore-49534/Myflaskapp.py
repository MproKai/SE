# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

from flask import Flask , render_template,flash,redirect,url_for,session,logging,request
#from data import Articles
from flask_mysqldb import MySQL
#from flask_sqlalchemy import SQLAlchemy
from wtforms import Form,StringField,TextAreaField,PasswordField,validators
from passlib.hash import sha256_crypt
from functools import wraps

import os 
import json
import numpy as np
import pandas as pd
import dill as pickle
from sklearn.externals import joblib
from sklearn.model_selection import train_test_split, GridSearchCV
from sklearn.base import BaseEstimator, TransformerMixin
from sklearn.ensemble import RandomForestClassifier

app = Flask(__name__)
app.secret_key='secret123'

# Config MySQL
app.config['MYSQL_HOST'] = '35.196.78.102'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = 'th850413'
app.config['MYSQL_DB'] = 'flasktest'
app.config['MYSQL_CURSORCLASS'] = 'DictCursor'

# init MYSQL
mysql = MySQL(app)


#Articles = Articles()

# Home
@app.route('/')
def index():
    return render_template('index.html')

# About
@app.route('/about')
def about():
    return render_template('about.html')

# Articles
@app.route('/articles')
def articles():
    # Create cursor
    cur = mysql.connection.cursor()
    
    # Get articles
    result = cur.execute("SELECT * FROM articles")
    
    articles = cur.fetchall()
    
    if result > 0:
        return render_template('articles.html',articles = articles)
    else:
        msg = 'No Articles Found'
        return render_template('articles.html',msg = msg)
    
    # Close connection
    cur.close()

# Single article
@app.route('/article/<string:id>/')
def article(id):
    
     # Create cursor
    cur = mysql.connection.cursor()
    
    # Get article
    result = cur.execute("SELECT * FROM articles WHERE id=%s",[id])
    
    article = cur.fetchone()
    
    return render_template('article.html', article = article)

# Register form class
class RegisterForm(Form):
    name = StringField('Name',[validators.Length(min=1,max=50)])
    username = StringField('Username',[validators.Length(min=4,max=25)])
    email = StringField('Email',[validators.Length(min=6,max=50)])
    password = PasswordField('Password',[
            validators.DataRequired(),
            validators.EqualTo('confirm',message = 'Passwords do not match')
    ])
    confirm = PasswordField('Confirm Password')
    
    
# User register
@app.route('/register',methods=['GET','POST'])
def register():
    form = RegisterForm(request.form)
    if request.method =='POST' and form.validate():
        name = form.name.data
        email = form.email.data
        username = form.username.data
        password = sha256_crypt.encrypt(str(form.password.data))
        
        # Create cursor
        cur = mysql.connection.cursor()
        
        # Execute query
        cur.execute("INSERT INTO users(name,email,username,password) VALUES(%s, %s, %s, %s)"
                    ,(name, email, username, password)) 
        
        # Commit to DB
        mysql.connection.commit()
        
        # Close connection
        cur.close()
        
        flash('You are now registered and can login','success')
        
        return redirect(url_for('login'))   
    return render_template('register.html',form = form)    
        
# User login
@app.route('/login',methods=['GET','POST'])
def login():
    if request.method =='POST':
        # Get Form Fields
        username = request.form['username']
        password_candidate = request.form['password']
        
        # Create cursor
        cur = mysql.connection.cursor()
        
        # Get user by username
        result = cur.execute("SELECT * FROM users WHERE username = %s",[username])
        
        if result > 0 :
            # Get stored hash
            data = cur.fetchone()
            password = data['password']
            
            # Compare Passwords
            if sha256_crypt.verify(password_candidate,password):
                # Passed
                session['login_in'] = True
                session['username'] = username
                
                flash('You are now logged in','success')
                return redirect(url_for('dashboard'))
            else:
                error = 'Invalid login'
                return render_template('login.html',error = error)
            #Close connect
            cur.close()
        else:
            error = 'Username not found'
            return render_template('login.html',error = error)
            
        
    return render_template('login.html')

# Check if user logged in
def is_logged_in(f):
    @wraps(f)
    def wrap(*args,**kwargs):
        if 'login_in' in session:
            return f(*args,**kwargs)
        else:
            flash('Unauthorized,Please log in','danger')
            return redirect(url_for('login'))
    return wrap


# Logout
@app.route('/logout')
@is_logged_in
def logout():
    session.clear()
    flash('You are now logged out','success')
    return redirect(url_for('login'))


# Dashboard
@app.route('/dashboard')
@is_logged_in
def dashboard():
    # Create cursor
    cur = mysql.connection.cursor()
    
    # Get articles
    result = cur.execute("SELECT * FROM articles")
    
    articles = cur.fetchall()
    
    if result > 0:
        return render_template('dashboard.html',articles = articles)
    else:
        msg = 'No Articles Found'
        return render_template('dashboard.html',msg = msg)
    
    # Close connection
    cur.close()
    
    

# Article Form Class
class ArticleForm(Form):
    title = StringField('Title',[validators.Length(min=1,max=200)])
    body = TextAreaField('Body',[validators.Length(min=30)])
    

# Add Article
@app.route('/add_article',methods=['GET','POST'])
@is_logged_in
def add_article():
    form = ArticleForm(request.form)
    if request.method =='POST' and form.validate():
        title = form.title.data
        body = form.body.data
        
        # Create Cursor
        cur = mysql.connection.cursor()
        
        # Execute
        cur.execute("INSERT INTO articles(title,body,author) VALUES(%s,%s,%s)",(title,body,session['username']))
        
        # Commit to DB
        mysql.connection.commit()
        
        # Close connection
        cur.close()
        
        flash('Article Created','success')
        
        return redirect(url_for('dashboard'))
    
    return render_template('add_article.html',form=form)

# Edit Article
@app.route('/edit_article/<string:id>',methods=['GET','POST'])
@is_logged_in
def edit_article(id):
    # Create cursor
    cur = mysql.connection.cursor()
    
    # Get article by id
    result = cur.execute("SELECT * FROM articles WHERE id = %s",[id])
    
    article = cur.fetchone()
    
    # Get form
    form = ArticleForm(request.form)
    
    # Populate article form fields
    form.title.data = article['title']
    form.body.data = article['body']
    
    if request.method =='POST' and form.validate():
        title = request.form['title']
        body = request.form['body']
        
        # Create Cursor
        cur = mysql.connection.cursor()
        
        # Execute
        cur.execute("UPDATE articles SET title= %s, body=%s WHERE id=%s",(title,body,id))
        
        # Commit to DB
        mysql.connection.commit()
        
        # Close connection
        cur.close()
        
        flash('Article Updated','success')
        
        return redirect(url_for('dashboard'))
    
    return render_template('edit_article.html',form=form)
    

# Delete Article
@app.route('/delete_article/<string:id>',methods=['POST'])
@is_logged_in
def delete_article(id):
    # Create cursor
    cur = mysql.connection.cursor()
    
    # Get article by id
    cur.execute("DELETE FROM articles WHERE id = %s",[id])
    
    # Commit to DB
    mysql.connection.commit()
        
    # Close connection
    cur.close()
        
    flash('Article Deleted','success')
        
    return redirect(url_for('dashboard'))


# Titanic ML form class
class Titanic_ml(Form):
    Pclass = StringField('Pclass',[validators.Length(min=1,max=10)])
    Sex = StringField('Sex',[validators.Length(min=1,max=10)])
    Age = StringField('Age',[validators.Length(min=1,max=10)])
    Fare = StringField('Fare',[validators.Length(min=1,max=10)])
    Embarked = StringField('Embarked',[validators.Length(min=1,max=10)])
    Title = StringField('Title',[validators.Length(min=1,max=10)])
    IsAlone = StringField('IsAlone',[validators.Length(min=1,max=10)])
    AgePclass = StringField('AgePclass',[validators.Length(min=1,max=10)])
    
# Ml
@app.route('/Titanic_ML',methods=['GET','POST'])
@is_logged_in
def Titanic_ML():
    form = Titanic_ml(request.form)
    if request.method =='POST' and form.validate():
        Pclass = form.Pclass.data
        Sex = form.Sex.data
        Age = form.Age.data
        Fare = form.Fare.data
        Embarked = form.Embarked.data
        Title = form.Title.data
        IsAlone = form.IsAlone.data
        AgePclass = form.AgePclass.data
        
        print("The model has been loaded...doing training now...")
        loaded_model = None
        with open('model/model_v2.pk','rb') as f:
            loaded_model = pickle.load(f)
        
        print('ok1')    
        parm = np.array([int(Pclass), int(Sex) , int(Age), int(Fare), int(Embarked), int(Title), int(IsAlone), int(AgePclass)]).reshape(1,-1)
        
        print('ok2') 
        prediction = loaded_model.predict(parm) # result
        print('ok3')
        if prediction[0] == 0:
            ans = '我選擇死亡'
        else:
            ans = '沒死ㄏㄏ'
        print(ans)
        #Create cursor
        cur = mysql.connection.cursor()
    
        # Send Paremeters
        cur.execute("INSERT INTO titanic_ml(Pclass,Sex,Age,Fare,Embarked,Title,IsAlone,AgePclass) VALUES(%s, %s, %s, %s, %s, %s, %s, %s)"
                    ,(Pclass,Sex,Age,Fare,Embarked,Title,IsAlone,AgePclass))

        # Commit to DB
        mysql.connection.commit()
    
        # Close connection
        cur.close()
        
        return render_template('titanic_ml_ans.html',ans=ans)
    return render_template('titanic_ml.html',form = form)    


if __name__ == '__main__':
    app.run(host='0.0.0.0')
    
    
    
    
    
    
    
    
    
    
    
    