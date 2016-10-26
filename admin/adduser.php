
<?php
function clearstring($string){
	//removes unwanted characters from any variable when called
	$string=stripslashes($string);  //unquotes the string
	$string=htmlentities($string);  //html-tags
	$string=strip_tags($string);    //html/php tags
	//$string = mysqli_real_escape_string($string);
	echo $string;
	
	return $string;
}
if(empty($_POST)) header('location:register.php');
else{
 include('../db.php');
 $username=$_POST['username'];
 $password = $_POST['password'];

 //check that username does not exist
 $sql="select username from user where username='$username' ";
 $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		//username is already in use
		header("location:../register.php?signinerror=true");
	}else{
		//username available, insert into table user
		$username=clearstring($username);
		$password=clearstring($password); 
		$sql="insert into user(username,password) ";
		$sql.="values('$username','$password')";
		if($conn->query($sql)===TRUE){
			//insert was successful!
			header("location:index.php");
		}else header("location:../register.php?signinerror=true");
	}
}
?>

