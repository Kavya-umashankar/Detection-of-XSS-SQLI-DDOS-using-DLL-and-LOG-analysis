#!/usr/bin/env python
# coding: utf-8

# In[1]:
import time
import sys
start=time.time()
import pandas as pd

from sklearn.model_selection import train_test_split

from sklearn.feature_extraction.text import CountVectorizer

import sklearn

from keras.models import model_from_json

import pickle




# import os
# os.environ['path']


# In[2]:


def load_csv():
    global sqlidf
    contents=[]
    with open("sqli.csv",'r',encoding = 'utf-16') as f:
        for line in f:
            word=line.split('\n')
            list2 = [x for x in word if x]
            list1 = list2[0].rsplit(',',maxsplit=1)
            sentence=list1[0][1:]
            label=list1[1][:-1]
            listx=[sentence,label]
            contents += [listx]

    contents=contents[1:]
    sqlidf = pd.DataFrame(contents,columns=['Sentence','Label'])
    
load_csv()


# In[3]:


sqlidf['Sentence'] = sqlidf['Sentence'].astype(str)
sqlidf['Label']=sqlidf['Label'].astype(int)


# In[4]:


X=sqlidf['Sentence']
y=sqlidf['Label']
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2)


# In[5]:


# load json and create model
json_file = open('model.json', 'r')
loaded_model_json = json_file.read()
json_file.close()
loaded_model = model_from_json(loaded_model_json)
# load weights into new model
loaded_model.load_weights("model.h5")
# print("Loaded model from disk")
 


# In[6]:


def testing1(querystring):
    instance = X_test
    instance.iloc[0] = querystring[0]
    # print(instance.iloc[0])
    vocabulary_to_load = pickle.load(open("dictionary.pickle", 'rb'))
    loaded_vectorizer = sklearn.feature_extraction.text.CountVectorizer(vocabulary=vocabulary_to_load)
    loaded_vectorizer._validate_vocabulary()
    
    instance_posts = loaded_vectorizer.transform(instance).toarray()
    
    pred = loaded_model.predict(instance_posts)
    # print(pred[0])
    if pred[0]>0.5:
        res=1
    else:
        res=0
        
    return res

