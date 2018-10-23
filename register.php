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
	echo "You Are Registered";
}
else
{
	echo "Registration Failed";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="register.css">
		<title> Register Yourself! </title>
	</head>
	<body>
	<div>
	<form  method="POST">
	<header>
		<section>
		
		</section>
		<h1>
		<marquee>Welcome to the registration page</marquee>
		</h1>
		<figure>
		<img src="image.jpg" height="100px" alt="Institute of technology and Management">
		<figcaption>Institute of technology and Management</figcaption>
		</figure>
	
	</header>
	</div>
	<div='center'>
	<table class='center'>
	
		<tr>
		<td>Name</td>
		<td> <input type="text" name="name" maxlength='30' required></td>
		</tr>
		<tr>
		<td>Father's name</td>
		<td><input type="text" name='fname' maxlength='30' required</td>
		</tr>
		<tr>
		<td>Email_id</td>
		<td><input type="email" name='mail' required</td>
		</tr>
		<tr>
		<td> Gender</td>
		<td> <input type="radio" name='male'>Male 
		 <input type="radio" name='male'>Female </td>
		</tr>
		<tr>
		<td>Password</td>
		<td><input type="password" name="pass" min='8' required>
		</tr>
		<tr>
		<td> <input type="submit" name='submit' value="register">
		</tr>
	</table>
	</div>
	<p>
	
	</p>
	<footer>
	<small>Copyright © ITM GIDA GORAKHPUR</small>

  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
	
	</footer>
	
	</body>

</html>