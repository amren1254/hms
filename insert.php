<?php
include_once('conn.php');
$name=$_POST['name'];
$fname=$_POST['fname'];
$email=$_POST['mail'];
$gen=$_POST['male'];
$pass=$_POST['pass'];

//echo $name.$fname.$email;

$ins= "INSERT INTO details (id,name,fname,email,gender,password) VALUES('','$name','$fname','$email','$gen','$pass')";
$res=mysqli_query($con,$ins);
if($res==true)
{
	echo "Values Inserted";
}
else
{
	echo "Values Not inserted";
}
$inslog="INSERT INTO admin (id,email,password) VALUES ('','$email','$pass')";
$r=mysqli_query($con,$inslog);
if($r==true)
{
	echo "Values Inserted";
}
else
{
	echo "Values Not inserted";
}
?>