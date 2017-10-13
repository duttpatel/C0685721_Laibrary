<?php
$studentid=$_GET['sid'];
$connect =mysqli_connect("localhost", 'root','','lms');
$query="select * from StudentMaster where StudentId=$studentid";
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);
if($result->num_rows==0)
{
	echo "Your are not the part of library";
}
else
{
	echo "";
}
?>