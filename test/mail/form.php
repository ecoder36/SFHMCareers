
<?php



@require_once('db.php');
@require_once('formAPI.php');

 
		      
if(isset($_POST['name'])){

		
                         @$result = form_add($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['msg']);
                         tinyf_db_close();
                         if($result)
                             {
                                  
                                 // header("Location: inventorytable.php?done=123");
                                 // header("Location: ?done=123");
                                  
                                                                             
                                            $to      = 'd18bfb46@mohmal.com';
                                            $subject = 'the subject';
                                            
                                            $name = $_POST['name'];
                                            $email = $_POST['email'];
                                            $phone = $_POST['phone'];
                                            $msg = $_POST['msg'];
                                            $iname='الاسم'.'<p> : </p>'.$name; 
                                            $iemail='البريد'.'<p> : </p>'.$email; 
                                            $iphone='الجوال'.'<p> : </p>'.$phone; 
                                            $imsg='ملاحظة'.'<p> : </p>'.$msg; 
                                            $message = " 
                                            
                                            <!doctype html>
                                            <html lang='en'>
                                                <head>
                                                    <meta charset='utf-8' />
                                                    <title>can</title>
                                                </head>
                                            <body>
                                            <p>This email contains HTML Tags!</p>
                                            
                                            <canvas  id=\"myCan\" width=\"640\" height=\"480\"></canvas>
                                            <img id='image'>
                                             
                                            <script>
                                            //http://codepen.io/discoveryvip/pen/WwbabY
                                            //var canvas = document.getElementById('myCan');
                                            //var ctx = canvas.getContext('2d');
                                            //var imageElem = document.getElementById('image');
                                            var ctx = document.getElementById('myCan').getContext('2d'),
                                                imageElem = document.getElementById('image');
                                            
                                            ctx.font=\"italic bold 48px Arial\";
                                            ctx.fillStyle =\"green\";
                                            ctx.fillText('$iname',50,50);
                                             ctx.fillStyle =\"green\";
                                            ctx.fillText('$iemail',50,150);
                                             ctx.fillStyle =\"green\";
                                            ctx.fillText('$iphone',50,250);
                                             ctx.fillStyle =\"green\";
                                            ctx.fillText('$imsg',50,350);
                                            ;
                                            imageElem.src = ctx.canvas.toDataURL();
                                                console.log(imageElem.src);
                                            </script>
                                            
                                            </body>
                                            </html>
                                            ";
                                            
                                            // Always set content-type when sending HTML email
                                            $headers .= "MIME-Version: 1.0" . "\r\n";
                                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                            
                                            // More headers
                                            $headers .= 'From: <test@example.com>' . "\r\n";
                                            $headers .= 'Cc: myboss@example.com' . "\r\n";
                                            
                                            if($_POST){
                                                mail($to,$subject,$message,$headers);
                                                $feedback = 'تم إسال بياناتك بنجاح وشكرا ,,, ';
                                            } ;
                             }
                         else{
                         header("Location: ?error=1");
                         }
                          
	        	
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
    <?php if($result){ ?>
    <p id="feedback"><?php echo $feedback ; ?></p>
    <?php echo $message ; ?>
    <?php }else { ?>
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
            <label for="msg">ملاحظات : </label>
            <textarea id="msg" name="msg" cols="42" rows="9" ></textarea>
        </li>
        <li><input type="submit" value="إرسال"></li>
    </ul>
</form><?php } ?>
</body>
</html>