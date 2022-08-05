<?php
include("connection.php");

$opass=$_POST['opass'];
echo $opass;
$npass=$_POST['npass'];
echo $npass;
$cpass=$_POST['cpass'];
echo $cpass;

session_start();
$ses=$_SESSION['user'];
echo $ses;


$sel="select  *  from admin where email='$ses'";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);


if($row['password']==$opass)
{
	if($npass==$cpass)
	{
		$up="update admin set password='$npass' where email='$ses' ";
		if(mysqli_query($conn,$up))
		{
			header("location:admin.php");
		}
		else
		{
			header("location:password.php?msg=1");
		}
	}
	else
	{
		header("location:password.php?msg=2");
	}
}
	else
	{
		header("location:password.php?msg=3");
	}

?>