<?php

mysql_connect("localhost", "msinaj14", "ms518ora") 

or die(mysql_error());

mysql_select_db("web16_msinaj14") or die(mysql_error());


$sql_id = "SELECT (MAX(id)+1) as \"result\" FROM news";

$rs_id = mysql_query($sql_id);

$row_id = mysql_fetch_assoc($rs_id);

$id = $row_id['result'];

if($id == null)

$id = 1;    

$newName = '';  

$file = $_FILES['fileToUpload']['name'];


if ($_FILES["fileToUpload"]["type"] == "image/gif" ||
$_FILES["fileToUpload"]["type"] == "image/jpeg" ||   
$_FILES["fileToUpload"]["type"] == "image/pjpeg" || 
$_FILES["fileToUpload"]["type"] == "application/pdf" )
{

	if ($_FILES["fileToUpload"]["error"] > 0)
		echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "<br />";
		else{  
			$newName = "plani$id.".basename($_FILES["fileToUpload"]["type"]);
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "plani/" . $newName);
		}

} else{
		echo "Invalid file";
	}

$queryUser = "INSERT INTO news VALUES('$id', \"$newName\")";
$insert = mysql_query($queryUser);

if(!$insert){

    echo mysql_error().'Upload Fail';

  }else {

    echo "<script>alert('Upload Sccessful');";

    echo 'window.location="teacher.php";</script>';
}