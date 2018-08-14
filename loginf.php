<html>
<head>
<title>Sign in!</title>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<p><a href="regist.php">Register</a> | <a href="login.php">Login</a></p>
<h1>Login Form</h1>
<center>
<form action="jr.html" method="POST">
Name:<input type="text" name="Name" value=<?php echo Cookie_val(1) ?> >
Password: <input type="password" name="Password" value=<?php echo Cookie_val(2) ?> ><br><br>
<input type="checkbox" name="remuser">Remember Password<br>
</center>
<center>
<input type="submit" value="Login" name="submit">
</center>
 </form>
 <?php
 if(isset($_POST["submit"]))
{
 $Name=$_POST['Name'];
 $Password=$_POST['Password'];
 $mysql = new mysqli('localhost','root','','registration');
$query=mysqli_query($mysql,"select * from faculty where name='".$name."' and Password='".$Password."'");
$nrows=mysqli_num_rows($query);
if($nrows!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbuname=$row['Name'];
$dbpwd=$row['Password'];
}
if($user==$dbuname && $pass==$dbpwd)
{
session_start();
$_SESSION['ses_user']=$user;
if (isset($_POST['remuser'])){
		setcookie("Name",$name,time()+60*60*24);
		setcookie("Password",$pwd,time()+60*60*24);
	}
	else
	{
		setcookie("Name","",time()-5);
		setcookie("Password","",time()-5);
	}

header("location:jr.html");
}
}
else
{
echo "Invalid username or password...";
}
}
?>
</body>
<?php
		function Cookie_val($ch){
		if ($ch==1)
		{
			if (isset($_COOKIE['Name']))
			{
				return $_COOKIE['Name'];
			}
			else
				return;
		}
		else
		{
			if (isset($_COOKIE['Password']))
			{
				return $_COOKIE['Password'];
			}
			else
				return;
		}
		}
	?>
</html>
