<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$headers .= 'From: <webmaster@example.com>' . "\r\n";

// send email
mail("pandeyvishal64742@gmail.com","My subject",$msg,$header);
?>
