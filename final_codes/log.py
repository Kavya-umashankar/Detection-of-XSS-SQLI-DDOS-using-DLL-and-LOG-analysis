#!/usr/bin/env python
# coding: utf-8

# In[1]:

from tensorflow.keras import models
from apachelogs import LogParser
import pandas as pd

import sys

import numpy as np
parser = LogParser("%h %l %u %t \"%r\" %>s %b \"%{Referer}i\" \"%{User-Agent}i\"")

import pandas as pd
global f
f=pd.DataFrame(columns=['IP_Address','Date','Time','Method','Req_url','Status_code','Bytes_recieved','Source_url','User_Agent'])
data={}


# In[ ]:





# In[14]:


def append_df_to_excel(df, excel_path):
    try:
        df_excel = pd.read_excel(excel_path)
        result = pd.concat([df_excel, df], ignore_index=True)
        result.to_excel(excel_path, index=False,engine='xlsxwriter')
    except:
        df.to_excel(excel_path,index=False,engine='xlsxwriter')

def df_to_excel_new(val, excel_path):
    if len(val) ==3:
        try:
            l = pd.read_excel(excel_path)
            abc = np.array(l.iloc[0])
            abc[0]+= val[0]
            abc[1]+= val[1]
            abc[2]+=val[2]
            l.iloc[0] = abc
            l.to_excel(excel_path,index=False,engine='xlsxwriter')
        except:
            l = pd.DataFrame(columns=['Total','Bengin','DDOS'])
            l.loc[0] = val
            l.to_excel(excel_path,index=False,engine='xlsxwriter')

    if len(val)==5:
        try:
            l = pd.read_excel(excel_path)
            abc = np.array(l.iloc[0])
            abc[0]+= val[0]
            abc[1]+= val[1]
            abc[2]+= val[2]
            abc[3]+= val[3]
            abc[4]+=val[4]
            l.iloc[0] = abc
            l.to_excel(excel_path,index=False,engine='xlsxwriter')
        except:
            l = pd.DataFrame(columns=['Total','Bengin','Robot','SQLi','XSS'])
            l.loc[0]=val
            l.to_excel(excel_path,index=False,engine='xlsxwriter')



# In[3]:
try:
    file1 = open("MyFile.txt","r")
    i1=int(file1.readline())
    i1+=1
    file1.close()
except:
    i1=0



with open('D:/Xampp/apache/logs/access.log') as fp:  # doctest: +SKIP
    # count=i1
    data={}
    for i,entry in enumerate(parser.parse_lines(fp)):
        if (i>=i1):
            print(i)
            ob=entry.request_time
            date = ob.strftime("%d-%b-%Y")
            time=ob.strftime("%H:%M:%S")
            try:
                method=entry.request_line.split(" ")[0]
                url=entry.request_line.split(" ")[1]
            except:
                method=None
                url=entry.request_line
    #        ###print(method,)
    #         code=entry.final_status
    #        ###print(code)
            data['IP_Address']=entry.remote_host
            data['Date']=str(date)
            data['Time']=str(time)
            data['Method']=method
            data['Req_url']=url
            data['Status_code']=entry.final_status
            data['Bytes_recieved']=entry.bytes_sent
            data['Source_url']=entry.headers_in['Referer']
            data['User_Agent']=entry.headers_in['User-Agent']
            f = f.append(data,ignore_index=True)
        else:
            continue

    #  ###print(entry.remote_host,date,time,entry.request_line,entry.final_status,entry.bytes_sent,entry.headers_in['Referer'],entry.headers_in['User-Agent'])
        #count+=1  
####print(f)
if f.empty:
    sys.exit()


filew = open("MyFile.txt","w+")
filew.write(str(i))
filew.close()


# f.to_excel('data.xlsx',index=False ,engine='xlsxwriter')
append_df_to_excel(f,"data.xlsx")          


# In[4]:


# df = pd.DataFrame(pd.read_excel("data.xlsx"))
df=f
df=df.sort_values(by=['IP_Address','Date','Time'])
##print(df)

# append_df_to_excel(df,"sorted.xlsx")


# In[5]:


import numpy as np
import pandas as pd
p=pd.DataFrame()
time=0
ip=0
ua=0
source=0
dos=[]
# df = pd.DataFrame(pd.read_excel("sorted.xlsx"))
df = df.fillna('-')
p=df[df['User_Agent']=='-']
####print(p)
nosource=pd.DataFrame()
nosource=p[p['Source_url']=='-']
nosource=p[p['Status_code']==400]
##print(nosource)

ddos=pd.DataFrame(columns=['IP_Address','Date','Time','Num_Req'])
name={}

count=0
if len(nosource)==0:
    print("No DDOS attack found")

else:
    pre=nosource.values[0]
    ##print(pre)
    num=0
    for val in nosource.values:
        num+=1

        if pre[0]==val[0] and pre[1]==val[1] and pre[2]==val[2]:
            count+=1

        else:
            name['IP_Address']=pre[0]
            name['Date']=pre[1]
            name['Time']=pre[2]
            name['Num_Req']=count
            ###print(pre[2],count)
            ddos=ddos.append(name,ignore_index=True)
            count=1
            pre=val
    name['IP_Address']=pre[0]
    name['Date']=pre[1]
    name['Time']=pre[2]
    name['Num_Req']=count
    ddos=ddos.append(name,ignore_index=True)
   ###print(num)
   ###print(ddos)

   ###print(len(ddos))
    append_df_to_excel(ddos, "ddos.xlsx")
    # ddos.to_excel('ddos.xlsx',index=False )


# In[ ]:


# append_df_to_excel(ddos, "ddos.xlsx")


# In[8]:


##print(len(df)-len(nosource))
inject=pd.DataFrame()
inject= df.drop_duplicates().merge(nosource.drop_duplicates(), on=nosource.columns.to_list(), 
                   how='left', indicator=True)
inject.loc[inject._merge=='left_only',inject.columns!='_merge']
####print(inject)
##print(inject)


# In[9]:


df1=pd.DataFrame()
df1 = pd.merge(df,nosource, how='outer', indicator=True)

Output=df1.loc[df1._merge == 'left_only']
####print(df1)
##print(len(Output))
del Output['_merge']
# for i in Output.values:
#    ###print(i)

##print(Output)
# Output.to_excel('output.xlsx')


# In[11]:


other=Output[Output.Req_url.str.contains('^/final_codes')]
##print(other)


# In[15]:


df2=pd.DataFrame()
df2 = pd.merge(Output,other, how='outer', indicator=True)

tool=df2.loc[df2._merge == 'left_only']
####print(df1)
##print(len(tool))
del tool['_merge']
# for i in Output.values:
#    ###print(i)
##print(tool)
#tool.to_excel('owsap.xlsx')
append_df_to_excel(tool, "owasp.xlsx")


# In[16]:


attack=Output[Output.Req_url.str.contains('^/final_codes.*\.php.*')]
##print(attack)
##print(len(attack))


# In[17]:


sql=attack[attack.User_Agent.str.contains('sql')]
##print(sql)
# sql.to_excel('sqlattack.xlsx',index=False)
append_df_to_excel(sql, "sqlattack.xlsx")


# In[18]:



df3=pd.DataFrame()
df3 = pd.merge(attack,sql, how='outer', indicator=True)

rob1=df3.loc[df3._merge == 'left_only']
####print(df1)
##print(len(rob1))
del rob1['_merge']
# for i in Output.values:
#    ###print(i)
##print(rob1)
# tool.to_excel('owsap.xlsx')


# In[20]:


blank=rob1[rob1['Source_url']=='-']
main=blank[blank.Req_url.str.contains('inject.php')]

dele= pd.merge(blank,main, how='outer', indicator=True)

blank=dele.loc[dele._merge == 'left_only']
# ###print(df1)
###print(len(rob1))
del blank['_merge']

###print(main)
###print('**********************')
###print(blank)


# In[21]:


a1= pd.merge(rob1,blank, how='outer', indicator=True)

actual=a1.loc[a1._merge == 'left_only']
# ###print(df1)
###print(len(rob1))
del actual['_merge']
# ###print(actual)
ex=actual
ex=ex.sort_values(by=['IP_Address','Date','Time'])
human = ex.drop_duplicates(subset = ["IP_Address","Date","Time"])

# ###print(len(ex))
df4=pd.DataFrame()
df4 = pd.merge(ex,human, how='outer', indicator=True)

robo=df4.loc[df4._merge == 'left_only']
# ###print(df1)

del robo['_merge']

# ###print(human)
###print(robo)
con=[human,robo]
human=pd.concat(con)
human=human.sort_values(by=['IP_Address','Date','Time'])
# ###print(human)


# In[22]:


sqltool=[sql,blank]
sqltool=pd.concat(sqltool)
sqltool=sqltool.sort_values(by=['IP_Address','Date','Time'])
##print(sqltool)


# In[23]:


append_df_to_excel(sqltool, "robot.xlsx")
append_df_to_excel(human, "human.xlsx")
##print(human)


# In[26]:


from urllib.parse import unquote
import urllib.parse
import logsql as f1
sqlattack1=human[human.Req_url.str.contains('sqlver.php')]

sqli= pd.DataFrame()
lst=[]
for  i in sqlattack1.values:
    file=i[4]
    try:
        first=file.split("=")[1]
        first=first.split("&")[0]
        first= urllib.parse.unquote(first)
        two=file.split("=")[2]
        two= unquote(two)
        a=f1.testing1([first])
        b=f1.testing1([two])
        
        if a ==1 or b ==1:
            lst+=[i]
        

    except:
        print("No Get Methods")

print('*'*100)
# print(sqli)
print('*'*100)


# In[27]:
sqlattack2=human[human.Req_url.str.contains('user_search_disp.php')]
##print(sqlattack2)
for i in sqlattack2.values:
    # print(i)
    file=i[4]
    data=file.split("=")[1]
    data= unquote(data)
    d = f1.testing1([data])
    if d == 1:
        lst+=[i]
sqli=sqli.append(lst)
append_df_to_excel(sqli,'Newsqli.xlsx')
# print(sqli)


from log1xss import test as f2 
xsslst=[]
xss1=human[human.Req_url.str.contains('xssver.php')]
# print(xss1)
xss2= pd.DataFrame()
for i in xss1.values:
    file=i[4]
    xss=file.split("=")[1]
    xss= unquote(xss)
    # print(xss)

    c = f2(xss)
    
    if c ==1 :
        xsslst+=[i]
    # print(xss)
xss2=xss2.append(xsslst)
append_df_to_excel(xss2,'Newxss.xlsx')



# f.drop_duplicates()
tot=len(f)
print("total",tot)
dd=len(nosource)
print(dd)
ben =tot - dd
dos={}
dos['Total']=tot
dos['Bengin'] = tot - dd
dos['DDOS']=dd
print(dos)
lst1 =[tot,ben,dd]
print("list1",lst1)
df_to_excel_new(lst1,"adminddos.xlsx")


att={}
a_total=len(attack)
a_rob=len(sqltool)
a_sql=len(sqli)
a_xss=len(xss2)
ben1= a_total-a_rob-a_sql-a_xss
att['Total']=a_total
att['Bengin']= ben1
att['Robot']=a_rob
att['SQLi']=a_sql
att['XSS']=a_xss
lst=[a_total,ben1,a_rob,a_sql,a_xss]
print(a_total,ben1,a_rob,a_sql,a_xss)
print(att)

df_to_excel_new(lst,"admindata.xlsx")
