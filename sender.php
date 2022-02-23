<?php
    $name = $_POST['user_name'];
	$phone = $_POST['user_phone'];
    

	$to = "msoloveyj75@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Телефон: $phone";
	mail($to, $subject, $msg, "From: $from ");

?>

<p>Привет, форма отправлена</p>
