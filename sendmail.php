<?php 

$author = htmlspecialchars($_POST['userFirstNameLastName']);
$subject = htmlspecialchars($_POST['userSubject']);
$email = htmlspecialchars($_POST['userEmail']);
$message = htmlspecialchars($_POST['userMessage']);

mail('guerriernumerique@gmail.com',$subject, $message, 'From : ' . $email);

echo '<p style="color: green">Email envoyé !</p>';