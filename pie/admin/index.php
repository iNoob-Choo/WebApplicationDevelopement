<!DOCTYPE html>
<html>
<style>

#message{

    height: 60px;
    width : 300px;
}

</style>
<body>
<h1>Create New Annoucement</h1>
<form name="AnnoucementForm" action="../admin/create.php" method="POST">


<input type="text" id="subject" name="Subject" placeholder="Subject"><br>
<input type="text" id="message" name="Message" placeholder="Message"><br>
<select name="Types">
<option value="-1"> Choose type of announcement</option>
<option value="T">Traffic</option>
<option value="P">Project</option>
 </select>
 <input type="submit" value="Create" >
 <input type="reset" value="Reset">


</form>
</body>
</html>
<?php


include('../include/databaseconnect.php');


$sql="SELECT * FROM announcement";
$result=$conn->query($sql);


if($result ->num_rows >0){
	echo "<table>";//start table
		//creating our table heading
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>subject</th>";
            echo "<th>Message</th>";
            echo "<th>Type</th>";
            echo "<th>Posted</th>";
        echo "</tr>";
	while($row=$result->fetch_assoc()){
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
}
else{
	echo "No Annoucement";
}


$conn->close();
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
