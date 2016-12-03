<?php
        include('sms.class.php');

        // Malath_SMS(User,Pass,PHP File Encode)

        $DTT_SMS = new Malath_SMS("sultansz","555555",'UTF-8');
        $Credits = $DTT_SMS->GetCredits();
        $SenderName = $DTT_SMS->GetSenders();
        
	//	$SmS_Msg = @$_POST['Text'];
		$msg = "thank you so much"."<br>"."for your help ".@$_POST['Originator'];
		echo $msg;
		$SmS_Msg = $msg;
        $Mobiles = @$_POST['Mobile'];
        $Originator = @$_POST['Originator'];
        if(@$_POST['Mobile']){
       // $Send = $DTT_SMS->Send_SMS($Mobiles,$Originator,$SmS_Msg);
        

     }


?>


<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

</head>
<fieldset dir=ltr>
<table border="0" width="100%" cellspacing="3" cellpadding="3">
<form action="" method="POST">
	<tr>
		<td>Your Balance</td>
<td><input type="text" name="Balance" size="20" disabled="disabled" value="<?php echo $Credits; ?>"</td>
	</tr>
	<tr>
		<td>Sender Name</td>
<td>
    <input type="hidden" size=1 name=Originator value=sultanz>
    
</td>
	</tr>
	<tr>
		<td>Mobile No.</td>
<td><input type=number name="Mobile" cols="30" ></input><br><font size="2" color="#FF0000"> Ex. 96655xxxxxxx,96655xxxxxxx</font></td>
	</tr>
	
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="Go" value="Send SMS" /></td>
	</tr>
	</form>
</table>
</fieldset>