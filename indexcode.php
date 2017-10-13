<?php

$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
session_start();
if($uid=='admin' && $pwd='admin@123')
{
	$_SESSION['user1']="Admin";
	header("location:viewadmin.php");
}
else
{
	$connect=mysqli_connect("localhost",'root','','lms');

	$query="select * from UserMaster where UserId='$uid' and Password='$pwd'";
	$result=mysqli_query($connect,$query);
	$row=mysqli_fetch_assoc($result);
	if($result->num_rows==1)
	{
		$query1 ="select Name from StudentMaster where StudentId=$uid";
		$result1=mysqli_query($connect,$query1);
		$row1=mysqli_fetch_assoc($result1);
		$_SESSION['user1']=$row1['Name'];
		$_SESSION['studentid']=$row['UserId'];
		header("location:userhome.php");
	}
	else
	{
		$_SESSION['user1']="";
		$_SESSION['studentid']="";
		echo "<script>
			alert('Invalid Details');
			window.location.href='index.php';
			</script>";
	}
}
?>