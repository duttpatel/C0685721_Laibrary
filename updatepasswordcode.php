<?php
$connect=mysqli_connect("localhost","root",'','lms');

$pwd=$_POST['pwd'];
$rpwd=$_POST['rpwd'];
$sid=$_POST['sid'];
if($pwd==$rpwd)
{
	$query="Update UserMaster set Password='$pwd' where UserId=$sid";
	$result=mysqli_query($connect,$query);
	if($result)
	{
		echo "<script>
		alert('Password Changed');
		window.location.href='changepassword.php'
		</script>";
	}
	else
	{
		echo "<script>
		alert('Password Not Changed');
		window.location.href='changepassword.php'";
	}
}

?>