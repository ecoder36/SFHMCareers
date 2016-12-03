<?php
/*
$to = "ssz_102@hotmail.com";
$subject = "SFHM: Application Form";
$txt = "Hello world!";
//$headers = "From: szagzoog@sfhm.med.sa" . "\r\n" .
//"CC: szagzoog@sfhm.med.sa";
*/

  //  $headers = 'From: webmaster@example.com' . "\r\n" ;
/*
$headers = "From: no-reply@thepartyfinder.co.uk\r\n" . "X-Mailer: php";

    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
*/

/*
 $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'Content-type: text/html' . "\r\n"; 
// More headers
$headers .= 'From: ADMIN <szagzoog@sfhm.med.sa>' . "\r\n";
$headers .= 'Cc: szagzoog@sfhm.med.sa' . "\r\n";


if(mail($to, $subject, $txt,$headers)) {
  echo('<br>'."Email Sent ;D ".'</br>');
  } 
  else 
  {
  echo("<p>Email Message delivery failed...</p>");
  }
*/
/*
$to       = 'szagzoog@sfhm.med.sa';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: szagzoog@sfh.med.sa' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";

*/

//mail($to,$subject,$txt,$headers);



$to='ssz_102@hotmail.com';
$subject='SFHM: Application Form ';
$message='testing';

 //$headers  = 'MIME-Version: 1.0' . "\r\n";
// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// $headers .= 'From: admin <szagzoog@sfhm.med.sa>' . "\r\n";
$headers  = 'From: admin <szagzoog@sfhm.med.sa>' . "\r\n" .
            'Cc: szagzoog@sfhm.med.sa' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
 if(mail($to,$subject,$message,$headers))
 {
  echo "Mail Successfully Sent..";
  exit;
 }



?>
