<?php
include("connection.php");

$email=$_POST['email'];
echo $email;
echo "<br/>";

$password=$_POST['password'];
echo $password;
echo "<br/>";



$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");

$datetime=$date." ".$time;


$sel="select * from admin where email='$email' or password='$password'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

$count=$row['6'];
$count=$count+1;

if($row['1']==$email)
{
	if($row['2']==$password)
	{
		 $up="update admin set logindatetime='$datetime',loginstatus='true',logincount='$count' where email='$email'";
		 if(mysqli_query($conn,$up))
		 {
	         session_start();
             $_SESSION['user']=$email;
			 $ses=$_SESSION['user'];
			 //echo $ses;
			 //echo "success";
			header("location:dashboard.php");
	
		 }
		 else
		 {
			 echo "login failed";
		 }
	}
	else
	{
		echo "password is wrong";
	}
	
}
else
{
	echo "emailid is wrong";
}
?>