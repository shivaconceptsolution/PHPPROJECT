<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table
		{
			width:600px;
		}
		table th
		{
			background-color:yellow;
			color:blue; 
			font-size: 25px;
		}
        table td
		{
			background-color:orange;
			color:black; 
			font-size: 20px;
			text-align: center;
		}
	</style>
</head>
<body>
<h1>View Student Record</h1>
<hr>
<table border="1">
	<tr><th>Rno</th><th>Sname</th><th>Branch</th><th>Fees</th></tr>
<?php
$conn= mysqli_connect('localhost','root','','php12batch');
$res = mysqli_query($conn,"select * from student");
while($x = mysqli_fetch_array($res))
{
  echo "<tr><td>".$x[0],'</td><td>' ,$x[1],'</td><td>',$x[2],'</td><td> ',$x[3],"</td><td><a href='editstudent.php?q=".$x[0]."'>Edit</a></td><td><a href='deletestudent.php?q=".$x[0]."'>Delete</a></td></tr>";

}
?>
</table>
</body>
</html>