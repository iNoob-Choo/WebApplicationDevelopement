<!DOCTYPE html>
<html>
<head>
<title>Customer</title>
<style>
table, th, td {
	border: solid 1px;
}
th, td {
	padding: 5px;
}
</style>
</head>
<body>
<?php
	include('db.php');
	include('datadef.php');
	
	$db = initDb();
	$sql = 'SELECT name, email, state FROM customer WHERE id = ?';
	$stmt = $db->prepare($sql);
	$stmt->bind_param('i', $id);
	
	$id = $_GET['id'];
	$stmt->execute();
	$stmt->bind_result($name, $email, $state);
	
	if($stmt->fetch()) :
?>
		<table>
			<tr>
				<td>Name</td>
				<td><?= $name ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><a href="mailto:<?= $email ?>"><?= $email ?></a></td>
			</tr>
			<tr>
				<td>State</td>
				<td><?= $dataStates[$state] ?></td>
			</tr>
		</table>
<?php
	else:
?>
		<p>Invalid customer</p>
<?php
	endif;
?>
</body>
</html>
