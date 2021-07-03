<?php
$name=$_POST['name'];
$email=$_POST['emailaddress'];
$message=$_POST['message'];
$number=$_POST['mobile'];

$to="sushmita.guptakumari@gmail.com";

$subject="Mail From codeconia";
$txt="Name=" . $name . "\r\nEmail=" . $email . "\r\nMessage=" . $message ."\r\nMobile number=" .$number .;

$headers="From: noreply@site.com" . "\r\n" .
"CC: somebodyelse@example.com";
if ($email!=NULL) {
	mail($to, $subject, $txt,$headers);
}
header("Location:thankyou.html")
?>
