<?php

date_default_timezone_set('Etc/UTC');
require 'PHPMailer-master/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages

//$mail->SMTPDebug = 2;
//https://www.youtube.com/watch?v=U13smZvdArI
//https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "sultanzagzoog@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Admin!23";

//Set who the message is to be sent from
$mail->setFrom('sultan.zagzoog@gmail.com', 'Admin');

//Set an alternative reply-to address
$mail->addReplyTo('ssz_102@hotmail.com', 'First Last');

//Set who the message is to be sent to

// $mail->addAddress('ssz_102@hotmail.com', 'SuLtAn');
// $addressCC = 'szagzoog@sfhm.med.sa' ;
// $mail->AddBCC($addressCC, 'bcc account');

//$mail->addAddress('szagzoog@sfhm.med.sa', 'sultan');
//$mail->AddCC('szagzoog@sfhm.med.sa', 'sultan');

//$mail->AddBCC('szagzoog@sfhm.med.sa', 'sultan');

$mail->addCustomHeader(

            'From: my mail <sultan.zagzoog@gmail.com>' . "\r\n" .
            'Cc: sultanzagzoog@gmail.com' . "\r\n" .
           // 'Cc: szagzoog@sfhm.med.sa' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8'
            ); 

//Set the subject line
// $mail->Subject = 'PHPMailer GMail SMTP test';

// $mail->Body = 'test msg2';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('PHPMailer-master/contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
