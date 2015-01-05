<?php
	if(isset($_POST['submit'])){
	$email    = $_POST['email'] ;
	$message1 = $_POST['name'];
	$subject  = "RECORDS FROM THE FORM";
	$message2 = $_POST['email'];
	$message3="";
	if(isset($_POST['browser'])){ // eliminating warning
	  $message3 = $_POST['browser'];
	}
	$message4 = $_POST['reason'];
	$message = "Name:"." ".$message1."\n"."Email:"." ".$message2."\n"."Browser:"." ".$message3."\n"."Reason:"." ".$message4;
	mail($email, $subject,
	$message, "From:" . $email);
	}
?>
