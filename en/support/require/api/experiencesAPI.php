<?php

function rexperiences_add($idnumber,$date,$days,$location,$cname,$csize,$position,$cindustry,$workdesc,$eatt)
{

    global $tf_handle;
    if( (empty($idnumber)) || (empty($date)) )
        return false;
    
    $n_idnumber        = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_date            = @mysql_real_escape_string(strip_tags($date),$tf_handle);
  	$n_days            = @mysql_real_escape_string(strip_tags($days),$tf_handle);
  	$n_location        = @mysql_real_escape_string(strip_tags($location),$tf_handle);
    $n_cname           = @mysql_real_escape_string(strip_tags($cname),$tf_handle);
    $n_csize           = @mysql_real_escape_string(strip_tags($csize),$tf_handle);
    $n_position        = @mysql_real_escape_string(strip_tags($position),$tf_handle);
    $n_cindustry       = @mysql_real_escape_string(strip_tags($cindustry),$tf_handle);
    $n_workdesc        = @mysql_real_escape_string(strip_tags($workdesc),$tf_handle);
    $n_eatt            = @mysql_real_escape_string(strip_tags($eatt),$tf_handle);
    
    $query = sprintf("INSERT INTO `rexperiences` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$n_idnumber,$n_date,$n_days,$n_location,$n_cname,$n_csize,$n_position,$n_cindustry,$n_workdesc,$n_eatt);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function rexperiences_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `rexperiences` %s ",$extra);
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

function rexperiences_get_sum($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT sum(days) as sum FROM `rexperiences` %s ",$extra);
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


function rexperiences_get_by_idnumber($idnumber)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = rexperiences_get("WHERE `idnumber` = '$n_idnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rexperiences_get_by_idnumberanddate($idnumber,$date)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_date    = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    $result = rexperiences_get("WHERE `idnumber` = '$n_idnumber' AND `date` = '$n_date'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rexperiences_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `rexperiences` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;

    return true;

}

function rexperiences_update($id,$date,$days,$location,$cname,$csize,$position,$cindustry,$workdesc,$eatt)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `rexperiences` SET ';


if (!empty($date))
{
    $n_date = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    $fields[@count($fields)] = "`date` = '$n_date'";
}
if (!empty($days))
{
    $n_days = @mysql_real_escape_string(strip_tags($days),$tf_handle);
    $fields[@count($fields)] = "`days` = '$n_days'";
}
if (!empty($location))
{
    $n_location = @mysql_real_escape_string(strip_tags($location),$tf_handle);
    $fields[@count($fields)] = "`location` = '$n_location'";
}
if (!empty($cname))
{
    $n_cname = @mysql_real_escape_string(strip_tags($cname),$tf_handle);
    $fields[@count($fields)] = "`cname` = '$n_cname'";
}
if (!empty($csize))
{
    $n_csize = @mysql_real_escape_string(strip_tags($csize),$tf_handle);
    $fields[@count($fields)] = "`csize` = '$n_csize'";
}
if (!empty($position))
{
    $n_position = @mysql_real_escape_string(strip_tags($position),$tf_handle);
    $fields[@count($fields)] = "`position` = '$n_position'";
}
if (!empty($cindustry))
{
    $n_cindustry = @mysql_real_escape_string(strip_tags($cindustry),$tf_handle);
    $fields[@count($fields)] = "`cindustry` = '$n_cindustry'";
}
if (!empty($workdesc))
{
    $n_workdesc = @mysql_real_escape_string(strip_tags($workdesc),$tf_handle);
    $fields[@count($fields)] = "`workdesc` = '$n_workdesc'";
}
if (!empty($eatt))
{
    $n_eatt = @mysql_real_escape_string(strip_tags($eatt),$tf_handle);
    $fields[@count($fields)] = "`eatt` = '$n_eatt'";
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