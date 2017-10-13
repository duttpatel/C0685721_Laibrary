<?php
session_start();
$bookid=$_GET['bid'];
$connect=mysqli_connect("localhost",'root','','lms');
$studentid=$_SESSION['studentid'];
$query="select * from bookissuereturnmaster where StudentId=$studentid and notes='Not return'";
$result=mysqli_query($connect,$query);
$rdate=date('Y-m-d');
echo $rdate;
if($result->num_rows>=0 && $result->num_rows<2)
{
	$query="insert into requestmaster values(null,$bookid,$studentid,'$rdate','Not Approved')";
	mysqli_query($connect,$query);
	echo "<script>
	alert('Book Requested');
	window.location.href='requestbook.php'
	</script>";
	
}
else
{
	echo "<script>
	alert('You already owned two book so you can not request more book');
	window.location.href='requestbook.php'
	</script>";
}
mysqli_close($connect);
?>
