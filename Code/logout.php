<?php
include("connection.php");

session_start();
$ses=$_SESSION['user'];
$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");
$datetime=$date." ".$time;
if(ses)
{
	$up="update admin set logoutdatetime='$datetime', loginstatus='false' where email='$ses' ";
	if(mysqli_query($conn,$up))
	{
		session_destroy();
		header("location:admin.php");
	}
	else
	{
		echo "logout failed";
	}
}
else
{
	echo "session error";
}
?>