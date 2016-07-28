<?php



function rapp_add($idnumber,$jobnumber,$rno,$afullname,$efullname,$birthd,$email,$mobile,$pass,$approval,$acceptance)
{

    global $tf_handle;
    if( (empty($idnumber)) || (empty($jobnumber)) )
        return false;
    
    $n_idnumber         = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_jobnumber        = @mysql_real_escape_string(strip_tags($jobnumber),$tf_handle);
    $n_rno              = @mysql_real_escape_string(strip_tags($rno),$tf_handle);
  	$n_afullname        = @mysql_real_escape_string(strip_tags($afullname),$tf_handle);
  	$n_efullname        = @mysql_real_escape_string(strip_tags($efullname),$tf_handle);
  	$n_birthd           = @mysql_real_escape_string(strip_tags($birthd),$tf_handle);
    $n_email            = @mysql_real_escape_string(strip_tags($email),$tf_handle);
    $n_mobile           = @mysql_real_escape_string(strip_tags($mobile),$tf_handle);
    $n_pass             = @md5(@mysql_real_escape_string(strip_tags($password),$tf_handle));
    
    $n_approval         = @mysql_real_escape_string(strip_tags($approval),$tf_handle);
    $n_acceptance       = @mysql_real_escape_string(strip_tags($acceptance),$tf_handle);
    date_default_timezone_set("Asia/Riyadh");
    $date = date("d/m/Y D h:i A");
    $n_date             = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    
   /* 
   $str = "The quick brown fox jumps over the lazy dog.";
$str2 = substr($str, 4); // "quick brown fox jumps over the lazy dog.";
   date_default_timezone_set("Asia/Bangkok");
$str = "9782";
$str2 = substr($str, 3); // "quick brown fox jumps over the lazy dog.";
$d = date("Y");
$a = date("Y").$str;

echo ($a) ;*/
    
    $query = sprintf("INSERT INTO `rapp` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$n_idnumber,$n_jobnumber,$n_rno,$n_afullname,$n_efullname,$n_birthd,$n_email,$n_mobile,$n_pass,$n_date,$n_approval,$n_acceptance);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}


function rapp_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `rapp` %s ",$extra);
    $qresult =@mysql_query($query);
    if(!$qresult)
        return null;

    $rcount = @mysql_num_rows($qresult);
    if($rcount == 0)
        return null;

    $users = array();
    for($i=0; $i < $rcount; $i++)
        $users[@count($users)] = @mysql_fetch_object($qresult);


    @mysql_free_result($qresult);

    return $users;

}


function rapp_get_by_idnumber($idnumber)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = rapp_get("WHERE `idnumber` = '$n_idnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rapp_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = rapp_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rapp_get_by_pass($opass,$idnumber)
{
    global $tf_handle;
    $n_opass  = @md5(@mysql_real_escape_string(strip_tags($opass),$tf_handle));
	$n_idnumber  = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = rapp_get("WHERE `idnumber`='$n_idnumber' AND `pass` = '$n_opass'");

    if ($result != NULL)
        $user = $result [0];
    else
        $user = NULL;

    return $user ;
}

function rapp_pass_update($uid,$password)
{
    global $tf_handle;
    $id = (int)$uid;
    if($id == 0)
        return false;


    $user = rapp_get_by_id($id);
    if(!$user)
        return false ;

if (empty($password))
        return false;

$fields = array();
$query = 'UPDATE `rapp` SET ';

if (!empty($password))
{
    $n_pass = @md5(@mysql_real_escape_string(strip_tags($password),$tf_handle));
    $fields[@count($fields)] = "`pass` = '$n_pass'";
}


$fcount = @count($fields) ;
if($fcount == 1)
{
    $query .= $fields[0].' WHERE `id` = '.$id;
    //echo $query;
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;
    else
        return true;
}

    for($i = 0; $i < $fcount; $i++)
    {
        $query .= $fields[$i];
        if($i != ($fcount - 1))
                $query .=' , ';
    }

    $query .= ' WHERE `id` = '.$id;
    //echo $query;
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;
    else
        return true;
}


function rapp_approval_update($uid,$approval)
{
    global $tf_handle;
    $id = (int)$uid;
    if($id == 0)
        return false;


    $user = rapp_get_by_id($id);
    if(!$user)
        return false ;

if (empty($approval))
        return false;

$fields = array();
$query = 'UPDATE `rapp` SET ';

if (!empty($approval))
{
    $n_approval = @mysql_real_escape_string(strip_tags($approval),$tf_handle);
    $fields[@count($fields)] = "`approval` = '$n_approval'";
}


$fcount = @count($fields) ;
if($fcount == 1)
{
    $query .= $fields[0].' WHERE `id` = '.$id;
    //echo $query;
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;
    else
        return true;
}

    for($i = 0; $i < $fcount; $i++)
    {
        $query .= $fields[$i];
        if($i != ($fcount - 1))
                $query .=' , ';
    }

    $query .= ' WHERE `id` = '.$id;
    //echo $query;
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;
    else
        return true;
}

function rapp_mail_phone_update($id,$mail,$phone)
{
        global $tf_handle;
    
        $user = rapp_get_by_id($id);
        if(!$user)
           return false ;
    
    
    $fields = array();
    $query = 'UPDATE `rapp` SET ';
    
    if (!empty($mail))
    {
        $n_mail = @mysql_real_escape_string(strip_tags($mail),$tf_handle);
        $fields[@count($fields)] = "`email` = '$n_mail'";
    }
    if (!empty($phone))
    {
        $n_phone = @mysql_real_escape_string(strip_tags($phone),$tf_handle);
        $fields[@count($fields)] = "`mobile` = '$n_phone'";
    }
   
    
    $fcount = @count($fields) ;
    if($fcount == 1)
    {
        $query .= $fields[0].' WHERE `id` = '.$id.'';
        //echo $query;
        $qresult = @mysql_query($query);
        if(!$qresult)
            return false;
        else
            return true;
    }
    
        for($i = 0; $i < $fcount; $i++)
        {
            $query .= $fields[$i];
            if($i != ($fcount - 1))
                    $query .=' , ';
        }
    
        $query .= ' WHERE `id` = '.$id.'';
        //echo $query;
        $qresult = @mysql_query($query);
        if(!$qresult)
            return false;
        else
            return true;
}

function rapp_update($id,$rno,$password)
{
        global $tf_handle;
    
        $user = rapp_get_by_id($id);
        if(!$user)
           return false ;
    
    
    $fields = array();
    $query = 'UPDATE `rapp` SET ';
    
    if (!empty($rno))
    {
        $n_rno = @mysql_real_escape_string(strip_tags($rno),$tf_handle);
        $fields[@count($fields)] = "`rno` = '$n_rno'";
    }
   if (!empty($password))
    {
        $n_pass = @md5(@mysql_real_escape_string(strip_tags($password),$tf_handle));
        $fields[@count($fields)] = "`pass` = '$n_pass'";
    }

    
    $fcount = @count($fields) ;
    if($fcount == 1)
    {
        $query .= $fields[0].' WHERE `id` = '.$id.'';
        //echo $query;
        $qresult = @mysql_query($query);
        if(!$qresult)
            return false;
        else
            return true;
    }
    
        for($i = 0; $i < $fcount; $i++)
        {
            $query .= $fields[$i];
            if($i != ($fcount - 1))
                    $query .=' , ';
        }
    
        $query .= ' WHERE `id` = '.$id.'';
        //echo $query;
        $qresult = @mysql_query($query);
        if(!$qresult)
            return false;
        else
            return true;
}

?>