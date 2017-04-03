<!DOCTYPE HTML>
<html>
    <head>
        <title>Read announcements</title>
    </head>
<body>
<h1>Annoucements</h1>

<?php
// include database connection
include 'DBSetUp.php';
 ?>



<div><a href="create.php">Create Announcement</a><br></div>
<div>
<?php

$sql="SELECT * FROM announcement";
$result=$con->query($sql);

if($result->num_rows>0){
  //output
  while($row=$result->fetch_assoc()){
    echo $row['id'].$row['message'].$row['subject'].$row['type'].$row['posted'];


  }

}else{
  echo "0 results";
}

$con->close();
?>
</div>

</body>
</html>
