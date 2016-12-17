<?php

function request_add($site,$ptype,$name,$problem,$ename,$status)
{

    global $tf_handle;
    if( (empty($site)) &&  (empty($ptype)) )
        return false;
    
    $n_site           = @mysql_real_escape_string(strip_tags($site),$tf_handle);
    $n_ptype          = @mysql_real_escape_string(strip_tags($ptype),$tf_handle);
  	$n_name           = @mysql_real_escape_string(strip_tags($name),$tf_handle);
  	$n_problem        = @mysql_real_escape_string(strip_tags($problem),$tf_handle);
    $n_ename          = @mysql_real_escape_string(strip_tags($ename),$tf_handle);
   
    date_default_timezone_set("Asia/Riyadh");
    $date = date("d-m-Y h:i A");
    $day = date("l");
    $n_date           = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    $n_day            = @mysql_real_escape_string(strip_tags($day),$tf_handle);
    $n_status         = @mysql_real_escape_string(strip_tags($status),$tf_handle);

    $query = sprintf("INSERT INTO `requests` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%s',NULL,NULL)",$n_site,$n_ptype,$n_name,$n_problem,$n_ename,$n_date,$n_day,$n_status);
    //echo $query;
    
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}



function request_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `requests` %s ",$extra);
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


function request_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = request_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function request_get_by_site_ptype_status($site,$ptype,$status)
{
    global $tf_handle;
    $n_site  =  @mysql_real_escape_string(strip_tags($site),$tf_handle);
	$n_ptype  = @mysql_real_escape_string(strip_tags($ptype),$tf_handle);
	$n_status  = @mysql_real_escape_string(strip_tags($status),$tf_handle);
	
    $result = request_get("WHERE `site`='$n_site' AND `ptype` = '$n_ptype' AND (`status` = '$n_status' || `status` = 'received' || `status` = 'pending')");

    if ($result != NULL)
        $user = $result [0];
    else
        $user = NULL;

    return $user ;
}





function rquest_status_update($id,$status)
{
    global $tf_handle;

    $user = request_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `requests` SET ';

if (!empty($status))
{
    $n_status = @mysql_real_escape_string(strip_tags($status),$tf_handle);
    $fields[@count($fields)] = "`status` = '$n_status'";
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



function rquest_doneby_update($id,$doneby)
{
    global $tf_handle;

    $user = request_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `requests` SET ';

if (!empty($doneby))
{
    $n_doneby = @mysql_real_escape_string(strip_tags($doneby),$tf_handle);
    $fields[@count($fields)] = "`doneby` = '$n_doneby'";
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

function rquest_closeddate_update($id,$rdate)
{
    global $tf_handle;

    $user = request_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `requests` SET ';

if (!empty($rdate))
{
    $n_rdate = @mysql_real_escape_string(strip_tags($rdate),$tf_handle);
    $fields[@count($fields)] = "`rdate` = '$n_rdate'";
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