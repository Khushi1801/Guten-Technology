<?php
// the message
$msg = "Name : ".$_POST["name"]."
\nEmail : ".$_POST["email"]."\n
\nNumber : ".$_POST["number"]."
\nSubject : ".$_POST["subject"]."
\nMessage : ".$_POST["message"]."\n";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("happy182801@gmail.com","inquiry",$msg);
echo 'msg sent';

header('Location: contact.php');
?>