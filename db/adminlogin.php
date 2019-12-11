<?php
$user = $_REQUEST['txtuser'];
$pass = $_REQUEST['txtpass'];
$ram =mysqli_connect('localhost','root','','php12batch');
$res = mysqli_query($ram,"select * from admin where userid='$user' and password='$pass'");
if(mysqli_num_rows($res)>0)
{
	header('location:index1.php');
}
else
{
	echo "incorrect userid and password";
}



?>