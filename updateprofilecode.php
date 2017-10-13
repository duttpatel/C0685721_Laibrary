<?php
$connect=mysqli_connect("localhost",'root','','lms');
	$name=$_POST['name1'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$add=$_POST['add'];
	$city=$_POST['City'];
	$province=$_POST['province'];
	$pincode=$_POST['pincode'];
	$email=$_POST['email'];
	$weblink=$_POST['weblink'];
	$course=$_POST['course'];
	$sid=mysql_real_escape_string($_POST['sid']);
	
	$result=mysqli_query($connect,"update StudentMaster set Name='$name',Gender='$gender',DOB='$dob',Address='$add',City='$city',Province='$province',PostalCode='$pincode',Email='$email',Weblink='$weblink',Course='$course' where StudentId=$sid");
	
	if($result)
	{
		echo "<script>
		alert ('Your Detail is updated');
		window.location.href='updateprofile.php';
		</script>";
	}
	else
	{
		echo "<script>
		alert ('Your Detail is Not updated');
		window.location.href='updateprofile.php';
		</script>";
	}

?>