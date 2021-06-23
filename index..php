<?php

$to = "jacksonfriend12@gmail.com";
$subject = "Checking email";
$message = "this is testing message";
$from = "admin@ahmed.almakkahelectronics.com";
$headers = "From  : $from";

$mail = mail($to,$subject,$message,$headers);

if($mail ){
    echo "mail is sent";
}
else
{
    echo "mail is not sent";
}



?>
