<!DOCTYPE html>
<html>
<head>
<style>

table{
  color: red;
  font-family: sans-serif;
  border: 2px solid black;
}

th,td{
  border: 2px solid black;
}


</style>
<?php
$parking = [
  [
    'vehicleNo' => 'WYR9941',
    'driver' => 'Tham Mun Fatt',
    'block' => 'E',
    'floor' => '2',
    'bay' => 11,
  ],
  [
    'vehicleNo' => 'PKC7453',
    'driver' => 'Chia Kim Hooi',
    'block' => 'C',
    'floor' => '3A',
    'bay' => 15,
  ],
  [
    'vehicleNo' => 'WC852E',
    'driver' => 'Ho Jo Ee',
    'block' => 'E',
    'floor' => 'G',
    'bay' => 34,
  ],
  [
    'vehicleNo' => 'AGP8681',
    'driver' => 'Foo Yoke Wai',
    'block' => 'C',
    'floor' => '3A',
    'bay' => 19,
  ],
  [
    'vehicleNo' => 'WA1368Y',
    'driver' => 'Wong Pei Lin',
    'block' => 'A',
    'floor' => '1',
    'bay' => 1,
  ],
];

$details=[
  'Vechicle No.',
  'Driver Name',
  'Block',
  'Floor',
  'Bay',
];
 ?>
</head>
<body>
<table>
<tr>
<?php
  foreach ($details as $detail):
?>
    <th><?=$detail ?></th>
<?php
endforeach;
 ?>
</tr>


<tr>
      <?php
        foreach($parking as $drivers):
       ?>
      <td><?=$drivers['vehicleNo']?></td>
      <td><?=$drivers['driver'] ?></td>
      <td><?=$drivers['block'] ?></td>
      <td><?=$drivers['floor'] ?></td>
      <td><?=$drivers['bay'] ?></td>
</tr>
<?php
endforeach;
 ?>

</table>
</body>
</html>
