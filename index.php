<?php  

session_start(); 

 

include("connection.php"); 

include("functions.php"); 

 

$user_data = check_login($con); 

 

?> 

 

<!DOCTYPE html> 

<html> 

<head> 

<title>My website</title> 

</head> 

<body> 

 

<a href="logout.php">Logout</a> 

<h1>WOWOWIN! NATUTO KANA NG BASIC WEBSITE DEVELOPMENT WITH MYPHP DATABASE XAMPP</h1> 

 

<br> 

Hello,ako si <?php echo $user_data['user_name']; ?> tatandaan ko itong mga tinuro ni sir! 

</body> 

</html> 
 
 
 