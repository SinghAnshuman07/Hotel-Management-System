<?php 
error_reporting(0);
include("connection.php");
$message=$_REQUEST['msg'];
if($message==1)
{
	echo "<script>alert('password not change')</script>";
}
if($message==2)
{
	echo "<script>alert('new and confirm password not matched')</script>";
}
if($message==3)
{
	echo "<script>alert('Old password not match')</script>";
}

?>

<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link href="web/css/bootstrap.css" rel="stylesheet"/>
<link href="web/css/fontawesome.min.css" rel="stylesheet"/>
<link href="web/css/fontawesome-all.css" rel="stylesheet"/>

<script src="web/js/jquery-3.2.1.min.js"></script>

<script src="web/js/bootstrap.js"></script>
<script src="web/js/fontawesome.js"></script>
<script src="web/js/fontawesome-all.js"></script>
</head>
<body background="images/passbg.jpg" style="background-repeat:no-repeat; background-size:100%100%;">
<div class="container-fluid">
<div class="row">
   <?php include("menu.php"); ?>
</div>
<div class="row">
<div class="col-sm-6">
<?php  include("rightmenu.php"); ?>
</div>
</div>
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
<form action="passwordcode.php" method="post">
     <div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;color:white;"><b>Old Paaword</b></div><div class="col-sm-6 pull-right" ><input type="password" class="form-control" name="opass"/></div>
					</div><br/>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;color:white;"><b>New Password</b></div><div class="col-sm-6 pull-right" ><input type="password" class="form-control" name="npass"/></div>
					</div><br/>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;color:white;"><b>Confirm Password</b></div><div class="col-sm-6 pull-right" ><input type="password" class="form-control" name="cpass"/></div>
					</div><br/>
<div class="col-sm-12">
     <center><button class="btn btn-success" style="width:50%;font-size:30px;" >Submit</button></center>
</div>
</form>
</div>
</div>
</div>	 
</body>
</html>