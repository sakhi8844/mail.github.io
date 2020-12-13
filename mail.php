<?php
//* Mail from */ 
$to = "kmdsaqi@gmail.com";
$Subject ="Email from my Website";

//*Don't touch this //
$name =$_POST['Name'];
$email =$_POST['Email'];
$Subject =$_POST['Subject'];
$message =$_POST['Message'];

//this is the headers//
$headers .="content-type: text/html;\r\n";
$headers .="From: $email";

//the mail function
mail($to, $Subject, $Messagge, $headers);

//this message will show up when you hit submit button//
echo "Email has been Sent! Thank you $sakhi";

?>