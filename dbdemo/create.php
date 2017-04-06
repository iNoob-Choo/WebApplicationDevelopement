<?php
	include('db.php');
	include('datadef.php');
	include('functions.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') :
		$db = initDb();
		$sql = 'INSERT INTO customer (name, email, state) VALUES (?, ?, ?)';
		$stmt = $db->prepare($sql);
		$stmt->bind_param('sss', $name, $email, $state);
		
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
		include('_form.php');
	endif;