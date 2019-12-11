<?php
$r = $_REQUEST['txtuser'];
$n = $_REQUEST['txtpass'];
$b = $_REQUEST['txtemail'];
$f = $_REQUEST['txtmobile'];
$conn=mysqli_connect('localhost','root','','php12batch');
$res= mysqli_query($conn,"insert into reg(userid,password,email,mobile) values('$r','$n','$b','$f')");
if(mysqli_affected_rows($conn)>0)
{
echo "registration successfully";

}
else
echo "problem in registration";

?>