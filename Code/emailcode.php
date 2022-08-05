<?php
include("connection.php");

$oemail=$_POST['oemail'];
echo $oemail;
$nemail=$_POST['nemail'];
echo $nemail;
$cemail=$_POST['cemail'];
echo $cemail;

session_start();
$ses=$_SESSION['user'];
echo $ses;

$sel="select * from admin where email='$ses' ";
$res=mysqli_query($conn,$sel);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);
echo $row['1'];
if($row['1']==$oemail)
{
	if($nemail==$cemail)
	{
		$up="update admin set email='$nemail' where email='$ses' ";
		if(mysqli_query($conn,$up))
		{
			header("location:admin.php");
		}
		else
		{
			header("location:email.php?msg=1");
		}
	}
		else
		{
			header("location:email.php?msg=2");
		}
}
else
{
	header("location:email.php?msg=3");
}

?>