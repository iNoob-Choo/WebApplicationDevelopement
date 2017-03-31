<?php


include('../include/databaseconnect.php');


$sql="SELECT * FROM announcement";
$result=$conn->query($sql);


if($result ->num_rows >0){
	echo "<table>";//start table
		//creating our table heading
        echo "<tr>";
            echo "<th>No</th>";
            echo "<th>Subject</th>";
            echo "<th>Message</th>";
            echo "<th>Posted</th>";
        echo "</tr>";
		$x=1;
	while($row=$result->fetch_assoc()){
		
			echo "<tr>";
                echo "<td>" .$x. "</td>";
                echo "<td>" .$row['subject']."</td>";
                echo "<td>" .$row['message']. "</td>";
				echo "<td>" .$row['posted']. "</td>";
            echo "</tr>";
		$x++;
	}
}
else{
	echo "0 results";
}


$conn->close();
