<?php
include("../include/databaseconnect.php");

//get values from form
$id=$_POST['id'];
$subject=$_POST['subject'];
$message=$_POST['message'];

// specify when this record was inserted to the database
date_default_timezone_set("Asia/Kuala_Lumpur");
$posted=date('Y-m-d h:i:s');

// update data in mysql database
$sql="UPDATE announcement SET subject='$subject', message='$message', posted='$posted' WHERE id='$id'";


// if successfully updated.
if ($conn->query($sql) === TRUE) {
echo "Successful";
echo "<BR>";
echo "<a href='index.php'>List of records</a>";
}

else {
echo "ERROR";
}

?>
