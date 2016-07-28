<?php



function rtraining_add($idnumber,$title,$institute,$date,$duration,$trainfile)
{

    global $tf_handle;
    if( (empty($idnumber)) || (empty($title)) )
        return false;
    
    $n_idnumber         = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_title            = @mysql_real_escape_string(strip_tags($title),$tf_handle);
  	$n_institute        = @mysql_real_escape_string(strip_tags($institute),$tf_handle);
  	$n_date             = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    $n_duration         = @mysql_real_escape_string(strip_tags($duration),$tf_handle);
    $n_trainfile        = @mysql_real_escape_string(strip_tags($trainfile),$tf_handle);
    
    $query = sprintf("INSERT INTO `rtraining` VALUE(NULL,'%s','%s','%s','%s','%s','%s')",$n_idnumber,$n_title,$n_institute,$n_date,$n_duration,$n_trainfile);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function rtraining_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `rtraining` %s ",$extra);
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

function rtraining_get_by_idnumber($idnumber)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = rtraining_get("WHERE `idnumber` = '$n_idnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rtraining_get_by_idnumberandtranname($idnumber,$tranname)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_tranname    = @mysql_real_escape_string(strip_tags($tranname),$tf_handle);
    $result = rtraining_get("WHERE `idnumber` = '$n_idnumber' AND `title` = '$n_tranname'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rtraining_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `rtraining` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;

    return true;

}

function rtraining_update($id,$inname,$traindate,$duration,$trainatt)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `rtraining` SET ';

if (!empty($inname))
{
    $n_inname = @mysql_real_escape_string(strip_tags($inname),$tf_handle);
    $fields[@count($fields)] = "`institute` = '$n_inname'";
}
if (!empty($traindate))
{
    $n_traindate = @mysql_real_escape_string(strip_tags($traindate),$tf_handle);
    $fields[@count($fields)] = "`date` = '$n_traindate'";
}
if (!empty($duration))
{
    $n_duration = @mysql_real_escape_string(strip_tags($duration),$tf_handle);
    $fields[@count($fields)] = "`duration` = '$n_duration'";
}
if (!empty($trainatt))
{
    $n_traniatt = @mysql_real_escape_string(strip_tags($trainatt),$tf_handle);
    $fields[@count($fields)] = "`tatt` = '$n_trainatt'";
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