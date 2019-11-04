<!DOCTYPE html> 
<html> 
<body> 
<!--
<h1>My first PHP page</h1> 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<a href="test.php?subject=PHP&web=runoob.com">Test $GET</a>
-->
<?php
//$name = $_REQUEST['fname']; 
//echo $name; 
echo "<br>";      //换行
//$name = $_POST['fname']; 
//echo $name;
echo "<br>"; 
//echo "Study " . $_GET['subject'] . " @ " . $_GET['web'];

$x=5; // 全局变量 
$y=29;
function myTest() 
{ 
    $y=10; // 局部变量 
	global $x;
    echo "<p>测试函数内变量:<p>"; 
    echo "变量 x 为: $x"; 
    echo "<br>"; 
    echo "变量 y 为: $y"; 
}  
myTest(); 

echo "<p>测试函数外变量:<p>"; 
echo "变量 x 为: $x"; 
echo "<br>"; 
echo "变量 y 为: $y"; 

function myTest1() 
{ 
    static $x=0; 
    echo "<p>$x<p>"; 
    $x++; 
} 
myTest1(); 
myTest1(); 
myTest1(); 

echo "<h2>PHP 很有趣!</h2>";
echo "Hello world!<br>";
echo "我要学 PHP!<br>";
echo "这是一个", "字符串，", "使用了", "多个", "参数。";

$txt1="学习 PHP";
$txt2="RUNOOB.COM";
$cars=array("Volvo","BMW","Toyota");
 
print $txt1;
print "<br>";
print "在 $txt2 学习 PHP ";
print "<br>";
print "我车的品牌是 {$cars[0]}";
print "<br>";

$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;

$x = "Hello world!";
echo $x;
echo "<br>"; 
$x = 'Hello world!';
echo $x;

$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);

$cars=array("Volvo","BMW","Toyota");
var_dump($cars);

class Car
{
  var $color;
  function __construct($color="green") {
    $this->color = $color;
  }
  function what_color() {
    return $this->color;
  }
}

echo "<br>";      //换行

if(42 == "42") {
    echo '1、值相等';
}
 
echo PHP_EOL; // 换行符
 
if(42 === "42") {
    echo '2、类型相等';
} else {
    echo '3、不相等';
}
echo "<br>";      //换行

// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
echo 'greeting';   // 输出 "greeting"
echo "<br>";      //换行

$txt1="Hello world!"; 
$txt2="What a nice day!"; 
echo $txt1 . " " . $txt2; 

echo "<br>";      //换行
echo strlen("Hello world!"); 
echo "<br>";      //换行

$x=10; 
echo $x; // 输出10
 
$y=20; 
$y += 100;
echo $y; // 输出120
 
$z=50;
$z -= 25;
echo $z; // 输出25
 
$i=5;
$i *= 6;
echo $i; // 输出30
 
$j=10;
$j /= 5;
echo $j; // 输出2
 
$k=15;
$k %= 4;
echo $k; // 输出3

echo "<br>";      //换行
$t=date("H");
if ($t<"10")
{
    echo "Have a good morning!";
}
elseif ($t<"20")
{
    echo "Have a good day!";
}
else
{
    echo "Have a good night!";
}
echo "<br>";      //换行
$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo count($cars);
$arrlength=count($cars);
sort($cars);
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";      //换行
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";      //换行
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";      

echo "<br>";      //换行
$i=1;
while($i<=5)
{
    echo "The number is " . $i . "<br>";
    $i++;
}
echo "<br>";      //换行
for ($i=1; $i<=5; $i++)
{
    echo "The number is " . $i . "<br>";
}
echo "<br>";      //换行
function add($x,$y)
{
    $total=$x+$y;
    return $total;
}
 
echo "1 + 16 = " . add(1,16);
echo "<br>";      //换行
echo '这是第 " '  . __LINE__ . ' " 行';
echo "<br>";      //换行
echo '该文件位于 " '  . __FILE__ . ' " ';
echo '该文件位于 " '  . __DIR__ . ' " ';

function test() {
    echo  '函数名为：' . __METHOD__ ;
}
test();
echo "<br>";      //换行
class Site { 
  /* 成员变量 */ 
  var $url; 
  var $title; 
   
  /* 成员函数 */ 
  function setUrl($par){ 
     $this->url = $par; 
  } 
   
  function getUrl(){ 
     echo $this->url . PHP_EOL; 
  } 
   
  function setTitle($par){ 
     $this->title = $par; 
  } 
   
  function getTitle(){ 
     echo $this->title . PHP_EOL; 
  } 
} 

$runoob = new Site; 
$taobao = new Site; 
$google = new Site; 

// 调用成员函数，设置标题和URL 
$runoob->setTitle( "菜鸟教程" ); 
$taobao->setTitle( "淘宝" ); 
$google->setTitle( "Google 搜索" ); 

$runoob->setUrl( 'www.runoob.com' ); 
$taobao->setUrl( 'www.taobao.com' ); 
$google->setUrl( 'www.google.com' ); 

// 调用成员函数，获取标题和URL 
$runoob->getTitle(); 
$taobao->getTitle(); 
$google->getTitle(); 
echo "<br>";      //换行
$runoob->getUrl(); 
$taobao->getUrl(); 
$google->getUrl();  
echo "<br>";      //换行

// 声明一个'iTemplate'接口
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}


// 实现接口
class Template implements iTemplate
{
    private $vars = array();
  
    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }
  
    public function getHtml($template)
    {
        foreach($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }
 
        return $template;
    }
}
$Template1 = new Template(); 

?>

<?php
//PHP 表单验证
// 定义变量并默认设置为空值
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {
        $nameErr = "名字是必需的";
    }
    else
    {
        $name = test_input($_POST["name"]);
        // 检测名字是否只包含字母跟空格
        if (!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $nameErr = "只允许字母和空格"; 
        }
    }
    
    if (empty($_POST["email"]))
    {
      $emailErr = "邮箱是必需的";
    }
    else
    {
        $email = test_input($_POST["email"]);
        // 检测邮箱是否合法
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
        {
            $emailErr = "非法邮箱格式"; 
        }
    }
    
    if (empty($_POST["website"]))
    {
        $website = "";
    }
    else
    {
        $website = test_input($_POST["website"]);
        // 检测 URL 地址是否合法
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
        {
            $websiteErr = "非法的 URL 的地址"; 
        }
    }
    
    if (empty($_POST["comment"]))
    {
        $comment = "";
    }
    else
    {
        $comment = test_input($_POST["comment"]);
    }
    
    if (empty($_POST["gender"]))
    {
        $genderErr = "性别是必需的";
    }
    else
    {
        $gender = test_input($_POST["gender"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP 表单验证实例</h2>
<p><span class="error">* 必需字段。</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   名字: <input type="text" name="name" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   网址: <input type="text" name="website" value="<?php echo $website;?>">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   备注: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
   <br><br>
   性别:
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>  value="female">女
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">男
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>您输入的内容是:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


欢迎
<?php 
//通过 $_POST 变量来收集表单数据了,test_php_post.html,method=post
echo $_POST["fname"]; 

?>!<br>
你的年龄是
<?php echo $_POST["age"];
 ?>  岁。
 
欢迎 <?php echo $_REQUEST["fname"]; ?>!<br>
你的年龄是 <?php echo $_REQUEST["age"]; ?>  岁。

<?php
$q = isset($_GET['q'])? htmlspecialchars($_GET['q']) : '';
if($q) {
        if($q =='RUNOOB') {
                echo '菜鸟教程<br>http://www.runoob.com';
        } else if($q =='GOOGLE') {
                echo 'Google 搜索<br>http://www.google.com';
        } else if($q =='TAOBAO') {
                echo '淘宝<br>http://www.taobao.com';
        }
} else {
?>
<form action="" method="get"> 
    <select name="q">
    <option value="">选择一个站点:</option>
    <option value="RUNOOB">Runoob</option>
    <option value="GOOGLE">Google</option>
    <option value="TAOBAO">Taobao</option>
    </select>
    <input type="submit" value="提交">
    </form>
<?php
}
?>

<?php
$q = isset($_POST['q'])? $_POST['q'] : '';
if(is_array($q)) {
    $sites = array(
            'RUNOOB' => '菜鸟教程: http://www.runoob.com',
            'GOOGLE' => 'Google 搜索: http://www.google.com',
            'TAOBAO' => '淘宝: http://www.taobao.com',
    );
    foreach($q as $val) {
        // PHP_EOL 为常量，用于换行
        echo $sites[$val] . PHP_EOL;
    }
      
} else {
?>
<form action="" method="post"> 
    <input type="checkbox" name="q[]" value="RUNOOB"> Runoob<br> 
    <input type="checkbox" name="q[]" value="GOOGLE"> Google<br> 
    <input type="checkbox" name="q[]" value="TAOBAO"> Taobao<br>
    <input type="submit" value="提交">
</form>
<?php
}
?>

<?php
$expire=time()+60*60*24*30;
setcookie("user", "runoob", $expire);

// 输出 cookie 值
echo $_COOKIE["user"];
echo "<br>";
// 查看所有 cookie
print_r($_COOKIE);
echo "<br>";
if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";
echo "<br>";

// 设置 cookie 过期时间为过去 1 小时  
//删除cookie
//setcookie("user", "", time()-3600);
echo "<br>";

session_start();
// 存储 session 数据
$_SESSION['views1']=1;

// 检索 session 数据
echo "浏览量：". $_SESSION['views1'];
echo "<br>";
if(isset($_SESSION['views']))
{
    $_SESSION['views']=$_SESSION['views']+1;
}
else
{
    $_SESSION['views']=1;
}
echo "浏览量：". $_SESSION['views'];

//销毁 Session
if(isset($_SESSION['views']))
{
    unset($_SESSION['views']);
}
//彻底销毁 session
session_destroy();
echo "<br>";
?>

<?php
//对变量进行 JSON 编码
   $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
   echo json_encode($arr);
 echo "<br>"; 
 
   class Emp {
       public $name = "";
       public $hobbies  = "";
       public $birthdate = "";
   }
   $e = new Emp();
   $e->name = "sachin";
   $e->hobbies  = "sports";
   $e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

   echo json_encode($e);
   echo "<br>";
  
//对 JSON 格式的字符串进行解码，并转换为 PHP 变量  
  $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

   var_dump(json_decode($json));
    echo "<br>";
   var_dump(json_decode($json, true));
     echo "<br>";
?>

<?php
//如果你使用其他端口（默认为3306），为数据库参数添加空字符串，如: new mysqli("localhost", "username", "password", "", port)
$servername = "localhost";
$username = "root";
$password = "123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
echo "<br>";

// 创建数据库
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}
echo "<br>";

//使用数据库myDB
$conn -> select_db("myDB");
/* 
$sql = "USE myDB";
if ($conn->query($sql) === TRUE) {
    echo "使用数据库myDB";
} else {
    echo "Error creating database: " . $conn->error;
}*/
echo "<br>";

// 使用 sql 创建数据表
$sql = "
CREATE TABLE IF NOT EXISTS MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests 创建成功";
} else {
    echo "创建数据表错误: " . $conn->error;
}
echo "<br>";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<br>";

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";
 
if ($conn->multi_query($sql) === TRUE) {
    echo "多条新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<br>";

// 预处理及绑定
    //预处理语句
	$sql = "INSERT INTO MyGuests(firstname, lastname, email)  VALUES(?, ?, ?)";
    // 为 mysqli_stmt_prepare() 初始化 statement 对象
    $stmt = mysqli_stmt_init($conn);
    if (mysqli_stmt_prepare($stmt, $sql)) {
        // 绑定参数
        mysqli_stmt_bind_param($stmt, 'sss', $firstname, $lastname, $email);
 
        // 设置参数并执行
        $firstname = 'John';
        $lastname = 'Doe';
        $email = 'john@example.com';
        mysqli_stmt_execute($stmt);
 
        $firstname = 'Mary';
        $lastname = 'Moe';
        $email = 'mary@example.com';
        mysqli_stmt_execute($stmt);
 
        $firstname = 'Julie';
        $lastname = 'Dooley';
        $email = 'julie@example.com';
        mysqli_stmt_execute($stmt);
    }

echo "预处理新记录插入成功";
echo "<br>";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 结果";
}

echo "<br>";


echo "<br>";

echo "<br>";

echo "<br>";


//关闭连接
$conn->close();
//mysqli_close($conn);
?>

</body> 
</html>