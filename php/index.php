<!DOCTYPE  html>
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
$contacts = [
  [
    'name' => 'Chia Kim Hooi',
    'phone' => '+60124044404',
    'email' => 'chiakh@duck.com',
    'facebook' => 'xyz.chiakh',
  ],
  [
    'name' => 'Chan Xiao Hui',
    'phone' => '+60125785678',
    'email' => 'chanxh@pingguo.com',
    'facebook' => 'pqr.chanxh',
  ],
  [
    'name' => 'Tan Chin Tiong',
    'phone' => '+60193163616',
    'email' => 'tanct@burungtiong.com',
    'facebook' => 'abc.tanct',
  ],
  [
    'name' => 'Foo Yoke Wai',
    'phone' => '+60125575552',
    'email' => 'fooyw@chicken.com',
    'facebook' => 'ijk.fooyw',
  ],
  [
    'name' => 'Ho Xin Yi',
    'phone' => '+60195889776',
    'email' => 'hoxy@myna.com',
    'facebook' => 'mno.hoxy',
  ]
];

$headings=[
  'Name',
  'Phone Number',
  'Email',
  'Facebook',
];

 ?>
</head>
<body>
<table>
<tr>
<?php
  foreach ($headings as $header):
 ?>
  <th><?=$header?></th>
<?php endforeach; ?>
</tr>
<tr>
<?php foreach ($contacts as $contact):?>

  <td><?=$contact['name']?></td>
  <td><?=$contact['phone']?></td>
  <td><a href="mailto:"><?=$contact['email']?></a></td>
  <td><a href="https://www.facebook.com/<?=$contact['facebook']?>"><?=$contact['facebook']?></a></td>
</tr>
<?php endforeach;?>
</table>
</body>
</html>
