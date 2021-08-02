<?php
include("db.php");
$name=$_POST["name"];
$email=$_POST["email"];
$mobileno=$_POST["mobileno"];
$feedback=$_POST["feedback"];
$sql="INSERT INTO feedback(name,email,mobileno,feedback)
values ('".$name."','".$email."','".$mobileno."','".$feedback."')" ;
mysql_query($sql) or die(mysql_error());
print("
<script>
alert('Successfully!!!!!!!')</script>
");
  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">'; 

?>