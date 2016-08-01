
<?php
/*$to      = 'a0185a5f@mohmal.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);*/

?> 



<?php
$to      = 'ssz_1021@barid.com';
$subject = 'the subject';

$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$message = $_POST['message'];

$body = <<<EMAIL

HI! My name is &name. and my topic is $topic

$message

From $name
oh ya, my email is $email 

EMAIL;

$header = 'From: $email';

if($_POST){
    mail($to,$subject,$message,$headers);
    $feedback = 'thanks';
}
?>



<!doctype html>
<html lang='en' dir="rtl">
    <head>
        <meta charset='utf-8' />
        <title>brian</title>
        <style type='text/css'>
            body{
                margin: 15px 350px;
            }
            form{
                width: 400px;
            }
            form ul{
                list-style-type: none;
            }
            form ul li {
                margin: 15px 0;
            }
            form label {
                display: block;
                font-size: 2em;
            }
            form input, textarea, select {
                font-size: 2em;
                padding: 5px;
                border: #ccc 3px solid;
                width: 100%;
            }
        </style>
    </head>
<body>
    &nbsp
    <h2>contact</h2>
    <p id="feedback"><?php echo $feedback ; ?></p>
<form action="?" method="post">
    <ul>
        <li>
            <label for="name">الاسم:</label>
            <input type="text" name="name" id="name" />
        </li>
        <li>
            <label for="email">البريد الإلكتروني :</label>
            <input type="text" name="email" id="email" />
        </li>
          <li>
            <label for="phone">الجوال  :</label>
            <input type="text" name="phone" id="phone" />
        </li>
        <li>
            <label for="message">ملاحظات : </label>
            <textarea id="message" name="message" cols="42" rows="9" ></textarea>
        </li>
        <li><input type="submit" value="Submit"></li>
    </ul>
</form>
</body>
</html>