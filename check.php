<?php
$bookid=$_GET['bid'];
$studentid=$_GET['sid'];
$connect =mysqli_connect("localhost", 'root','','lms');
$query="select * from bookissuereturnmaster where notes='Not return' and StudentId=$studentid";
$result=mysqli_query($connect,$query);
if($result->num_rows==2)
{
	echo "Strudent Has Already Two Books";
}
else
{
	echo "";
}
?>