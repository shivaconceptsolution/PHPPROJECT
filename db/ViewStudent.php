<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>View Student Record</h1>
<hr>
<?php
$conn= mysqli_connect('localhost','root','','php12batch');
$res = mysqli_query($conn,"select * from student");
while($x = mysqli_fetch_array($res))
{
  echo $x[0],' ' ,$x[1],' ',$x[2],' ',$x[3],"<hr>";

}
?>
</body>
</html>