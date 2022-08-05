<?php
include("connection.php");


$a=$_REQUEST['id'];
echo $a;

$sel="select * from booking where id=$a";
$res=mysqli_query($conn,$sel);
$r=mysqli_fetch_array($res,MYSQLI_BOTH);

$del="delete from booking where id=$a";
if(mysqli_query($conn,$del))
{
	unlink ($location);
	header("location:bookingshow.php");
}
?>