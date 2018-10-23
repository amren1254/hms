<?php
	include_once('conn.php');
	session_start();
	/*$name=$_POST['name'];
	$password=$_POST['password'];
	$_SESSION['$email'];
	$_SESSION['$password'];
	*/
	$name= " SELECT name FROM details";
	$res= mysqli_query($con,$name);
	$show=mysqli_fetch_array($res);
	//echo "<h2 align='center'><b>$show[0]</b></h2>";
	
?>
<html>
<head>
<meta charset='utf-8'>
<title>Dashboard | profile</title>
<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
<header>
    
            <h1 align="center"> Welcome To the Hostel Management System</h1>
            <h1 align="center"> ITM GIDA gorakhpur</h2>
</header>    
<h3><?php echo "<h1 align='center'>Welcome $show[0]</h1>";?></h3>
	<div>
			<nav>
				<ul>
					
					<li><a href="index.php">Home</a></li>
					<li><a href="about.html"> About </a></li>  
					<li><a href="register.html"> Registration </a></li>
					<li><a href="photo.html"> Photo Gallery</a></li>  
					<li><a href="logout.php"> Logout </a> </li>
				</ul>
			</nav>
        </div>
    <hgroup>
</body>
</html>