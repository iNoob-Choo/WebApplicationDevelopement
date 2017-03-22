<!DOCTYPE HTML>
<html>
<head>
<?php
$members = [
	'Tham Mun Fatt',
	'Tan Chin Tiong',
	'Apple Tiong',
	'Tiong Na Na',
	'Sam Sung'
];

$properties = [
 [
	 'unitNo' => 'C-8-1',
	 'owner' => 'Foo Yoke Wai',
 ],
 [
	 'unitNo' => 'C-3A-3A',
	 'owner' => 'Chia Kim Hooi',
 ],
 [
	 'unitNo' => 'B-18-8',
	 'owner' => 'Heng Tee See',
 ],
 [
	 'unitNo' => 'A-10-10',
	 'owner' => 'Tang So Ny',
 ],
 [
	 'unitNo' => 'B-19-10',
	 'owner' => 'Tang Xiao Mi',
 ],
];


?>
</head>
<body>
<p>This is for unlisted</p>
<ul>
<?php
	foreach($members as $member):
?>
	<li><?= $member ?></li>
<?php
endforeach;
?>
</ul>
<p>This is for listed</p>
<ol>
<?php
	foreach($properties as $prop):
		
			
?>
	<li><?=$prop['unitNo'].':'.$prop['owner']?></li>

<?php
endforeach;
?>
</ol>
</body>
</html>