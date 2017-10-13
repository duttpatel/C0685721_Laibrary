<?php

$status=$_POST['status'];
$studentid=$_POST['studentid'];
$pwd=$_POST['pwd'];
$adate=date('Y-m-d');
if($status=="")
{
	$connect =mysqli_connect("localhost", 'root','','lms');
	$query="select * from UserMaster where UserId=$studentid";
	$result=mysqli_query($connect,$query);;
	if($result->num_rows==0)
	{
		$query="insert into UserMaster values (null,$studentid,'$pwd','$adate','student')";
		mysqli_query($connect,$query);
		echo "<script>
		alert('Successfully Signup');
		window.location.href='index.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert('You already signup');
		window.location.href='index.php';
		</script>";
	}
}
else
{
	echo "<script>
	alert('Account can not be created');
	window.location.href='index.php';
	</script>";
}

?>