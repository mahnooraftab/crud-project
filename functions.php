<?php
// error_reporting(E_ALL);

// Report all PHP errors
// error_reporting(-1);
// ini_set('error_reporting', E_ALL);
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'project');
class DB_con
{
    private $dbh;
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}
//Data Insertion Function
	public function insert($ename,$edate,$eplace,$edesc)
	{
        // print_r($this->dbh);
        $sql = "insert into events(event_name,event_date,event_venue,event_desc) values('$ename','$edate','$eplace','$edesc')";
        // $ret=$this->dbh->query();
        if ($this->dbh->query($sql) === TRUE) {
            header("Location: index.php");
            echo "New record created successfully";
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . $this->dbh->error;
          }
          exit();
	return $sql;
	}
//Data read Function
    public function fetchdata()
	{
	    $result=mysqli_query($this->dbh,"select * from events");
	    return $result;
	}
// Data one record update Function
public function fetchonerecord($id)
	{
	$oneresult=mysqli_query($this->dbh,"select * from events where id=$id");
	return $oneresult;
	}
	// Data one record display
	public function findOne($tableName, $id)
	{
	$oneresult=mysqli_query($this->dbh,"select * from ".$tableName." where id=$id");
	return $oneresult;
	}
//Data updation Function
public function update($ename,$edate,$eplace,$edesc,$id)
	{
	$updaterecord=mysqli_query($this->dbh,"update  events set event_name='$ename',event_date='$edate',event_venue='$eplace',event_venue='$eplace',event_desc='$edesc' where id='$id' ");
	return $updaterecord;
	}
//Data Deletion function Function
public function delete($id)
	{
	$deleterecord=mysqli_query($this->dbh,"delete from events where id=$id");
	return $deleterecord;
	}
}
?>