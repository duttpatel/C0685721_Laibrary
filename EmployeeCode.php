<?php
include("EmployeeClass.php");
session_start();

$edit_state=false;
$e1=new EmployeeClass;

if(isset($_POST['save']))
{	
	
$e1->name=$_POST['name1'];
$e1->gender=$_POST['gender'];
$e1->add=$_POST['add'];
$e1->city=$_POST['City'];
$e1->province=$_POST['province'];
$e1->pincode=$_POST['pincode'];
$e1->email=$_POST['email'];
$e1->doj=$_POST['doj'];
$e1->insertData();
$_SESSION['msg']="Employee saved";
}

$result=$e1->selectData();	

	
if(isset($_POST['update']))
{
		
	$e1->name=$_POST['name1'];
	$e1->gender=$_POST['gender'];
	$e1->add=$_POST['add'];
	$e1->city=$_POST['City'];
	$e1->province=$_POST['province'];
	$e1->pincode=$_POST['pincode'];
	$e1->email=$_POST['email'];
	$e1->doj=$_POST['doj'];
	$e1->AdminId=mysql_real_escape_string($_POST['adminid']);
	$e1->updateData();
	
	$_SESSION['msg']="Employee Updated";
}
		
if(isset($_GET['del']))
{
	$e1->AdminId=$_GET['del'];
	$e1->deleteData();
	$_SESSION['msg']="Employee Deleted";
}
?>