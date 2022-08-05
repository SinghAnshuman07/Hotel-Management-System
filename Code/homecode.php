<?php
include("connection.php");

$a=$_POST['a'];
echo $a;
echo "<br/>";
$b=$_POST['b'];
echo $b;
echo "<br/>";
$c=$_POST['c'];
echo $c;
echo "<br/>";
$d=$_POST['d'];
echo $d;
echo "<br/>";
include("connection.php");
if(!$conn)
{
	echo "connection failed";
}
$ins="insert into availability(checkin,checkout,adults,kids) values('$a','$b','$c','$d')";
if(mysqli_query($conn,$ins))
{
	header("location:room.php");
}
else
{
	echo "<script>alert('data is not inserted');</script>";
}
?>