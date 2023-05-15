<?php

//Process 
require_once'connect.php';

ini_set("SMTP", "");
//standard mail header
$headers = "From : admin@phpacademy.com";


//get message to send 

$message = $_POST['message'];

//loop through
for($x = 0; $x < count($_GET); $x++)
{
    if ($_GET['mail_$x'])
    {
        $to = $_GET['mail_$x'];
        $subject = "Neswletter";
        $body = "Dear ".$_GET['name_$x']."\n\n $message \n\n PHP Academy";

        mail($to, $subject, $body, $headers);
    }
}

echo 'All mail has been processed.';
?>