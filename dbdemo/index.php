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
<table>
<tr>
	<th>Name</th>
	<th>Email</th>
	<th>State</th>
</tr>
<?php
	include('db.php');
	include('datadef.php');
	
	$db = initDb(); 
	$sql = 'SELECT id, name, email, state FROM customer';
	$stmt = $db->prepare($sql);
	
	$stmt->execute();
	$stmt->bind_result($id, $name, $email, $state);
	
	while($stmt->fetch()) :
?>
		<tr>
			<td><a href="view.php?id=<?= $id ?>"><?= $name ?></a></td>
			<td><a href="mailto:<?= $email ?>"><?= $email ?></a></td>
			<td><?= $dataStates[$state] ?></td>
			<td><a href="_form.php?id=<?=$id?>">Update Customer</a></td>
			<td><a href="delete.php?id=<?=$id?>">Delete Customer</a></td>
		</tr>
<?php
	endwhile;
		
?>
</table>
<a href="_form.php">Create Customer</a>

</body>
</html>
