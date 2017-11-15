<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	
	mail("dexhonsa@hotmail.com", "A User Has Requested A Platform Demo", "Name: $name, Email: $email, Message: $message");
	


?>