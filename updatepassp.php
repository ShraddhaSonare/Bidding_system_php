<?php
	include("db.php");
	@session_start();
		
	$userid = $_SESSION['ID'];
	 $password_save=$_POST['pass1'];
			$passold=$_POST['loginid'];
			$name = $_FILES["image"] ["name"];
			$type = $_FILES["image"] ["type"];
			$size = $_FILES["image"] ["size"];
			$temp = $_FILES["image"] ["tmp_name"];
			$error = $_FILES["image"] ["error"];
			if ($error > 0){
				
				mysql_query("UPDATE member SET password='$password_save', memberimg='$name' WHERE memberid='$userid' and password='$passold'") or die(mysql_error());
				print("
<script>
alert('Error Uploading File')</script>
");
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=myaccount.php">'; 
				
					die("Error uploading file! Code $error.");}
				else
				{
					if($size > 10000000) //conditions for the file
					{
					die("Format is not allowed or file size is too big!");
					}
					else
					{
					move_uploaded_file($temp,"administrator/images/upload/".$name);
					mysql_query("UPDATE member SET password='$password_save', memberimg='$name' WHERE memberid='$userid' and password='$passold'") or die(mysql_error());
					print("
<script>
alert('Success')</script>
");
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=myaccount.php">'; 
				}
			}
				
			?>