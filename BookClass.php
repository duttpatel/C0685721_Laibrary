<?php
include_once('databasename.php');
class BookClass
{
    public $booktitel="";
    public $author="";
    public $publisher="";
    public $edition="";
    public $isbn="";
    public $price="";
    public $qty="";
    public $bookid=0;
    
	function selectData()
    {
       $con1 =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
       $r =mysqli_query($con1,"select * from BookMaster");
       mysqli_close($con1);
        return $r;
    }
	
	function selectDataRow($id)
    {
        $GLOBALS['con'] =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
        $r =mysqli_query($GLOBALS['con'],"select * from BookMaster where BookId=$id");
		mysqli_close($GLOBALS['con']);
        return $r;
    }
	
    function insertData()
    {
        $GLOBALS['con'] =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
        $query="insert into BookMaster values (null,'$this->booktitle','$this->author','$this->publisher','$this->edition','$this->isbn','$this->price','$this->qty')";
        $result=mysqli_query($GLOBALS['con'],$query);
        mysqli_close($GLOBALS['con']);
        header('location:book.php');
    }

    function updateData()
    {
        $GLOBALS['con'] =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
        mysqli_query($GLOBALS['con'],"update BookMaster set Title='$this->booktitle',Author='$this->author',Publisher='$this->publisher',Edition='$this->edition',ISBN='$this->isbn',Price='$this->price',Copy='$this->qty' where BookId=$this->bookid");
        mysqli_close($GLOBALS['con']);
        header('location:book.php');
    }
    function deleteData()
    {
		$GLOBALS['con'] =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
        mysqli_query($GLOBALS['con'],"delete from BookMaster where BookId=$this->bookid ");
		mysqli_close($GLOBALS['con']);
       header('location:book.php');
    }
    

    
}
?>