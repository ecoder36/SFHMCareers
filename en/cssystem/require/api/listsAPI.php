<?php


function list_add($tname,$content)
{

    global $tf_handle;
    if( (empty($tname)) && (empty($content)) )
        return false;
    
    $n_tname           = @mysql_real_escape_string(strip_tags($tname),$tf_handle);
    $n_content         = @mysql_real_escape_string(strip_tags($content),$tf_handle);
  
    $query = sprintf("INSERT INTO `lists` VALUE(NULL,'%s','%s')",$n_tname,$n_content);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function list_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `lists` %s ",$extra);
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

function rtraining_get_sum($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT sum(duration) as sum FROM `rtraining` %s ",$extra);
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

function list_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = list_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function list_get_by_content($content)
{
    global $tf_handle;
    $n_content    = @mysql_real_escape_string(strip_tags($content),$tf_handle);
    $result = list_get("WHERE `content` = '$n_content'");

    if ($result != NULL)
        $user = $result;
    else
        $user = NULL;

    return $user ;
}

function list_get_by_tnameandcontent($tname,$content)
{
    global $tf_handle;
    $n_tname    = @mysql_real_escape_string(strip_tags($tname),$tf_handle);
    $n_content    = @mysql_real_escape_string(strip_tags($content),$tf_handle);
    $result = list_get("WHERE `tname` = '$n_tname' AND `content` = '$n_content'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function list_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `lists` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;

    return true;

}

function list_update($id,$content)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `lists` SET ';

if (!empty($content))
{
    $n_content = @mysql_real_escape_string(strip_tags($content),$tf_handle);
    $fields[@count($fields)] = "`content` = '$n_content'";
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