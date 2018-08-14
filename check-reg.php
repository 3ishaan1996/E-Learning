<?php
if(isset($_POST["submit"]))
{
$Name=$_POST['Username'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Level=$_POST['Level'];
$course=$_POST['Course'];
$mysql = new mysqli('localhost','root','','registration');
$sql = "INSERT INTO faculty (Name,Email, Password,Level,course)
VALUES ('$Name', '$Email', '$Password','$Level','$course')";

if ($mysql->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysql->error;
}
}
$mysql->close();
?>