<?php
include_once('databasename.php');
class EmployeeClass
{
    public $name="";
    public $gender="";
    public $add="";
    public $city="";
    public $province="";
    public $pincode="";
    public $email="";
    public $doj="";
    public $AdminId=0;
    
	function selectData()
    {
       $con1 =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
       $r =mysqli_query($con1,"select * from AdminMaster");
       mysqli_close($con1);
        return $r;
    }
	
	function selectDataRow($id)
    {
        $GLOBALS['con'] =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
        $r =mysqli_query($GLOBALS['con'],"select * from AdminMaster where AdminId=$id");
		mysqli_close($GLOBALS['con']);
        return $r;
    }
	
    function insertData()
    {
        $GLOBALS['con'] =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
        $query="insert into AdminMaster values (null,'$this->name','$this->gender','$this->add','$this->city','$this->province','$this->pincode','$this->email','$this->doj')";
        $result=mysqli_query($GLOBALS['con'],$query);
        mysqli_close($GLOBALS['con']);
        header('location:Employee.php');
    }

    function updateData()
    {
        $GLOBALS['con'] =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
        mysqli_query($GLOBALS['con'],"update AdminMaster set Name='$this->name',Gender='$this->gender',Address='$this->add',City='$this->city',Province='$this->province',PostalCode='$this->pincode',Email='$this->email',DOJ='$this->doj' where AdminId=$this->AdminId");
        mysqli_close($GLOBALS['con']);
        header('location:Employee.php');
    }
    function deleteData()
    {
		$GLOBALS['con'] =mysqli_connect($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbname']);
        mysqli_query($GLOBALS['con'],"delete from AdminMaster where AdminId=$this->AdminId ");
		mysqli_close($GLOBALS['con']);
       header('location:Employee.php');
    }
    

    
}
?>