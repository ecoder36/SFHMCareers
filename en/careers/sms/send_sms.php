<?php
        include('sms.class.php');

        // Malath_SMS(User,Pass,PHP File Encode)

        $DTT_SMS = new Malath_SMS("sultansz","555555",'UTF-8');
        $Credits = $DTT_SMS->GetCredits();
        $SenderName = $DTT_SMS->GetSenders();
        include('form.php');
		$SmS_Msg = @$_POST['Text'];
        $Mobiles = @$_POST['Mobile'];
        $Originator = @$_POST['Originator'];
        if(@$_POST['Text']){
        $Send = $DTT_SMS->Send_SMS($Mobiles,$Originator,$SmS_Msg);
        /*
         echo $DTT_SMS->StrLen($SmS_Msg);
         echo '<br />';
         echo $DTT_SMS->Count_MSG($SmS_Msg);
        */
        echo '<br /><br /><b style="color:#003300">Send Result : </b>';
        echo '<pre>';
        print_r($Send);
        echo '</pre>';

     }


?>

