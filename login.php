<?php

	include_once('conn.php');
    
	if(isset($_POST['login']))
	{
	$user = $_POST['uname'];	
	$pass = $_POST['pass'];
	
	//Checking Users
	$sql= " SELECT * FROM admin WHERE email='$user' AND password='$pass'";
		//echo $user.$pass;
	$res=mysqli_query($con,$sql);
	/*if($res)
	{
		echo "Query successful";
	}*/
	$rs= mysqli_fetch_array($res);
	if($rs)
	{
		echo "Fetching Successful".$rs[0];
	}
	if($user == $rs[1] and $pass == $rs[2])
	{
		echo "<script> document.location='profile.php'</script>";
		
	}
	else
	{
		echo "<h1 align='center'>Access Denied</h1>";
	}
	}
?> 
<!DOCTYPE HTML>
<html lang="en">
	<head>
	<link rel="stylesheet" type="text/css" href="table.css">
	<meta charset="UTF-8">
	
	<title> Hostel - LogIn</title>
	
	</head>
	<body>
	<header>
	<div align="center">
	<form  method="POST">

				<h1>Log Into Your Account </h1>
				<h1> student Login</h1>
				<figure>
					<img src="image.jpg" height="100px" alt="Institute of technology and Management"><figcaption>Institute of technology and Management</figcaption>
				</figure>
			
		<table class="center">
		 <tbody>
			<tr>
				<td>UserName:</td>
				<td> <input type="text" name="uname" required> </td>
			</tr>
			<tr>
				<td> Password :</td>
				<td> <input type="password" name="pass" required> </td>
			</tr>
			<tr>
			<td> </td>
				<td><input type="submit" value="LogIn" name="login"></td>
			</tr>
		</tbody>
	</table>	
	
</header>	
	
	</form>
	</div>
	<footer>
	<small>Copyright © ITM GIDA GORAKHPUR</small>

  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>
	</footer>
	</body>
</html>