<?php 
error_reporting(0);
include("connection.php");
$message=$_REQUEST['msg'];
if($message==1)
{
	echo "<script>alert('email id not change')</script>";
}
if($message==2)
{
	echo "<script>alert('new and confirm email id not matched')</script>";
}
if($message==3)
{
	echo "<script>alert('Old email id not match')</script>";
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
<body background="images/emailbg.jpg" style="background-repeat:no-repeat; background-size:100%100%;">
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
<form action="emailcode.php" method="post">
                   <div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;color:black;"><b>Old Email</b></div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="oemail"/></div>
					</div><br/>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;color:black;"><b>New Email</b></div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="nemail"/></div>
					</div><br/>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;color:black;"><b>Confirm Email</b></div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="cemail"/></div>
					</div><br/>
<div class="col-sm-12">
     <center><button class="btn btn-success" style="width:60%;font-size:30px;" >Submit</button></center>
</div>
</form>
</div>
<div class="col-sm-2">
</div>
</div>
</div>
</body>
</html>