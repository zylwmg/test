# -*- coding: UTF-8 -*-
# 文件名：server.py
 
import socket               # 导入 socket 模块
 
s = socket.socket()         # 创建 socket 对象
host = socket.gethostname() # 获取本地主机名
port = 12345                # 设置端口
s.bind((host, port))        # 绑定端口
 
s.listen(5)                 # 等待客户端连接
while True:
    c,addr = s.accept()     # 建立客户端连接   c:为客户端连接成功后返回 connection 对象   addr:客户端的地址
    print u'连接地址：', addr
    c.send('client connect successfully')      #发给客户端的数据
    c.close()                # 关闭连接