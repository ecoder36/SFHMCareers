
<?php

function form_add($name,$pname,$snap,$link)
{

    global $tf_handle;
    if((empty($name)) || (empty($link)))
        return false;

    $n_name       = @mysql_real_escape_string(strip_tags($name),$tf_handle);
    $n_pname       = @mysql_real_escape_string(strip_tags($pname),$tf_handle);
    $n_snap       = @mysql_real_escape_string(strip_tags($snap),$tf_handle);
    $n_link       = @mysql_real_escape_string(strip_tags($link),$tf_handle);
  	
    date_default_timezone_set("Asia/Riyadh");
    $date = date("d/m/Y D h:i A");
    $n_date             = @mysql_real_escape_string(strip_tags($date),$tf_handle);

    $query = sprintf("INSERT INTO `tourist` VALUE(NULL,'%s','%s','%s','%s','%s')",$n_name,$n_pname,$n_snap,$n_link,$n_date);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}


function form_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `tourist` %s ",$extra);
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

function form_get_by_id($uid)
{
    $id = (int)$uid;
    if($id ==0)
        return null;

    $result = form_get('where `id` ='.$id);
    if($result == null)
        return null;

    $user = $result[0];
    return $user;
}



function form_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `tourist` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;


    return true;


  //  $result = tinyf_users_delete(7);
  //  if($result);
}


?>