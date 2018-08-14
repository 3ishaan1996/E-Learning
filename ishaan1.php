<html>
<head>
<title>this is my first php page</title>
</head>
<body>
<form action="ishaan1.php" method="post">
name:<input type="text" name="name">
password:<input type="text" name="password">
<input type="submit">
</form>
</body>
<?php

$user='root';
$pass='' ;
$db = 'ishaandb' ;
$dp=new mysqli('localhost:81',$user,$pass,$db) or die("unable to connect");

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
$h=5;
$x=6;
$d=1234;
$e=array("hello","hut");
echo"<br>";
define("hi","hello baby");
echo "hi";
function make()
{
	global $h,$x;
	$z=$h+$x;
	echo $z;
	echo "<br>";
	echo"hi";
	$y=10;
	echo "this is inside scope $y";
}
function take()
{
	static $l=0;
	echo $l;
	$l++;
}
class down{
	function down()
	{
		$this->money="ash";
	}
}
$shaffy=new down();
echo $shaffy->money;
echo"<br>";
class tim{
	function tim()
	{
		$this->energy="light";
	}
}
$black=new tim();
echo $black->energy;
echo "<br>";
make();
echo "<br>";
take();
echo"<br>";
take();
echo"<br>";
define("bye","taken",TRUE);
echo"bye";
echo "<br>";
echo"hello";
echo"<br>";
echo $x;
echo "<br>";
echo $h;
echo"<br>";
var_dump($d);
echo "<br>";
var_dump($e);
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
<br>
<body>
<form action="ishaan1.php" method="post">
name <input type="text" name="name">
last name<input type="text" name="last name">
<br>
e-mail<input type="text" name="e-mail">
<br>
<br>
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female
</body>
</html>