import os 
import json
import numpy as np
import pandas as pd
import dill as pickle
from sklearn.externals import joblib
from sklearn.model_selection import train_test_split, GridSearchCV
from sklearn.base import BaseEstimator, TransformerMixin
from sklearn.ensemble import RandomForestClassifier

from sklearn.pipeline import make_pipeline

import warnings
warnings.filterwarnings("ignore")


def build_and_train():
    
    data = pd.read_csv('Titanic_dataset/train.csv')
    print('training')
    p = PreProcessing()
    Train_set,label = p.transform(data)
    rf = RandomForestClassifier()
    rf.fit(Train_set,label)
    return(rf)

class PreProcessing():
    """Custom Pre-Processing estimator for our use-case
    """

    def __init__(self):
        pass

    def transform(self, df):
        y_label = df['Survived']
        df = df.drop(['Ticket', 'Cabin','Survived'], axis=1)
        df = df.drop(['Ticket', 'Cabin'], axis=1)
        df['Title'] = df.Name.str.extract(' ([A-Za-z]+)\.', expand=False)
        df['Title'] = df['Title'].replace(['Lady', 'Countess','Capt', 'Col', 'Dr', 'Major', 'Rev', 'Sir', 'Jonkheer', 'Dona'], 'Rare')
        df['Title'] = df['Title'].replace('Mlle', 'Miss')
        df['Title'] = df['Title'].replace('Ms', 'Miss')
        df['Title'] = df['Title'].replace('Mme', 'Mrs')
        
        title_mapping = {"Mr": 1, "Miss": 2, "Mrs": 3, "Master": 4, "Rare": 5}
        df['Title'] = df['Title'].map(title_mapping)
        df['Title'] = df['Title'].fillna(0)
        df['Title'] = df['Title'].astype(int)
        
        df = df.drop(['Name', 'PassengerId'], axis=1)
        
        gender_mapping = {'female': 1, 'male': 0}
        df['Sex'] = df['Sex'].map(gender_mapping).astype(int)
        
        guess_ages = np.zeros((2,3))
        for i in range(0, 2):
           for j in range(0, 3):
                guess_df = df[(df['Sex'] == i) & \
                                  (df['Pclass'] == j+1)]['Age'].dropna()
                age_guess = guess_df.median()
                guess_ages[i,j] = int( age_guess/0.5 + 0.5 ) * 0.5
            
        for i in range(0, 2):
            for j in range(0, 3):
                df.loc[ (df.Age.isnull()) & (df.Sex == i) & (df.Pclass == j+1),'Age'] = guess_ages[i,j]
                
                
        df['Age'] = df['Age'].astype(int)
        df['AgeBand'] = pd.cut(df['Age'], 5)    
        df.loc[ df['Age'] <= 16, 'Age'] = 0
        df.loc[(df['Age'] > 16) & (df['Age'] <= 32), 'Age'] = 1
        df.loc[(df['Age'] > 32) & (df['Age'] <= 48), 'Age'] = 2
        df.loc[(df['Age'] > 48) & (df['Age'] <= 64), 'Age'] = 3
        df.loc[ df['Age'] > 64, 'Age']     
        df = df.drop(['AgeBand'], axis=1)
        
        df['FamilySize'] = df['SibSp'] + df['Parch'] + 1
        df['IsAlone'] = 0
        df.loc[df['FamilySize'] == 1, 'IsAlone'] = 1       
        df = df.drop(['Parch', 'SibSp', 'FamilySize'], axis=1)
        df['Age*Class'] = df.Age * df.Pclass
         
        freq_port = df.Embarked.dropna().mode()[0]
        df['Embarked'] = df['Embarked'].fillna(freq_port)
        df['Embarked'] = df['Embarked'].map( {'S': 0, 'C': 1, 'Q': 2} ).astype(int)
        
        df['FareBand'] = pd.qcut(df['Fare'], 4)
        df.loc[ df['Fare'] <= 7.91, 'Fare'] = 0
        df.loc[(df['Fare'] > 7.91) & (df['Fare'] <= 14.454), 'Fare'] = 1
        df.loc[(df['Fare'] > 14.454) & (df['Fare'] <= 31), 'Fare']   = 2
        df.loc[ df['Fare'] > 31, 'Fare'] = 3
        df['Fare'] = df['Fare'].astype(int)
        df = df.drop(['FareBand'], axis=1)
    
        return df.as_matrix(),y_label

if __name__ == '__main__':

    model = build_and_train()
    print('Complete')
    filename = 'model_v2.pk'
    with open('model/'+filename, 'wb') as file:
        pickle.dump(model, file)