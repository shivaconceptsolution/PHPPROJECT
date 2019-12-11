<?php
$r = $_REQUEST['txtrno'];
$n = $_REQUEST['txtsname'];
$b = $_REQUEST['txtbranch'];
$f = $_REQUEST['txtfees'];
$conn=mysqli_connect('localhost','root','','php12batch');
$res= mysqli_query($conn,"insert into student (rno,sname,branch,fees) values('$r','$n','$b','$f')");
if(mysqli_affected_rows($conn)>0)
{
echo "data inserted successfully";

}
else
echo "problem in insertion";

?>