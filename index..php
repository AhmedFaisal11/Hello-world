<?php

$to = "jacksonfriend12@gmail.com";
$subject = "intro to computer science";
$message = "this is a message for omer . we want to know if you can build a site for our company";
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