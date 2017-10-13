<?php
include_once('databasename.php');

$con = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS lms";
$con->query($sql);
mysqli_close($con);

$con=mysqli_connect($servername, $username, $password, $dbname);
$q="SHOW TABLES LIKE 'AdminMaster'";
if($result=mysqli_query($con,$q))
{
	if($result->num_rows == 0) 
	{
		$sql = "CREATE TABLE AdminMaster (
          		AdminId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
           	 	Name VARCHAR(30) NOT NULL,
            	Gender VARCHAR(30) NOT NULL,
           		Address VARCHAR(50),
            	City VARCHAR(200),
            	Province varchar(200),
            	PostalCode VARCHAR(50),
            	Email VARCHAR(50),
           		DOJ date)";
     	mysqli_query($con, $sql); 
	}                            
}
mysqli_close($con);      


$con=mysqli_connect($servername, $username, $password, $dbname);

$sql="select * from AdminMaster";
$result=mysqli_query($con,$sql);
if($result->num_rows==0)
{
	$sql="insert into AdminMaster values (null,'Dutt Patel','Male','73 campwood','Brampton','ON','L6P3S8','duttupatel@gmail.com','2014-09-15')";
	$con->query($sql);
	$sql="insert into AdminMaster values (null,'Jeet Patel','Male','75 campwood','Brampton','ON','L6P3S8','jeet@gmail.com','2014-09-14')";
	$con->query($sql);                   
	$sql="insert into AdminMaster values (null,'Meet Patel','Male','76 campwood','Brampton','ON','L6P3S8','meet@gmail.com','2012-10-11')";
	$con->query($sql);                   
	mysqli_close($con);  
}
$con=mysqli_connect($servername, $username, $password, $dbname);
$q="SHOW TABLES LIKE 'BookMaster'";
if($result=mysqli_query($con,$q))
{
	if($result->num_rows == 0) 
	{
		$sql = "CREATE TABLE BookMaster (
          		BookId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
           	 	Title VARCHAR(30) NOT NULL,
            	Author VARCHAR(30) NOT NULL,
           		Publisher VARCHAR(50),
            	Edition VARCHAR(200),
            	ISBN varchar(200),
            	Price int(5),
            	Copy INT(5))";
     	mysqli_query($con, $sql); 
	}                            
}
mysqli_close($con);   

$con=mysqli_connect($servername, $username, $password, $dbname);

$sql="select * from BookMaster";
$result=mysqli_query($con,$sql);
if($result->num_rows==0)
{
	$sql="insert into BookMaster values (null,'Physics in Molecular Biology','Merrill','McGraw-Hill','1','1234567890',2000,10)";
	$con->query($sql);
	$sql="insert into BookMaster values (null,'Discrete Mathematics','Howard Eves','Pearson','1','1234567809',1000,10)";
	$con->query($sql);                   
	$sql="insert into BookMaster values (null,'Probability and Statistics','Martin C. Brown','Brooks Cole','1','9876543201',500,10)";
	$con->query($sql);                   
	mysqli_close($con);  
}

$con=mysqli_connect($servername, $username, $password, $dbname);
$q="SHOW TABLES LIKE 'StudentMaster'";
if($result=mysqli_query($con,$q))
{
	if($result->num_rows == 0) 
	{
		$sql = "CREATE TABLE StudentMaster (
          		StudentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
           	 	Name VARCHAR(30) NOT NULL,
				Gender VARCHAR(30) NOT NULL,
				DOB date NOT NULL,
				Address VARCHAR(30) NOT NULL,
				City VARCHAR(200),
            	Province varchar(200),
            	PostalCode VARCHAR(50),
            	Email VARCHAR(50),
				Weblink VARCHAR(50),
				Course varchar(50))";
     	mysqli_query($con, $sql); 
	}                            
}
mysqli_close($con);   
$con=mysqli_connect($servername, $username, $password, $dbname);

$sql="select * from StudentMaster";
$result=mysqli_query($con,$sql);
if($result->num_rows==0)
{
	$sql="insert into StudentMaster values (null,'Dutt Patel','Male','1990-09-14','7 narrow valley','Brampton','ON','L6P3S8','d@gmail.com','d@gmail.com','BCA')";
	$con->query($sql);
	$sql="insert into StudentMaster values (null,'Jeet Patel','Male','1991-01-12','8 narrow valley','Brampton','ON','L6P3S8','j@gmail.com','j@gmail.com','BCA')";
	$con->query($sql);                   
	$sql="insert into StudentMaster values (null,'Meet Patel','Male','1992-02-12','9 narrow valley','Brampton','ON','L6P3S8','m@gmail.com','m@gmail.com','BCA')";
	$con->query($sql);                   
	mysqli_close($con);  
}

$q="SHOW TABLES LIKE 'UserMaster'";
$con=mysqli_connect($servername, $username, $password, $dbname);
if($result=mysqli_query($con,$q))
{
	if($result->num_rows == 0) 
	{
		$sql = "CREATE TABLE UserMaster (
				Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          		UserId INT(6) not null, 
           	 	Password VARCHAR(30) NOT NULL,
				AccountDate date NOT NULL,
				Type varchar(10) NOT NULL)";
     	mysqli_query($con, $sql); 
	}                            
}
mysqli_close($con);

$q="SHOW TABLES LIKE 'BookIssueReturnMaster'";
$con=mysqli_connect($servername, $username, $password, $dbname);

if($result=mysqli_query($con,$q))
{
	if($result->num_rows == 0) 
	{
		$sql = "CREATE TABLE BookIssueReturnMaster (
				Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
          		BookId INT(6) not null, 
				StudentId INT(6)not null,
           	 	FromDate date NOT NULL,
				ToDate date NOT NULL,
				notes varchar(100))";
     	mysqli_query($con, $sql); 
	}                            
}
mysqli_close($con);


$q="SHOW TABLES LIKE 'RequestMaster'";
$con=mysqli_connect($servername, $username, $password, $dbname);

if($result=mysqli_query($con,$q))
{
	if($result->num_rows == 0) 
	{
		$sql = "CREATE TABLE RequestMaster (
				Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
          		BookId INT(6) not null, 
				StudentId INT(6)not null,
           	 	RequestDate date NOT NULL,
				notes varchar(100))";
     	mysqli_query($con, $sql); 
	}                            
}
mysqli_close($con);
?>