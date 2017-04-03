<!DOCTYPE HTML>
<html>
    <head>
        <title>Create New annoucenments</title>

    </head>
<body>
 <?php
if($_POST){

	// include database connection
    include 'DBSetUP.php';

	//get values from form
  $stmt=$con->prepare("INSERT INTO announcement (subject, message, type, posted) VALUES (?,?,?,?)");
  $stmt->bind_param("ssss",$subject,$message,$type,$posted);
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$type=$_POST['type'];
    // specify when this record was inserted to the database
        date_default_timezone_set("Asia/Kuala_Lumpur");
		$posted=date('Y-m-d h:i:s');

     // insert data into mysql
     //can use other php variables


	 $result=$stmt->execute();
	 var_dump ($result);
	 if($result)
		 echo "Record was saved.";
	else
		echo "Error";


}
?>
<!-- dynamic content will be here -->
 <form action='create.php' method='post'>
    <table border='0'>
        <tr>
            <td>Subject</td>
            <td><input type='text' name='subject' /></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea name='message'></textarea></td>
        </tr>
		<tr><td> Updates <select id="type" name="type">
            <option value="P"> Project  </option>
			<option value="T">Traffic </option>
			</select>
        </td></tr>
        <tr>
            <td>
                <input type='submit' value='Save' />
                <a href='index.php'>Back to read records</a>
            </td>
        </tr>
    </table>

</form>
</body>
</html>
