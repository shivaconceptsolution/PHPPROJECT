<?php

$rno= $_REQUEST['q'];
$conn= mysqli_connect('localhost','root','','php12batch');
$res = mysqli_query($conn,"select * from student where rno=$rno");
if($x = mysqli_fetch_array($res))
{
?>
<h1>Are you sure you want to update record</h1>
<form action="" method="post">
<table>
<tr><td>RNO</td><td><input type="text" name="txtrno" value="<?php echo $x[0]; ?>"  readonly="true" /></td></tr>
<tr><td>NAME</td><td><input type="text" name="txtsname" value="<?php echo $x[1]; ?>"  /></td></tr>
<tr><td>BRANCH</td><td><input type="text" name="txtbranch" value="<?php echo $x[2]; ?>"  /></td></tr>
<tr><td>FEES</td><td><input type="text" name="txtfees" value="<?php echo $x[3]; ?>"  /></td></tr>
<tr><td></td><td><input type="submit" name="btnupdate" value="Update"/></td></tr>
</table>	

</form>

<?php
}
if(isset($_REQUEST['btnupdate']))
{
$r = $_REQUEST['txtrno'];	
$n = $_REQUEST['txtsname'];
$b = $_REQUEST['txtbranch'];
$f = $_REQUEST['txtfees'];

$res1= mysqli_query($conn,"update student set sname='$n',branch='$b',fees='$f' where rno='$r'");
if(mysqli_affected_rows($conn)>0)
{
echo "data updated successfully";

}
else
echo "problem in insertion";
}

?>
<a href="TableViewEditDeleteStudent.php">BACK to show record</a>