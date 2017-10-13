<?php
$bookid=$_GET['bid'];
$connect =mysqli_connect("localhost", 'root','','lms');
$query="select * from BookMaster where BookId=".$bookid;
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);
if($row['Copy']==0)
{
	echo "Book Is Not Available";
}
else
{
	echo "";
}
?>