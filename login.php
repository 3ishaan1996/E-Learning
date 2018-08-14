<html>
<head>
<title>sign in!</title>
<style>
body
{background-color:white;}
h1{color:red;}
</style>
</head>
<body>
<p><a href="">Register</a> | <a href="">Login</a></p>
<h1>Login Form</h1>
<form action="ques.php" method="POST">
Username:<input type="text" name="name" value=<?php echo Cookie_val(1) ?> ><br><br>
Password: <input type="password" name="pwd" value=<?php echo Cookie_val(2) ?> ><br><br>
<input type="checkbox" name="remuser">Remember Password<br>
</center>
<center>
<input type="submit" value="Login" name="submit">
</center>
 </form>
 <?php
 if(isset($_POST["submit"]))
{
 $name=$_POST['name'];
 $pwd=$_POST['pwd'];
$mysql = new mysqli('localhost','root','','registration');
$query=mysqli_query($mysql,"select * from regis where name='".$name."' and pwd='".$pwd."'");
$nrows=mysqli_num_rows($query);
if($nrows!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbuname=$row['name'];
$dbpwd=$row['pwd'];
}
if($user==$dbuname && $pass==$dbpwd)
{
session_start();
$_SESSION['ses_user']=$user;
if (isset($_POST['remuser'])){
		setcookie("name",$name,time()+60*60*24);
		setcookie("pwd",$pwd,time()+60*60*24);
	}
	else
	{
		setcookie("name","",time()-5);
		setcookie("pwd","",time()-5);
	}

header("location:ques.php");
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
			if (isset($_COOKIE['name']))
			{
				return $_COOKIE['name'];
			}
			else
				return;
		}
		else
		{
			if (isset($_COOKIE['pwd']))
			{
				return $_COOKIE['pwd'];
			}
			else
				return;
		}
		}
	?>
</html>
