from keras.models import model_from_json
import sys

# load json and create model
json_file = open('modelxss.json', 'r')
loaded_model_json = json_file.read()
json_file.close()
loaded_model = model_from_json(loaded_model_json)
# load weights into new model
loaded_model.load_weights("modelxss.h5")
# s


import sys
s=sys.argv[1]
#s='kavya harsha varsha architha'


# In[133]:


import pandas as pd


li=[]


# In[134]:


import re
if("&lt" in s):
    li.append(1)
else:
    li.append(0)



# In[135]:


if("<script>" in s):
    li.append(1)
else:
    li.append(0)


# In[136]:


if('"><' in s):
    li.append(1)
else:
    li.append(0)


# In[137]:


if("'><" in s):
    li.append(1)
else:
    li.append(0)


# In[138]:


if("and" in s):
    li.append(1)
else:
    li.append(0)


# In[139]:


if("%" in s):
    li.append(1)
else:
    li.append(0)


# In[140]:


if("/" in s):
    li.append(1)
else:
    li.append(0)


# In[141]:


if("\\" in s):
    li.append(1)
else:
    li.append(0)


# In[142]:


if("+" in s):
    li.append(1)
else:
    li.append(0)


# In[143]:


if("document." in s):
    li.append(1)
else:
    li.append(0)


# In[144]:


if("window." in s):
    li.append(1)
else:
    li.append(0)


# In[145]:


if(".Onload" in s):
    li.append(1)
else:
    li.append(0)


# In[146]:


if("onerror" in s):
    li.append(1)
else:
    li.append(0)


# In[147]:


if("<div>" in s):
    li.append(1)
else:
    li.append(0)


# In[148]:


if("<iframe>" in s):
    li.append(1)
else:
    li.append(0)


# In[149]:


if("<img>" in s):
    li.append(1)
else:
    li.append(0)


# In[150]:


if("src" in s):
    li.append(1)
else:
    li.append(0)


# In[151]:


if("var" in s):
    li.append(1)
else:
    li.append(0)


# In[152]:


if("eval" in s):
    li.append(1)
else:
    li.append(0)


# In[153]:


if("href" in s):
    li.append(1)
else:
    li.append(0)


# In[154]:


if("cookie" in s):
    li.append(1)
else:
    li.append(0)


# In[155]:


if(".fromCharCode()" in s):
    li.append(1)
else:
    li.append(0)


# In[156]:


if("'" in s):
    li.append(1)
else:
    li.append(0)


# In[157]:


if("?" in s):
    li.append(1)
else:
    li.append(0)


# In[158]:


if("!" in s):
    li.append(1)
else:
    li.append(0)


# In[159]:


if(";" in s):
    li.append(1)
else:
    li.append(0)


# In[160]:


if("js" in s):
    li.append(1)
else:
    li.append(0)


# In[161]:


if("#" in s):
    li.append(1)
else:
    li.append(0)


# In[162]:


if("=" in s):
    li.append(1)
else:
    li.append(0)


# In[163]:


if("(" in s):
    li.append(1)
else:
    li.append(0)


# In[164]:


if(")" in s):
    li.append(1)
else:
    li.append(0)


# In[165]:


if("[[]]" in s):
    li.append(1)
else:
    li.append(0)


# In[166]:


if("$" in s):
    li.append(1)
else:
    li.append(0)


# In[167]:


if("{" in s):
    li.append(1)
else:
    li.append(0)


# In[168]:


if("}" in s):
    li.append(1)
else:
    li.append(0)


# In[169]:


if("*" in s):
    li.append(1)
else:
    li.append(0)


# In[170]:


if("," in s):
    li.append(1)
else:
    li.append(0)


# In[171]:


if("-" in s):
    li.append(1)
else:
    li.append(0)


# In[172]:


if("<" in s):
    li.append(1)
else:
    li.append(0)


# In[173]:


if(">" in s):
    li.append(1)
else:
    li.append(0)


# In[174]:


if("at" in s):
    li.append(1)
else:
    li.append(0)


# In[175]:


if("_" in s):
    li.append(1)
else:
    li.append(0)


# In[176]:


if("location" in s):
    li.append(1)
else:
    li.append(0)


# In[177]:


if("search" in s):
    li.append(1)
else:
    li.append(0)


# In[178]:


if("&#" in s):
    li.append(1)
else:
    li.append(0)


# In[179]:


if(":" in s):
    li.append(1)
else:
    li.append(0)


# In[180]:


if("." in s):
    li.append(1)
else:
    li.append(0)


# In[181]:


if("[" in s):
    li.append(1)
else:
    li.append(0)


# In[182]:


if("]" in s):
    li.append(1)
else:
    li.append(0)


# In[183]:


if("`" in s):
    li.append(1)
else:
    li.append(0)


# In[184]:


if(" " in s):
    li.append(1)
else:
    li.append(0)


# In[185]:


if('"' in s):
    li.append(1)
else:
    li.append(0)


# In[186]:


if("==" in s):
    li.append(1)
else:
    li.append(0)


# In[187]:


if("//" in s):
    li.append(1)
else:
    li.append(0)


# In[188]:


if("|" in s):
    li.append(1)
else:
    li.append(0)


# In[189]:


if("^" in s):
    li.append(1)
else:
    li.append(0)


# In[190]:


if("¦" in s):
    li.append(1)
else:
    li.append(0)


# In[191]:


if("alert" in s):
    li.append(1)
else:
    li.append(0)


# In[192]:


if("<br" in s):
    li.append(1)
else:
    li.append(0)


# In[193]:


letter=0
number=0
symbol=0
for i in s:
    if i.isalpha():
        letter+=1
    elif i.isdigit():
        number+=1
    else:
        symbol+=1
l=len(s)
# print(l,letter,number,symbol)


# In[194]:


li.append(letter/l)
li.append(number/l)
li.append(symbol/l)


# In[195]:





# In[196]:





lst= li


# In[101]:


ans = loaded_model.predict_classes([lst])


# In[102]:
ans=ans[0][0]

print(ans)
