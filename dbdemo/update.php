<?php
	include('db.php');
	include('datadef.php');
	include('functions.php');
	
	if(isset($_POST['id'])) :
		$db = initDb();
		$sql = 'UPDATE customer SET name=?, email=?, state=? WHERE id=?';
		$stmt = $db->prepare($sql);
		$stmt->bind_param('sssi', $name, $email, $state,$id);
		$id = $_POST['id'];
		
		/*
			extract($_POST) extracts the values of each key from the
			associative array $_POST to individual variables.
			Hence, $_POST['name'] is copied to $name, & so on...
		*/
		extract($_POST);
		$stmt->execute();
		
		// Redirect to index.php after insertion.
		header('Location: index.php');
		exit;
	else :
		//include('_form.php');
		echo "Update fail";
	endif;