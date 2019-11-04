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

$n = 0;
$result = $conn -> query("select * from news");
while ($row = $result -> fetch_array()){
  $arr[$n++] = array("title" => $row["title"],
 						"desc" => $row["desc"],
 						"time" => $row["time"],
 						"content_url" => $row["content_url"],
 						"pic_url" => $row["pic_url"]
					);
}
 
echo json_encode($arr);

?>