<?php
// include database connection
include("../include/databaseconnect.php");


    // get record ID
    // isset() is a PHP function used to verify if a value is there or not
    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

    // delete query
    $query = "DELETE FROM announcement WHERE id ='$id' ";
    if(mysqli_query($conn,$query)){
		echo "Record was deleted successfully";
		echo "<br>";
		echo "<a href='index.php'>Back to read records</a>";
	}
	else
		echo "ERROR: Could not execute the delete."




?>
