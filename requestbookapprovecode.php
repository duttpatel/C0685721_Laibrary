<?php

$bookid=$_GET['bid'];
$studentid=$_GET['sid'];
$idate=date('Y-m-d');
$connect =mysqli_connect("localhost", 'root','','lms');
$query="insert into bookissuereturnmaster values(null,$bookid,$studentid,'$idate','$idate','Not return')";
$result=mysqli_query($connect,$query);

$query="select Copy from BookMaster where BookId=$bookid";
	$result=mysqli_query($connect,$query);
	$row=mysqli_fetch_assoc($result);
	$copy=$row['Copy'];
	$copy-=1;
	$query="update BookMaster set Copy=$copy where BookId=$bookid";
	$result=mysqli_query($connect,$query);

$query="update RequestMaster set notes='Approved' where BookId=$bookid and StudentId=$studentid and notes='Not Approved'";
$result=mysqli_query($connect,$query);
	echo "<script>
	alert('Book Issued');
	window.location.href='requestbookapprove.php';
	</script>";

?>