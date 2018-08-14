<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION FORM </title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<h1>Registration form </h1>
<form action="" method="POST">
<input type ="text" placeholder="Name" name="name">
<input type ="text" placeholder="course" name="course">
<input type ="email" placeholder="email" name="email">
<input type ="password" placeholder="password" name="pwd">

<div>
<input type="radio" id="male" name="gender"><label for="male">Male</label>

<input type="radio" id="female" name="gender"><label for="male">Female</label>
</div>
<input type=submit name="submit"/>
<!--<button type="button"><a href="ques.php">submit</a></button>-->
</form>
<?php
if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$course=$_POST['course'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$gender=$_POST['gender'];
$mysql = new mysqli('localhost','root','','registration');
$query=$mysql->query("select * from regis where name='".$name."'");
$count=mysqli_num_rows($query);
if($count==0)
{
$query1="insert into regis(name,course,email,pwd,gender) values('$name','$course','$email','$pwd','$gender')";
$result=$mysql->query($query1);
if($result)
{
echo "Account created successfully...";
}
else
{
echo "Failure!!!";
}
}
else
{
echo "That's username already exit!Please try with another...";
}
}
?>
</body>
</html>
