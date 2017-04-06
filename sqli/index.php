<!DOCTYPE HTML>
<html>
    <head>
        <title>Read announcements</title>
  
    </head>
<body>
 
<h1>Annoucements</h1>
 
<?php
// include database connection
include 'DBSetting.php';
 
$action = isset($_GET['action']) ? $_GET['action'] : "";
 
// if it was redirected from delete.php
if($action=='deleted'){
    echo "<div>Record was deleted.</div>";
}
 // link to create record form
echo "<div>";
    echo "<a href='create.php'>Create New Record</a>";
echo "</div>";
 
// select all data
$query = "SELECT * FROM announcement";
if($result =mysqli_query($con,$query)){
	if(mysqli_num_rows($result) > 0){
		echo "<table>";//start table
		//creating our table heading
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>subject</th>";
            echo "<th>Message</th>";
            echo "<th>Type</th>";
            echo "<th>Posted</th>";
        echo "</tr>";
	while ($row=mysqli_fetch_array($result)){
		   echo "<tr>";
                echo "<td>" .$row['id']. "</td>";
                echo "<td>" .$row['subject']."</td>";
                echo "<td>" .$row['message']. "</td>";
                echo "<td>" .$row['type']. "</td>";
				echo "<td>" .$row['posted']. "</td>";
                echo "<td>";
                    // we will use this links on next part of this post
                    echo "<a href='updates.php?id={$row['id']}'>Edit</a>";
                    echo " / ";
                    // we will use this links on next part of this post
                    echo "<a href='#' onclick='delete_user({$row['id']});'>Delete</a>";
                echo "</td>";
            echo "</tr>";
        }
// end table
    echo "</table>";		
}
else 
{ echo "No records found." ;}
}
else{
	echo "error: could not execute sql";
	mysqli_error($con);
}

?>
 
 <script type='text/javascript'>
function delete_user( id ){
     
    var answer = confirm('Are you sure?');
    if (answer){
        // if user clicked ok, 
        // pass the id to delete.php and execute the delete query
        window.location = 'delete.php?id=' + id;
    } 
}
</script>
 
 
</body>
</html>