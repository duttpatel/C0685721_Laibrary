<?php
$bookid=$_GET['bid'];
$studentid=$_GET['sid'];
$connect =mysqli_connect("localhost", 'root','','lms');
$query="select * from bookissuereturnmaster where StudentId=$studentid";
$result=mysqli_query($connect,$query);
if($result->num_rows>=1)
{
	$query="select * from bookissuereturnmaster where StudentId=$studentid and BookId=$bookid and notes='Not return'";
	$result=mysqli_query($connect,$query);
	if($result->num_rows>=1)
	{
		echo "";
	}
	else
	{
		echo "Student Does Not Own Any Book";
	}
}
else
{
	echo "Student Does Not Own Any Book";
}

?>