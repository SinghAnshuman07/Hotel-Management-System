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
.a1
{
	font-family:Colonna MT;
	font-size:60px;
	color:red;
}
@media(max-width:979px)
{
	.a1
	{
		height:auto;
		font-size:50px;
	}
}
.transbox 
{
    background: rgba(25, 25, 25, 0.5) none repeat scroll 0 0;
	color:#ff8000;
}
.b
{
	position:relative;
	height:auto;
}
@media(max-width:900px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
@media(max-width:800px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
@media(max-width:700px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
@media(max-width:600px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
@media(max-width:500px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
@media(max-width:400px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
@media(max-width:300px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
@media(max-width:200px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
@media(max-width:100px)
{
	.b
	{
		position:relative;
		height:auto;
		width:auto;
	}
}
</style>
</head>
<body style="background-image:url('bg.jpg');">
<form action="availablecode.php" method="post">
        <div class="container-fluid">
		       <div class="row">
			           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 a1">
                               <center>AVAILABILITY CHECKING</center>
                      </div>
			   </div>
		      <div class="row" >
			        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 a">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 b transbox">
					<div class="row" style="margin:10px;">
					       <div class="col-sm-6  pull-left" style="width:auto; font-size:20px;">Customer Name</div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="a"/></div>
					</div>
					 <div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">Residential Address</div><div class="col-sm-6 pull-right" ><textarea rows="3" class="form-control" name="b"/></textarea></div>
					</div>
                    <div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">City</div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="c"/></div>
					</div>
                    <div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">State</div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="d"/></div>
					</div>
                    <div class="row"style="margin:10px;">
					       <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">Pin Code</div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="e"/></div>
					</div>
                    <div class="row"style="margin:10px;">
					       <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">Country</div><div class="col-sm-6 pull-right" ><input type="text" class="form-control" name="f"/></div>
					</div>
                    <div class="row"style="margin:10px;">
					       <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">Mobile No</div><div class="col-sm-6 pull-right"><input type="text" class="form-control" name="g"/></div>
					</div>
		            <div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">Email</div><div class="col-sm-6 pull-right"><input type="email" class="form-control" name="h"/></div>
					</div>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">Check-In Date</div><div class="col-sm-6 pull-right"><input type="date" class="form-control" name="i"/></div>
					</div>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">Check-Out Date</div><div class="col-sm-6 pull-right"><input type="date" class="form-control" name="j"/></div>
					</div>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">No of rooms</div><div class="col-sm-6 pull-right"><input type="text" class="form-control" name="k"/></div>
					</div>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">No of adults</div><div class="col-sm-6 pull-right"><input type="text" class="form-control" name="l"/></div>
					</div>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">No of kids</div><div class="col-sm-6 pull-right"><input type="text" class="form-control" name="m"/></div>
					</div>
					<div class="row"style="margin:10px;">
					        <div class="col-sm-6 pull-left" style="width:auto; font-size:20px;">Type of rooms</div><div class="col-sm-6 pull-right"><select class="form-control" name="n">
							<option>Studio 70</option>
							<option>Studio 80</option>
							<option>Upper Suites</option>
							<option>Penthouse</option></select>
							</div>
					</div>
<div class="row"style="margin:10px;">
          <div class="col-sm-12">
         <center><button class="btn btn-success" style="width:50%;font-size:30px;" >Submit</button></center>
					 </div>
					 </div>

			</div>
		    </div>
			
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 c">
			</div>
			</div>
</body>
</html>