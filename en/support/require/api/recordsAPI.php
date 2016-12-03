<?php

function record_add($rid,$uname,$msg,$status)
{

    global $tf_handle;
    if( (empty($rid)) && (empty($uname)) )
        return false;
    
    $n_rid           = @mysql_real_escape_string(strip_tags($rid),$tf_handle);
    $n_uname          = @mysql_real_escape_string(strip_tags($uname),$tf_handle);
  	$n_msg           = @mysql_real_escape_string(strip_tags($msg),$tf_handle);
   
    date_default_timezone_set("Asia/Riyadh");
    $date = date("d-m-Y h:i A");
    $day = date("l");
    $n_date           = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    $n_day            = @mysql_real_escape_string(strip_tags($day),$tf_handle);
    $n_status         = @mysql_real_escape_string(strip_tags($status),$tf_handle);

    $query = sprintf("INSERT INTO `records` VALUE(NULL,'%s','%s','%s','%s','%s','%s')",$n_rid,$n_uname,$n_msg,$n_date,$n_day,$n_status);
    //echo $query;
    
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}



function record_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `records` %s ",$extra);
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


function record_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = record_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function record_get_by_rid($rid)
{
    global $tf_handle;
    $n_rid    = @mysql_real_escape_string(strip_tags($rid),$tf_handle);
    $result = record_get("WHERE `rid` = '$n_rid'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function record_get_by_ridandr($ridd)
{
    global $tf_handle;
    $n_ridd    = @mysql_real_escape_string(strip_tags($ridd),$tf_handle);
    $o_receve = 'received';
    $result = record_get("WHERE `rid` = '$n_ridd' AND `status` = '$o_receve' ORDER BY `id` DESC ");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function record_get_by_ridp($ridp)
{
    global $tf_handle;
    $n_ridp    = @mysql_real_escape_string(strip_tags($ridp),$tf_handle);
    $o_receve = 'pending';
    $result = record_get("WHERE `rid` = '$n_ridp' AND `status` = '$o_receve' ORDER BY `id` DESC ");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function record_get_by_ridc($ridc)
{
    global $tf_handle;
    $n_ridc    = @mysql_real_escape_string(strip_tags($ridc),$tf_handle);
    $o_receve = 'closed';
    $result = record_get("WHERE `rid` = '$n_ridc' AND `status` = '$o_receve' ORDER BY `id` DESC ");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}





    
?>