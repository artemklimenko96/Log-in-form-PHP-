<?php
/*
function clearstring($string){
	//removes unwanted characters from any variable when called
	$string=stripslashes($string);  //unquotes the string
	$string=htmlentities($string);  //html-tags
	$string=strip_tags($string);    //html/php tags
	//$string = mysqli_real_escape_string($string);
	echo $string;
	
	return $string;
}
*/
include('db.php');
//use database connection

 if(isset($_POST['username'])) $username=mysqli_real_escape_string($conn, $_POST['username']);
 else $username='';
 if(isset($_POST['password'])) $password=mysqli_real_escape_string($conn,$_POST['password']);
 else $password='';
 //query the database table user to check if username+password
 //are correct
 $sql="select username from user where username='$username' and ";
 $sql.="password='$password'";
 $result=$conn->query($sql);  //runs the SQL query, returns $result
 if ($result->num_rows > 0){
	 //username and password were correct
	 $row=$result->fetch_assoc();
	 session_start();
	 $_SESSION['user']=$row['username'];
	 header("location:./admin/index.php");
 }else header("location:index.php?page=login&loginerror=true");  //username and password were not correct

$conn->close();
?>