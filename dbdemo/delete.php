<?php
	include('db.php');

	$db = initDb();
	$sql = 'DELETE FROM customer WHERE id = ?';
	$stmt = $db->prepare($sql);
	$stmt->bind_param('i', $id);
	
	$id = $_GET['id'];
	$stmt->execute();
	
	header('Location: index.php');
?>