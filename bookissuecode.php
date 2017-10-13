<?php
$status1=$_POST['status1'];
$status2=$_POST['status2'];
$bookid=$_POST['bookid'];
$studentid=$_POST['studentid'];
$idate=date("Y-m-d");
if($status1=="" && $status2=="")
{

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

	echo "<script>
	alert('Book Issued');
	window.location.href='issuebook.php';
	</script>";
}
else
{
	echo "<script>
	alert('Book Can Not Issue');
	window.location.href='issuebook.php';
	</script>";
}
?>