<?php 
error_reporting(0);
include("connection.php");
$message=$_REQUEST['msg'];
if($message==1)
{
	echo "<script>alert('booking is succcessful')</script>";
}
if($message==2)
{
	echo "<script>alert('Information is not complete')</script>";
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
<style>
.a
{
	height:150px;
}
@media(max-width:400px)
{
	.a
	{
		height:150px;
		width:auto;
	}
}
@media(max-width:450px)
{
	.a
	{
		height:150px;
		width:auto;
	}
}@media(max-width:500px)
{
	.a
	{
		height:150px;
		width:auto;
	}
}
@media(max-width:600px)
{
	.a
	{
		height:150px;
		width:auto;
	}
}
@media(max-width:700px)
{
	.a
	{
		height:150px;
		width:auto;
	}
}
@media(max-width:800px)
{
	.a
	{
		height:150px;
		width:auto;
	}
}
@media(max-width:900px)
{
	.a
	{
		height:150px;
		width:auto;
	}
}
.c
{
	float:left;
	height:100px;
	width:84%;
	line-height:100px;
}
ul
{
	list-style:none;
}
ul li
{
	float:left;
	height:99px;
	line-height:100px;
	text-align:center;
}

ul li a
{
	width:215px;
	color:blue;
	text-decoration:none;
	font-size:30px;
	font-family:MV Boli;
	font-weight:bold;
	display:block;
}
ul li a:hover
{
	font-size:30px;
	font-family:Brush Script MT;
}
.b
{
	height:250px;
	font-size:60px;
	font-family:monotype corsiva;
	color:white;
	font-weight:bold;
}
@media(max-width:900px)
{
	.b
	{
		height:300px;
		font-size:55px;
		font-family:monotype corsiva;
	    color:white;
		font-weight:bold;
	}
}
@media(max-width:800px)
{
	.b
	{
		height:250px;
		font-size:50px;
		font-family:monotype corsiva;
	    color:white;
		font-weight:bold;
	}
}
@media(max-width:700px)
{
	.b
	{
		height:250px;
		font-size:45px;
		font-family:monotype corsiva;
	    color:white;
		font-weight:bold;
	}
}
@media(max-width:600px)
{
	.b
	{
		height:250px;
		font-size:40px;
		font-family:monotype corsiva;
	    color:white;
		font-weight:bold;
	}
}
@media(max-width:500px)
{
	.b
	{
		height:250px;
		font-size:35px;
		font-family:monotype corsiva;
	    color:white;
		font-weight:bold;
	}
}
@media(max-width:400px)
{
	.b
	{
		height:250px;
		font-size:35px;
		font-family:monotype corsiva;
	    color:white;
		font-weight:bold;
	}
}
@media(max-width:300px)
{
	.b
	{
		height:250px;
		font-size:35px;
		font-family:monotype corsiva;
	    color:white;
		font-weight:bold;
	}
}
@media(max-width:200px)
{
	.b
	{
		height:250px;
		font-size:35px;
		font-family:monotype corsiva;
	    color:white;
		font-weight:bold;
	}
}
.d
{
	font-family:monotype corsiva;
	font-size:40px;
}
</style>
</head>
<body background="images/bg1.jpg" style="background-repeat:no-repeat; background-size:100%100%;">
          <div class="container-fluid">
		          <div class="row">
				          <center><div class="col-sm-12 a"><img src="images/rosewood.png" style="height:150px; width:100%" class="img-responsive"/></div></center>
					</div>
	<br/> <br/> <br/> <br/>
	<div class="container-fluid">
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-sm-12 col-lg-12 b">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                               <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                               <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                               <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                               <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                   </ol>

          <div class="carousel-inner" role="listbox">
          <div class="item active">
                  <img src="Images/studio1.png" style="height:500px;width:100%;" alt="...">
           <div class="carousel-caption">
                      Studio 70
           </div>
           </div>
           <div class="item">
                    <img src="Images/studio2.png" style="height:500px;width:100%;" alt="...">
           <div class="carousel-caption">
                       Studio 80
           </div>
           </div>
	       <div class="item">
                   <img src="Images/usuites.png" style="height:500px;width:100%;" alt="...">
           <div class="carousel-caption">
                        Upper Suites
           </div>
           </div>
		    <div class="item">
                   <img src="Images/pent.png" style="height:500px;width:100%;" alt="...">
           <div class="carousel-caption">
                        Penthouses
           </div>
           </div>
           </div>
   <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
             <span class="sr-only">Previous</span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
             <span class="sr-only">Next</span>
   </a>
   </div>
   </div>
   </div>
   </div>
   <br/><br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
					<div class="row">
					         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 d">
					                         <center><font color="grey"><b>The art of meeting your highest expectations.....</b></font></center><br/>
					                          <font color="red"><b><center>The ROSEWOOD....</center></b></font>
							 </div>
					</div>
					<br/><br/><br/><br/><br/>
					<form action="homecode.php" method="post">
					<div class="row">
					         <div class="col-sm-3 e">
							 </div>
							 <div class="col-sm-6 f">
							           <div class="row" style="margin:10px;">
					                         <div class="col-sm-6  pull-left" style="width:auto; font-size:20px;color:black"><b>Check-In Date:-</b></div><div class="col-sm-6 pull-right" ><input type="date" class="form-control" name="a"/></div>
					                   </div>
									   <div class="row" style="margin:10px;">
					                         <div class="col-sm-6  pull-left" style="width:auto; font-size:20px;color:black"><b>Check-Out Date:-</b></div><div class="col-sm-6 pull-right" ><input type="date" class="form-control" name="b"/></div>
					                   </div>
									   <div class="row" style="margin:10px;">
					                          <div class="col-sm-6  pull-left" style="width:auto; font-size:20px;color:black"><b>No of adults:-</b></div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="c"/></div>
					                    </div>
										<div class="row" style="margin:10px;">
					                          <div class="col-sm-6  pull-left" style="width:auto; font-size:20px;color:black"><b>No of kids:-</b></div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="d"/></div>
					                   </div><br/>
									   <div class="row"style="margin:10px;">
                                              <div class="col-sm-12">
                                                    <center><button class="btn btn-success" style="width:80%;font-size:30px;" >Submit</button></center>
					                   </div>
					                   </div>
							 </div>
					</div>
					</form>
					</div>
</body>
</html>