<?php
$bookid=$_GET['bid'];
$connect =mysqli_connect("localhost", 'root','','lms');
$query="select * from Bookissuereturnmaster where BookId=$bookid";
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);
if($result->num_rows==0)
{
	echo "Book Is Not Issue";
}
else
{
	echo "";
}
?>