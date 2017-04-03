<?php
//CRUD OPERATIONS

include('../include/databaseconnect.php');


//INSERTING DATA

$sql=<<<SQL
INSERT INTO announcement(subject,message,type,posted)
VALUES(?,?,?,now())
SQL;
$stmt=$conn->prepare($sql);
$stmt->bind_param("sss",$subject,$message,$type);


$subject="";
$message="";
$type="";
$posted="";

if($_POST){
	$subject=$_POST['Subject'];
	$message=$_POST['Message'];
	$type=$_POST['Types'];

}else{
	echo "No Data";
}

if($stmt->execute()===TRUE){
	echo "Recoreded". "<br>";
}else{
	echo "Error: ". $sql . "<br>" .$conn->error;
}




?>
<!DOCTYPE html>
<html>
<body>
<a href="../traffic/index.php">View Annoucements</a>
</body>
</html>
