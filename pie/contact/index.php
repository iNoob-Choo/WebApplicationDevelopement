<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="/pie/style/mystyle.css">

</head>
<body>

  <?php include('../include/header.php');?>
  <?php include('../include/navigation.php');?>

<!--
post is to save data without showing
get is to show
-->
<div id="contentWrapper">
<form action="contact/post-message.php" method="post">
  Salutation:<br>
  <select name="Salutations">
   <option value="Mr">Mr</option>
   <option value="Ms">Ms</option>
   <option value="Mrs">Mrs</option>
   <option value="Mdm">Mdm</option>
 </select>
 <br>
  Name:<br>
  <input type="text" name="name">
  <br>
  Email Address:<br>
  <input type="email" name="email" >
  <br>
  Phone Number:<br>
  <input type="number" name="phonenumber">
  <br>
  Enquiry:<br>
  <select name="Enquiry">
      <option value="General">General</option>
      <option value="Complaints">Complaints</option>
      <option value="Suggestions">Suggestions</option>
  </select>
  <input type="text" name="enquiry">
  <br>
  Subject:<br>
  <input type="text" name="subject">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form>
</div>

<?php include('../include/footer.php');?>

</body>
</html>
