<!DOCTYPE HTML>
<html>
    <head>
        <title>Update Annoucements</title>
  
    </head>
<body>
 
<h1>Update an annoucement</h1>
 <?php
//include database connection
include 'DBSetting.php';
 
// check if form was submitted
if($_GET['id']) {
    $id = $_GET['id'];

   	$sql = "SELECT * FROM announcement WHERE id = {$id}";
    var_dump($sql);
	$result = $con->query($sql);
    $data = $result->fetch_assoc();
}
	
?>
<form name="formUpdate" action="updates_ac.php" method='post' border='0'>
    <table>
        <tr>
            <td>subject</td>
            <td><input type='text' name='subject' value="<?php echo $data['subject'];  ?>" /></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea name='message'><?php echo $data['message']; ?></textarea></td>
        </tr>
        <tr>
            <td>Type <select id="type" name="type">
           	<option value="T" <?php if($data['type']=="T") echo "selected"; ?>>T </option>
			<option value="P" <?php if($data['type']=="P") echo "selected"; ?>>P</option>
		</select>		
		</td>
		</tr>
        <tr>
            <td><input name="id" type="hidden" id="id" value="<?php echo $data["id"]; ?>"></td>
            <td>
                <input type='submit' value='Save Changes' name="submit1"/>
        <a href='index.php'>Back to read records</a>
            </td>
        </tr>
    </table>
</form>
 
</body>
</html>