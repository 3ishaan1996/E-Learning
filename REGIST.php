<!DOCTYPE html>
<html>
<head>
<title>REGISTRATION FORM </title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<h1>Registration form </h1>
<form action="jr.html" method="POST">
<input type ="text" placeholder="Name" name="Name">
<input type ="email" placeholder="email" name="Email">
<input type ="password" placeholder="password" name="Password">
<input type ="text" placeholder="Level" name="Level">
<input type ="text" placeholder="Course" name="Course">

<div>
<input type="radio" id="male" name="gender"><label for="male">Male</label>

<input type="radio" id="female" name="gender"><label for="male">Female</label>
</div>
<!--<button type="button"><a href="ques.php">submit</a></button>-->
<input type=submit name="submit"/>
</form>
<?php
if(isset($_POST["submit"]))
{
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Level=$_POST['Level'];
$Course=$_POST['Course'];
$mysql = new mysqli('localhost:81','root','','registration');
$query=$mysql->query("select * from faculty where Name='".$Name."'");
$count=mysqli_num_rows($query);
if($count==0)
{
$query1="insert into faculty(Name,Email,Pssword,Level,Course) values('$Name','$Email','$Password','$Level','$Course')";
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
