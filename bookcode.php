<?php
include("BookClass.php");
session_start();

$edit_state=false;
$e1=new BookClass;

if(isset($_POST['save']))
{	
	
$e1->booktitle=$_POST['title'];
$e1->author=$_POST['author'];
$e1->publisher=$_POST['publisher'];
$e1->edition=$_POST['edition'];
$e1->isbn=$_POST['isbn'];
$e1->price=$_POST['price'];
$e1->qty=$_POST['copy'];
$e1->insertData();
$_SESSION['msg']="Book saved";
}

$result=$e1->selectData();	

	
if(isset($_POST['update']))
{
		
	$e1->booktitle=$_POST['title'];
	$e1->author=$_POST['author'];
	$e1->publisher=$_POST['publisher'];
	$e1->edition=$_POST['edition'];
	$e1->isbn=$_POST['isbn'];
	$e1->price=$_POST['price'];
	$e1->qty=$_POST['copy'];

	$e1->bookid=mysql_real_escape_string($_POST['bookid']);
	$e1->updateData();
	
	$_SESSION['msg']="Book Updated";
}
		
if(isset($_GET['del']))
{
	$e1->bookid=$_GET['del'];
	$e1->deleteData();
	$_SESSION['msg']="Book Deleted";
}
?>