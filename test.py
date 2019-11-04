# -*- coding: UTF-8 -*-

#允许中文编码

print 'hello';print 'runoob'; 

'''if True:
    print "Answer"     
    print "True"
else:
    print "error"'''

'''if True:
    print "little"     
    print "tingxi"
else:
    print "error"'''
	
import sys; x = 'runoob'; sys.stdout.write(x + '\n')
	
'''x="a"
y="b"

print x      #打印时自动换行 
print y

print '---------'

print x,      #要打印在同一行，要加逗号
print y,

print x,y'''

counter = 100 # 赋值整型变量
miles = 1000.0 # 浮点型
name = "John" # 字符串
 
print counter,
print miles,
print name

a, b, c = 1, 2, "john"

str = 'Hello World!'
 
print str           # 输出完整字符串
print str[0]        # 输出字符串中的第一个字符
print str[2:5]      # 输出字符串中第三个至第六个之间的字符串
print str[2:]       # 输出从第三个字符开始的字符串
print str * 2       # 输出字符串两次
print str + "TEST"  # 输出连接的字符串

list = [ 'runoob', 786 , 2.23, 'john', 70.2 ]
tinylist = [123, 'john']
 
print list               # 输出完整列表
print list[0]            # 输出列表的第一个元素
print list[1:3]          # 输出第二个至第三个元素 
print list[2:]           # 输出从第三个开始至列表末尾的所有元素
print tinylist * 2       # 输出列表两次
print list + tinylist    # 打印组合的列表

tuple = ( 'runoob', 786 , 2.23, 'john', 70.2 )
tinytuple = (123, 'john')

#元组不能二次赋值，相当于只读列表
print tuple               # 输出完整元组
print tuple[0]            # 输出元组的第一个元素
print tuple[1:3]          # 输出第二个至第四个（不包含）的元素 
print tuple[2:]           # 输出从第三个开始至列表末尾的所有元素
print tinytuple * 2       # 输出元组两次
print tuple + tinytuple   # 打印组合的元组

dict = {}
dict['one'] = "This is one"
dict[2] = "This is two"
 
tinydict = {'name': 'john','code':6734, 'dept': 'sales'}
 
 
print dict['one']          # 输出键为'one' 的值
print dict[2]              # 输出键为 2 的值
print tinydict             # 输出完整的字典
print tinydict.keys()      # 输出所有键
print tinydict.values()    # 输出所有值

a = 21
b = 10
c = 0
 
c = a + b
print u"1 - c 的值为：", c               #print u 输出中文
 
c = a - b
print u"2 - c 的值为：", c 
 
c = a * b
print u"3 - c 的值为：", c 
 
c = a / b
print u"4 - c 的值为：", c 
 
c = a % b
print u"5 - c 的值为：", c
 
# 修改变量 a 、b 、c
a = 2
b = 3
c = a**b 
print u"6 - c 的值为：", c
 
a = 10
b = 5
c = a//b 
print u"7 - c 的值为：", c

a = 21
b = 10
c = 0
 
if  a == b :
   print u"1 - a 等于 b"
else:
   print u"1 - a 不等于 b"
 
if  a != b :
   print u"2 - a 不等于 b"
else:
   print u"2 - a 等于 b"
 
if  a <> b :
   print u"3 - a 不等于 b"
else:
   print u"3 - a 等于 b"
 
if  a < b :
   print u"4 - a 小于 b" 
else:
   print u"4 - a 大于等于 b"
 
if  a > b :
   print u"5 - a 大于 b"
else:
   print u"5 - a 小于等于 b"
 
# 修改变量 a 和 b 的值
a = 5
b = 20
if  a <= b :
   print u"6 - a 小于等于 b"
else:
   print u"6 - a 大于  b"
 
if  b >= a :
   print u"7 - b 大于等于 a"
else:
   print u"7 - b 小于 a"

a = 60            # 60 = 0011 1100 
b = 13            # 13 = 0000 1101 
c = 0
 
c = a & b;        # 12 = 0000 1100
print u"1 - c 的值为：", c
 
c = a | b;        # 61 = 0011 1101 
print u"2 - c 的值为：", c
 
c = a ^ b;        # 49 = 0011 0001
print u"3 - c 的值为：", c
 
c = ~a;           # -61 = 1100 0011
print u"4 - c 的值为：", c
 
c = a << 2;       # 240 = 1111 0000
print u"5 - c 的值为：", c
 
c = a >> 2;       # 15 = 0000 1111
print u"6 - c 的值为：", c

a = 10
b = 20
list = [1, 2, 3, 4, 5 ];
 
if ( a in list ):
   print u"1 - 变量 a 在给定的列表中 list 中"
else:
   print u"1 - 变量 a 不在给定的列表中 list 中"
 
if ( b not in list ):
   print u"2 - 变量 b 不在给定的列表中 list 中"
else:
   print u"2 - 变量 b 在给定的列表中 list 中"
 
# 修改变量 a 的值
a = 2
if ( a in list ):
   print u"3 - 变量 a 在给定的列表中 list 中"
else:
   print u"3 - 变量 a 不在给定的列表中 list 中"

count = 0
while (count < 9):
   print 'The count is:', count
   count = count + 1
 
print "Good bye!"

i = 1
while i < 10:   
    i += 1
    if i%2 > 0:     # 非双数时跳过输出
        continue
    print i         # 输出双数2、4、6、8、10
 
i = 1
while 1:            # 循环条件为1必定成立
    print i         # 输出1~10
    i += 1
    if i > 10:     # 当i大于10时跳出循环
        break

count = 0
while count < 5:
   print count, " is  less than 5"
   count = count + 1
else:
   print count, " is not less than 5"

for letter in 'Python':     # 第一个实例
   print u'当前字母 :', letter
 
fruits = ['banana', 'apple',  'mango']
for fruit in fruits:        # 第二个实例
   print u'当前水果 :', fruit
 
print "Good bye!"

fruits = ['banana', 'apple',  'mango']
for index in range(len(fruits)):
   print u'当前水果 :', fruits[index]
 
print "Good bye!"   

#Python continue 语句跳出本次循环，而break跳出整个循环。
#continue 语句用来告诉Python跳过当前循环的剩余语句，然后继续进行下一轮循环。
#continue语句用在while和for循环中。
i = 2
while(i < 50):
   j = 2
   while(j <= (i/j)):
      if not(i%j): break
      j = j + 1
   if (j > i/j) : print i, u" 是素数"
   i = i + 1
 
print "Good bye!"

for letter in 'Python':     # 第一个实例
   if letter == 'h':
      break
   print u'当前字母 :', letter
  
var = 10                    # 第二个实例
while var > 0:              
   print u'当前变量值 :', var
   var = var -1
   if var == 5:   # 当变量 var 等于 5 时退出循环
      break
 
print "Good bye!"

for letter in 'Python':     # 第一个实例
   if letter == 'h':
      continue
   print u'当前字母 :', letter
 
var = 10                    # 第二个实例
while var > 0:              
   var = var -1
   if var == 5:
      continue
   print u'当前变量值 :', var
print "Good bye!"

#Python pass 是空语句，是为了保持程序结构的完整性。
#pass 不做任何事情，一般用做占位语句。
# 输出 Python 的每个字母
for letter in 'Python':
   if letter == 'h':
      pass
      print u'这是 pass 块'
   print u'当前字母 :', letter
 
print "Good bye!"

var1 = 'Hello World!'
print u"更新字符串 :- ", var1[:6] + 'Runoob!'

list1 = ['physics', 'chemistry', 1997, 2000]
list2 = [1, 2, 3, 4, 5, 6, 7 ]
print "list1[0]: ", list1[0]
print "list2[1:5]: ", list2[1:5]

list = []          ## 空列表
list.append('Google')   ## 使用 append() 添加元素
list.append('Runoob')
print list

list1 = ['physics', 'chemistry', 1997, 2000]
print list1
del list1[2]
print "After deleting value at index 2 : "
print list1

tup1 = ('physics', 'chemistry', 1997, 2000)
tup2 = (1, 2, 3, 4, 5, 6, 7 )
print "tup1[0]: ", tup1[0]
print "tup2[1:5]: ", tup2[1:5]

tup1 = (12, 34.56)
tup2 = ('abc', 'xyz')
# 以下修改元组元素操作是非法的。
# tup1[0] = 100
# 创建一个新的元组
tup3 = tup1 + tup2
print tup3

#字典的每个键值 key=>value 对用冒号 : 分割，每个键值对之间用逗号 , 分割，整个字典包括在花括号 {} 中 
dict = {'Name': 'Zara', 'Age': 7, 'Class': 'First'}
print "dict['Name']: ", dict['Name']
print "dict['Age']: ", dict['Age']

dict['Age'] = 8 # 更新
dict['School'] = "RUNOOB" # 添加
print "dict['Age']: ", dict['Age']
print "dict['School']: ", dict['School']
print dict

#时间戳是指格林威治时间1970年01月01日00时00分00秒(北京时间1970年01月01日08时00分00秒)起至现在的总秒数。通俗的讲， 时间戳是一份能够
#表示一份数据在一个特定时间点已经存在的完整的可验证的数据。 它的
import time;  # 引入time模块
ticks = time.time()
print u"当前时间戳为:", ticks

localtime = time.localtime(time.time())
print u"本地时间为 :", localtime

localtime = time.asctime( time.localtime(time.time()) )
print u"本地时间为 :", localtime

# 格式化成2016-03-20 11:45:39形式
print time.strftime("%Y-%m-%d %H:%M:%S", time.localtime()) 
 
# 格式化成Sat Mar 28 22:24:24 2016形式
print time.strftime("%a %b %d %H:%M:%S %Y", time.localtime()) 
  
# 将格式字符串转换为时间戳
a = "Sat Mar 28 22:24:24 2016"
print time.mktime(time.strptime(a,"%a %b %d %H:%M:%S %Y"))

import calendar
 
cal = calendar.month(2019, 8)
print u"以下输出2019年8月份的日历:"
print cal

# 定义函数
def printme( str ):
   "打印任何传入的字符串"
   print str;
   return;
 
# 调用函数
printme("little xiaoxiao!");
printme("i want eat small frog foot with tingxi");
printme( str = "My string");

def ChangeInt( a ):
    a = 10
b = 2
ChangeInt(b)
print b # 结果是 2

#可写函数说明
def printinfo( name, age ):
   "打印任何传入的字符串"
   print "Name: ", name;
   print "Age ", age;
   return;
 
#调用printinfo函数
printinfo( age=50, name="miki" );

# 可写函数说明
sum = lambda arg1, arg2: arg1 + arg2;
# 调用sum函数
print u"相加后的值为 : ", sum( 10, 20 )
print u"相加后的值为 : ", sum( 20, 20 )

total = 0; # 这是一个全局变量
# 可写函数说明
def sum( arg1, arg2 ):
   #返回2个参数的和."
   total = arg1 + arg2; # total在这里是局部变量.
   print u"函数内是局部变量 : ", total
   return total;
 
#调用sum函数
sum( 10, 20 );
print u"函数外是全局变量 : ", total

# 导入模块test_module.py
import test_module
# 现在可以调用模块里包含的函数了
test_module.print_func("Runoob")

# 导入内置math模块
import math
content = dir(math)
print content;

#导入包package_python中的文件runoob1 runoob2
from package_python.module1 import runoob1
from package_python.module2 import runoob2
 
runoob1()
runoob2()

#empCount 变量是一个类变量，它的值将在这个类的所有实例之间共享。你可以在内部类或外部类使用 Employee.empCount 访问。
#第一种方法__init__()方法是一种特殊的方法，被称为类的构造函数或初始化方法，当创建了这个类的实例时就会调用该方法
#self 代表类的实例，self 在定义类的方法时是必须有的，虽然在调用时不必传入相应的参数。
#self 不是 python 关键字，我们把他换成 runoob 也是可以正常执行的:
#self代表类的实例，而非类
#类的方法与普通的函数只有一个特别的区别——它们必须有一个额外的第一个参数名称, 按照惯例它的名称是 self
class Employee:
   '所有员工的基类'
   empCount = 0
 
   def __init__(self, name, salary):
      self.name = name
      self.salary = salary
      Employee.empCount += 1
   
   def displayCount(self):
     print "Total Employee %d" % Employee.empCount
 
   def displayEmployee(self):
      print "Name : ", self.name,  ", Salary: ", self.salary

"创建 Employee 类的第一个对象"
emp1 = Employee("Zara", 2000)
"创建 Employee 类的第二个对象"
emp2 = Employee("Manni", 5000)
emp1.displayEmployee()
emp2.displayEmployee()
print "Total Employee %d" % Employee.empCount
	  
class Test:
    def prt(self):
        print(self)
        print(self.__class__)
 
t = Test()
t.prt()

class Test:
    def prt(runoob):
        print(runoob)
        print(runoob.__class__)
 
t = Test()
t.prt()	

class Parent:        # 定义父类
   parentAttr = 100
   def __init__(self):
      print u"调用父类构造函数"
 
   def parentMethod(self):
      print u'调用父类方法'
 
   def setAttr(self, attr):
      Parent.parentAttr = attr
 
   def getAttr(self):
      print u"父类属性 :", Parent.parentAttr
 
class Child(Parent): # 定义子类
   def __init__(self):
      print u"调用子类构造方法"
 
   def childMethod(self):
      print u'调用子类方法'
 
c = Child()          # 实例化子类
c.childMethod()      # 调用子类的方法
c.parentMethod()     # 调用父类方法
c.setAttr(200)       # 再次调用父类的方法 - 设置属性值
c.getAttr()          # 再次调用父类的方法 - 获取属性值  

#如果你的父类方法的功能不能满足你的需求，你可以在子类重写你父类的方法：
class Parent:        # 定义父类
   def myMethod(self):
      print u'调用父类方法'
 
class Child(Parent): # 定义子类
   def myMethod(self):
      print u'调用子类方法'
 
c = Child()          # 子类实例
c.myMethod()         # 子类调用重写方法

import MySQLdb
# 打开数据库连接
db = MySQLdb.connect(host="127.0.0.1",user="root",passwd="123",db="test" )

# 使用cursor()方法获取操作游标 
cursor = db.cursor()

# 使用execute方法执行SQL语句
cursor.execute("SELECT VERSION()")

# 使用 fetchone() 方法获取一条数据
data = cursor.fetchone()

print "Database version : %s " % data

# 如果数据表已经存在使用 execute() 方法删除表。
cursor.execute("DROP TABLE IF EXISTS EMPLOYEE")

# 创建数据表SQL语句
sql = """CREATE TABLE EMPLOYEE (
         FIRST_NAME  CHAR(20) NOT NULL,
         LAST_NAME  CHAR(20),
         AGE INT,  
         SEX CHAR(1),
         INCOME FLOAT )"""

cursor.execute(sql)

# SQL 插入语句
sql = """INSERT INTO EMPLOYEE(FIRST_NAME,
         LAST_NAME, AGE, SEX, INCOME)
         VALUES ('Mac', 'Mohan', 20, 'M', 2000)"""
try:
   # 执行sql语句
   cursor.execute(sql)
   # 提交到数据库执行
   db.commit()
except:
   # Rollback in case there is any error
   db.rollback()
   
# SQL 查询语句
sql = "SELECT * FROM EMPLOYEE \
       WHERE INCOME > %s" % (1000)
try:
   # 执行SQL语句
   cursor.execute(sql)
   # 获取所有记录列表
   results = cursor.fetchall()
   for row in results:
      fname = row[0]
      lname = row[1]
      age = row[2]
      sex = row[3]
      income = row[4]
      # 打印结果
      print "fname=%s,lname=%s,age=%s,sex=%s,income=%s" % \
             (fname, lname, age, sex, income )
except:
   print "Error: unable to fecth data"   

# 关闭数据库连接
db.close()

#每个独立的进程有一个程序运行的入口、顺序执行序列和程序的出口。但是线程不能够独立执行，必须依存在应用程序中，由应用程序提供
#多个线程执行控制。
import thread
import time

'''
# 为线程定义一个函数
def print_time( threadName, delay):
   count = 0
   while count < 5:
      time.sleep(delay)
      count += 1
      print "%s: %s" % ( threadName, time.ctime(time.time()) )
 
# 创建两个线程
try:
   thread.start_new_thread( print_time, ("Thread-1", 2, ) )
   thread.start_new_thread( print_time, ("Thread-2", 4, ) )
except:
   print "Error: unable to start thread"
 
while 1:
   pass
'''

import threading   
exitFlag = 0

''' 
class myThread (threading.Thread):   #继承父类threading.Thread
    def __init__(self, threadID, name, counter):
        threading.Thread.__init__(self)
        self.threadID = threadID
        self.name = name
        self.counter = counter
    def run(self):                   #把要执行的代码写到run函数里面 线程在创建后会直接运行run函数 
        print "Starting " + self.name
        print_time(self.name, self.counter, 5)
        print "Exiting " + self.name
 
def print_time(threadName, delay, counter):
    while counter:
        if exitFlag:
            (threading.Thread).exit()
        time.sleep(delay)
        print "%s: %s" % (threadName, time.ctime(time.time()))
        counter -= 1
 
# 创建新线程
thread1 = myThread(1, "Thread-1", 1)
thread2 = myThread(2, "Thread-2", 2)
 
# 开启线程
thread1.start()
thread2.start()
 
print "Exiting Main Thread"
'''

import json

data = [ { 'a' : 1, 'b' : 2, 'c' : 3, 'd' : 4, 'e' : 5 } ]
json = json.dumps(data)
print json


import json

jsonData = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

text = json.loads(jsonData)
print text

