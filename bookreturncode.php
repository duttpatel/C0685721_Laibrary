<?php
$status1=$_POST['status1'];
$status2=$_POST['status2'];
$bookid=$_POST['bookid'];
$studentid=$_POST['studentid'];
$idate=$_POST['issuedate'];
if($status1=="" && $status2=="")
{

	$connect =mysqli_connect("localhost", 'root','','lms');
	$query="update bookissuereturnmaster set ToDate='$idate',Notes='Return' where StudentId=$studentid and BookId=$bookid";
	$result=mysqli_query($connect,$query);


	$query="select Copy from BookMaster where BookId=$bookid";
	$result=mysqli_query($connect,$query);
	$row=mysqli_fetch_assoc($result);
	$copy=$row['Copy'];
	$copy+=1;
	$query="update BookMaster set Copy=$copy where BookId=$bookid";
	$result=mysqli_query($connect,$query);

	echo "<script>
	alert('Book Retrurn');
	window.location.href='returnbook.php';
	</script>";
}
else
{
	echo "<script>
	alert('Book Can Not Retrun');
	window.location.href='returnbook.php';
	</script>";
}
?>