<?php
include("connection.php");
$sel="select * from booking";
$res=mysqli_query($conn,$sel);
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
<body>
<div class="container-fluid">
<?php include("menu.php"); ?>
<div class="row">
<?php include("rightmenu.php"); ?>
	<div class="col-sm-9">
					<table border="5px" class="table-responsive">
					<tr>
					     <th>SR NO..</th>
					     <th>CUSTOMER NAME</th>
					     <th>RESIDENTIAL ADDRESS</th>
					     <th>CITY</th>
					     <th>STATE</th>
					     <th>PIN CODE</th>
					     <th>COUNTRY</th>
					     <th>MOBILE NO.</th>
					     <th>EMAIL</th>
					     <th>CHECK-IN</th>
					     <th>CHECK-OUT</th>
					     <th>NO. OF ROOMS</th>
					     <th>NO. OF KIDS</th>
					     <th>NO. OF ADULTS</th>
					     <th>TYPES OF ROOMS</th>
						 <th>DELETE</th>
					</tr>
					<?php
					while($row=mysqli_fetch_array($res,MYSQLI_BOTH))
					{	
					?>
					<tr>
					     <td><?php echo $row['0'];?></td>
					     <td><?php echo $row['1'];?></td>
					     <td><?php echo $row['2'];?></td>
					     <td><?php echo $row['3'];?></td>
					     <td><?php echo $row['4'];?></td>
					     <td><?php echo $row['5'];?></td>
					     <td><?php echo $row['6'];?></td>
					     <td><?php echo $row['7'];?></td>
					     <td><?php echo $row['8'];?></td>
					     <td><?php echo $row['9'];?></td>
					     <td><?php echo $row['10'];?></td>
					     <td><?php echo $row['11'];?></td>
					     <td><?php echo $row['12'];?></td>
					     <td><?php echo $row['13'];?></td>
					     <td><?php echo $row['14'];?></td>
					     <td><a href="delete.php?id=<?php echo $row['0'];?>"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<?php
					}
					?>
</table>
</div>
</div>
</div>
</body>
</html>