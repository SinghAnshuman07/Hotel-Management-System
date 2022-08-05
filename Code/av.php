<?php
include("connection.php");
$sel="select * from availability";
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
					     <th>Sr No.</th>
					<th>Check-In Date</th>
					<th>Check-Out Date</th>
					<th>No of adults</th>
					<th>No of kids</th>
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