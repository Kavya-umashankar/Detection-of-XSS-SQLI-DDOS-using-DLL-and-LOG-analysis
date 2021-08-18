#!/usr/bin/env python
# coding: utf-8

import numpy as np
import pandas as pd

import cv2
from tensorflow.keras import models
from sklearn.model_selection import train_test_split

# In[2]:


def load_csv():
    contents=[]
    with open("XSS_dataset.csv",'r') as f:
        for line in f:
            word = line.split('\n')
            sentence = word[0]
            index , string = sentence.split(',',maxsplit=1)
            sentence, label = string.rsplit(',',maxsplit=1)
            sentence = sentence.strip('"')
            contents += [[sentence , label]]


    contents=contents[1:]
    #print(contents)
    global xssdf
    xssdf = pd.DataFrame(contents,columns=['Sentence','Label'])
    xssdf = xssdf.replace({'\t': ''}, regex=True)
    xssdf['Sentence'] = xssdf['Sentence'].astype(str)
    xssdf['Label']=xssdf['Label'].astype(int)
    
    
load_csv()


# In[3]:


X = xssdf['Sentence']
y = xssdf['Label'].values
trainX, testX, trainY, testY = train_test_split(X,y, test_size=0.2)


# In[4]:


def convert_to_ascii(sentence):
    sentence_ascii=[]

    for i in sentence:
       
        if(ord(i)<8222):      # ”  :  8221
            
            if(ord(i)==8217): # ’  :  8217 
                sentence_ascii.append(39)
            
            
            if(ord(i)==8221): # ”  :  8221 ""
                sentence_ascii.append(34)
                
            if(ord(i)==8220): # “  :  8220
                sentence_ascii.append(34)
                
                
            if(ord(i)==8216): # ‘  :  8216
                sentence_ascii.append(39)
                
            
            if(ord(i)==8211): # –  :  8211
                sentence_ascii.append(45)
                
                
            """
            If values less than 128 store them else discard them
            """
            if (ord(i)<=128):
                    sentence_ascii.append(ord(i))
    
            else:
                    pass
            

    zer=np.zeros((10000))

    for i in range(len(sentence_ascii)):
        zer[i]=sentence_ascii[i]

    zer.shape=(100, 100)

    return zer




# In[5]:


def preprocessing(sentences):
    arr=np.zeros((len(sentences),100,100))

    for i in range(len(sentences)):

        image=convert_to_ascii(sentences[i])

        x=np.asarray(image,dtype='float')
        image =  cv2.resize(x, dsize=(100,100), interpolation=cv2.INTER_CUBIC)
        image/=128

        arr[i]=image
    return arr


# # Testing

# In[6]:


def testing(querystring):
    instance=[]
    instance = testX
    instance = instance[:250]
    instance[-1] = querystring[0]
    test_instance=instance.values
    instance_arr = preprocessing(test_instance)
    instance_data = instance_arr.reshape(instance_arr.shape[0], 100, 100, 1)
    pred=loaded_model.predict(instance_data)
    print(pred[-1])
    if pred[-1]>0.5:
            res=1
    else:
            res=0

    return res


# In[7]:


from tensorflow.keras.models import model_from_json
# load json and create model
json_file = open('xssmodel.json', 'r')
loaded_model_json = json_file.read()
json_file.close()
loaded_model = model_from_json(loaded_model_json)
# load weights into new model
loaded_model.load_weights("xssmodel.h5")
print("Loaded model from disk")
 





# In[ ]:




