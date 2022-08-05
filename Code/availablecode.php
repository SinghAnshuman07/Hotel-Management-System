<?php
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
$e=$_POST['e'];
echo $e;
echo "<br/>";
$f=$_POST['f'];
echo $f;
echo "<br/>";
$g=$_POST['g'];
echo $g;
echo "<br/>";
$h=$_POST['h'];
echo $h;
echo "<br/>";
$i=$_POST['i'];
echo $i;
echo "<br/>";
$j=$_POST['j'];
echo $j;
echo "<br/>";
$k=$_POST['k'];
echo $k;
echo "<br/>";
$l=$_POST['l'];
echo $l;
echo "<br/>";
$m=$_POST['m'];
echo $m;
echo "<br/>";
$n=$_POST['n'];
echo $n;
echo "<br/>";
$con=mysqli_connect("localhost","root","","hotel");
if(!$con)
{
	echo "connection failed";
}
$ins="insert into booking(customer,address,city,state,pin,country,mobile,email,checkin,checkout,room,adults,kids,type) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n')";
//echo $ins;
if(mysqli_query($con,$ins))
{
	header("location:home.php");
}
else
{
	echo "<script>alert('data is not inserted');</script>";
}
?>