from os import name
import pandas as pd
import matplotlib.pyplot as plt

data = pd.read_excel("adminddos.xlsx")


Name = data.columns
# for i in Name:
#        print(i,end=" ")
# print("\n")
Name = Name[1:]



val = list(data.loc[0])
for i in val:
       print(i,end=" ")
print("\n")
val= val[1:]



fig, ax = plt.subplots()
color_palette_list = ['#FF4D70','#FFE141','#00BEFE','#33CC66']
plt.rcParams['font.sans-serif'] = 'Arial'
plt.rcParams['font.family'] = 'sans-serif'
plt.rcParams['text.color'] = 'black'
plt.rcParams['axes.labelcolor']= '#909090'
plt.rcParams['xtick.color'] = '#909090'
plt.rcParams['ytick.color'] = '#909090'
plt.rcParams['font.size']=20
fig.set_facecolor('#D5EBFD')
labels = Name
percentages = val
exp=(0.05,0.05)
ax.pie(percentages, explode=exp, labels=labels,  
       colors=color_palette_list[0:2], autopct='%1.0f%%', 
       shadow=True, startangle=0,   
       pctdistance=0.5,labeldistance=1.2)
ax.axis('equal')

fig.savefig('ddos.png')




data1 = pd.read_excel("admindata.xlsx")

Name1 = data1.columns
# for i in Name1:
#        print(i,end=" ")
# print("\n")
Name1 = Name1[1:]


val1 = list(data1.loc[0])
for i in val1:
       print(i,end=" ")
print("\n")
val1= val1[1:]


fig1, ax1 = plt.subplots()

plt.rcParams['font.sans-serif'] = 'Arial'
plt.rcParams['font.family'] = 'sans-serif'
plt.rcParams['text.color'] = 'black'
plt.rcParams['axes.labelcolor']= '#909090'
plt.rcParams['xtick.color'] = '#909090'
plt.rcParams['ytick.color'] = '#909090'
plt.rcParams['font.size']=20
fig1.set_facecolor('#D5EBFD')
labels = Name1
percentages = val1
explode=(0.05,0.05,0.05,0.05)
ax1.pie(percentages, explode=explode, labels=labels,  
       colors=color_palette_list[0:], autopct='%1.0f%%', 
       shadow=True, startangle=0,   
       pctdistance=0.5,labeldistance=1.2)
ax1.axis('equal')

fig1.savefig('main.png')