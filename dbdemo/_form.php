<!DOCTYPE html>
<html>
<head>
<title>Customer</title>
<style>
form div {
	padding: 10px;
}

form label {
	display: block;
	float: left;
	width: 100px;
}

span.error {
	padding-left: 10px;
	color: red;
}
</style>
</head>
<?php
	include('db.php');
	include('datadef.php');
	include('functions.php');
?>
<body>
<?php 
if(isset($_GET['id'])):
	
	$db = initDb();
	$sql = 'SELECT name, email, state FROM customer WHERE id = ?';
	$stmt = $db->prepare($sql);
	$stmt->bind_param('i', $id);
	$id=$_GET['id'];
	$stmt->execute();
	$stmt->bind_result($name, $email, $state);
	$stmt->fetch();
	
?>
<form id="inputForm" name="inputForm" method="post" action="<?='update.php' ?>">
<div>
<?= formInput('name', 'name', 'Name', $name) ?>
</div>
<div>
<?= formInput('email', 'email', 'Email', $email) ?>
</div>
<div>
<?= formDropdown('state', 'state', 'State', $dataStates, $state, ' - Select State - ') ?>
</div>
<input name = "id" type = "hidden" value="<?=$id?>">	<!--consistency-->
<button type="submit">Update</button>
</form>
	
<?php else: ?> 
<form id="inputForm" name="inputForm" method="post" action="<?= 'create.php' ?>">
<div>
<?= formInput('name', 'name', 'Name', isset($_POST['name']) ? $_POST['name'] : '') ?>
</div>
<div>
<?= formInput('email', 'email', 'Email', isset($_POST['email']) ? $_POST['email'] : '') ?>
</div>
<div>
<?= formDropdown('state', 'state', 'State', $dataStates, isset($_POST['state']) ? $_POST['state'] : null, ' - Select State - ') ?>
</div>
<button type="submit">Submit</button>
</form>
<?php endif; ?>
</body>
</html>