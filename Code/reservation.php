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
@media(max-width:900px)
{
	.a1
	{
		height:auto;
		font-size:50px;
	}
}
@media(max-width:800px)
{
	.a1
	{
		height:auto;
		font-size:45px;
	}
}
@media(max-width:700px)
{
	.a1
	{
		height:auto;
		font-size:40px;
	}
}
@media(max-width:600px)
{
	.a1
	{
		height:auto;
		font-size:40px;
	}
}
@media(max-width:500px)
{
	.a1
	{
		height:auto;
		font-size:40px;
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
.footer1{
 background-color: black;
 color: white;

}
.footer1 h2{
	margin: 5px;
	padding: 8px;
	font-size: 25px;
	font-family: "Times New Roman", Times, serif;
	
}
.footer1 a{
	color: white;
}
.footer1 a:hover{
	color: ;
}

.footer1 p{
	margin: 5px;
	padding-top: 2px;
	padding-left: 10px;
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
	
}
.footer1 h2{margin: 5px;
	padding: 5px;
	border-bottom: 1px solid white;
	
	
}
/*==========================footer2===========================*/
.footer2{

	background-color: #e6e6e6;
	color: black;
	
}
.footer2 p{
	margin: 8px;
	padding: 8px;
	font-size: 16px;
	font-family: "Times New Roman", Times, serif;

}
.myframegmap{

    border: 3px solid #f6f5f0;
    border-radius: 8px;
    height: 130px;
    width: 40%;
	float:left;
    box-shadow: 0px 0px 3px 3px #e7e4dc;
    overflow: hidden;
    position: relative;
    margin: 0 auto;

}
</style>
</head>
<body style="background-image:url('images/bg.jpg');">
<form action="availablecode.php" method="post">
        <div class="container-fluid">
		       <div class="row">
			           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 a1">
                               <center>ROOM RESERVATION</center>
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
			 <div class="footer">
	<div class="footer1">
<div class="container-fluid">
	
	<div class="container ">
	<div class="row">
		<div class="col-sm-4">
		  <h2><font color="#ff9a35">About Us</font></h2><p>
                           <div class="myframegmap">
                                     <img src="images/logo.jpg" class="img-responsive" style="height:100%;width:100%">						    
                    </div></p><br/><br/><br/><br/><br/><br/><br/>
					 A Visen Properties Company
		</div>
		<div class="col-sm-4">
			<h2><font color="#ff9a35">Menu</font></h2>
			<p>
				<i class="fa fa-home"></i><a href="room.php"> The Rooms</a><br>
				<i class="fa fa-user-o"></i><a href="restaurant.php"> Restaurant</a><br>
				<i class="fa fa-map-marker"></i><a href="facilities.php"> Facilities</a><br>
				<i class="fa fa-briefcase"></i><a href="location.php"> Location</a><br>
				<i class="fa fa-question-circle"></i><a href="reseervation.php"> Reservation</a><br><br>


			</p>


		</div>
		<div class="col-sm-4 ">
			<h2><font color="#ff9a35">Contact Us</font></h2>
			<p >
			 
				<font color="white" size="4px"><i class="fa fa-phone"></i><a href="tel:8188816041">8188816041</a></font><br>
				<font color="white" size="3px"><i class="fa fa-envelope"></i> <a href="#">guestexperience@rosewood.com</a></font><br>
				<font color="white" size="4px"><i class="fa fa-map-marker"></i>221b Baker Street, London, England</font>
			</p>
				
			<br>
		</div>
	</div>
		<div class="clear30"></div>
</div>
</div></div>


<div class="footer2">
	<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="clear30"></div>
			<div class="col-sm-12 text-center"><p><strong>copyright © 2018-2023 All right reserved.</strong></p></div>
			<div class="clear30"></div>
		</div>
		<div class="row">
		        <div class="col-sm-3">
				</div>
				<div class="col-sm-6">
				            <center><b><font color="black" size="3px">Developed By : <a href="adminprofile.php" style="color:black">Anshuman Singh</a></font></b></center>
							<br/>
							<center><b><font color="black" size="3px">Directed By : Mr. Gopal Singh</font></b></center>
							<br/>
							<center><b><font color="black" size="3px">Guided By : PNP INTECH PVT. LTD.</font></b></center>
				</div>
				<div class="col-sm-3">
				</div>
		</div>
	</div>
</div>
</div>
</div>
			</div>
</body>
</html>