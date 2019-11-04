#!/usr/bin/env python
# coding: utf-8

# In[1]:


print('hello world')


# In[6]:


list = [ 'runoob', 786 , 2.23, 'john', 70.2 ]
tinylist = [123, 'john']
print list               # 输出完整列表
print list[0]            # 输出列表的第一个元素
print list[1:3]          # 输出第二个至第三个元素 
print list[2:]           # 输出从第三个开始至列表末尾的所有元素
print tinylist * 2       # 输出列表两次
print list + tinylist    # 打印组合的列表


# In[6]:


import numpy 
i=numpy.array([[520,13,14],[25,9,178]])
print ("i:\n{}".format(i))


# In[8]:


import numpy as np
from scipy import sparse
matrix=np.eye(6)
#上面 用numpy的eye函数生成一个6行 6列的对角矩阵
#矩阵中对角线上的元素数值为1，其余为0
sparse_matrix=sparse.csr_matrix(matrix)
#这一行把np数组转化为CSR格式的scipy稀疏矩阵(sparse matrix)
#sparse函数只会存储非0元素
print ("对角矩阵:\n{}".format(matrix))
#将生成的对角矩阵打印出来
print ("\nsparse存储的矩阵:\n{}".format(sparse_matrix))
#将sparse函数生成的矩阵打印出来进行对比


# In[10]:


import pandas
data={ "name":["小小","小东东","小样子","咋了尼"],
       "city":["北京","上海","广州","深圳"],
       "age":["18","20","25","32"],
       "height":["140","150","162","168"]}
data_frame=pandas.DataFrame(data)
display(data_frame)


# In[11]:


display(data_frame[data_frame.city !="北京"])


# In[13]:


get_ipython().magic(u'matplotlib inline')
import matplotlib.pyplot as plt
#下面先生成一个从-20到20，元素数为10的等差数列
x=np.linspace(-20,20,10)
y=x**3+2*x**2+6*x+5
plt.plot(x,y,marker="o")


# In[ ]:




