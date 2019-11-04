<?php
//header("Content-Type: text/html; charset=UTF-8");

//这里的连接是new出来的，最后一个参数是直接指定数据库，不用mysql_select_db()
//也可以构造时候不指定，然后 $conn -> select_db('data_base') 

//$conn = new mysqli("localhost","root","123","test2");
$conn = new mysqli("localhost","root","123");
$conn -> select_db("test2"); 
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "连接成功";
//获取客户端传递过来的数据
$name=$_POST["name"];                         
//$password=md5($_POST["password"]);
$password=$_POST["password"]; 
//print_r( $_GET["name"] );
//print_r( $_GET["password"] );
die();
//查询数据
$result= $conn -> query("select * from user where name='$name' and password='$password'");               
$info=$result -> fetch_array();
if(!$info)
{
  //  echo "登录失败！";
}
else
{
	/*
    $array=array("user"=>array("id"=>$info["id"],
                               "username"=>$info["name"],
                               "password"=>$info["password"]));
    */
    $array=array("username"=>$info["name"],
                 "password"=>$info["password"]); 
                               
    echo json_encode($array);   
}

?>