<?php




function rid_add($idnumber,$expire,$nationality,$city,$gender,$mstatus,$idatt)
{

    global $tf_handle;
    if( (empty($idnumber)) )
        return false;
    
    $n_idnumber        = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_expire          = @mysql_real_escape_string(strip_tags($expire),$tf_handle);
  	$n_nationality     = @mysql_real_escape_string(strip_tags($nationality),$tf_handle);
  	$n_city            = @mysql_real_escape_string(strip_tags($city),$tf_handle);
    $n_gender          = @mysql_real_escape_string(strip_tags($gender),$tf_handle);
    $n_mstatus         = @mysql_real_escape_string(strip_tags($mstatus),$tf_handle);
    $n_idatt           = @mysql_real_escape_string(strip_tags($idatt),$tf_handle);
     
    $query = sprintf("INSERT INTO `rid` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s')",$n_idnumber,$n_expire,$n_nationality,$n_city,$n_gender,$n_mstatus,$n_idatt);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function reducation_add($idnumber,$eduname,$degree,$major,$edudate,$educuntry,$educity,$grade,$ceratt,$traatt,$cvatt)
{

    global $tf_handle;
    if( (empty($idnumber)) || (empty($eduname)) )
        return false;
    
    $n_idnumber          = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_eduname           = @mysql_real_escape_string(strip_tags($eduname),$tf_handle);
  	$n_degree            = @mysql_real_escape_string(strip_tags($degree),$tf_handle);
  	$n_major             = @mysql_real_escape_string(strip_tags($major),$tf_handle);
    $n_edudate           = @mysql_real_escape_string(strip_tags($edudate),$tf_handle);
    $n_educuntry         = @mysql_real_escape_string(strip_tags($educuntry),$tf_handle);
    $n_educity           = @mysql_real_escape_string(strip_tags($educity),$tf_handle);
    $n_grade             = @mysql_real_escape_string(strip_tags($grade),$tf_handle);
    $n_ceratt            = @mysql_real_escape_string(strip_tags($ceratt),$tf_handle);
    $n_traatt            = @mysql_real_escape_string(strip_tags($traatt),$tf_handle);
    $n_cvatt             = @mysql_real_escape_string(strip_tags($cvatt),$tf_handle);
    
    $query = sprintf("INSERT INTO `reducation` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$n_idnumber,$n_eduname,$n_degree,$n_major,$n_edudate,$n_educuntry,$n_educity,$n_grade,$n_ceratt,$n_traatt,$n_cvatt);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}


function rinfo_add($idnumber)
{

    global $tf_handle;
    if (empty($idnumber)) 
        return false;
    
    $n_idnumber  = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
 
    $query = sprintf("INSERT INTO `rinfo` VALUE(NULL,'%s',NULL,NULL,NULL,NULL,NULL,NULL)",$n_idnumber);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function rinfo_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `rinfo` %s ",$extra);
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

function rinfo_get_by_idnumber($idnumber)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = rinfo_get("WHERE `idnumber` = '$n_idnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rinfo_pic_update($id,$picatt)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `rinfo` SET ';

if (!empty($picatt))
{
    $n_picatt = @mysql_real_escape_string(strip_tags($picatt),$tf_handle);
    $fields[@count($fields)] = "`picatt` = '$n_picatt'";
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

function rinfo_address_update($id,$address,$pobox,$zipcode,$facebook,$twitter)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `rinfo` SET ';

if (!empty($address))
{
    $n_address = @mysql_real_escape_string(strip_tags($address),$tf_handle);
    $fields[@count($fields)] = "`address` = '$n_address'";
}
if (!empty($pobox))
{
    $n_pobox = @mysql_real_escape_string(strip_tags($pobox),$tf_handle);
    $fields[@count($fields)] = "`pobox` = '$n_pobox'";
}
if (!empty($zipcode))
{
    $n_zipcode = @mysql_real_escape_string(strip_tags($zipcode),$tf_handle);
    $fields[@count($fields)] = "`zipcode` = '$n_zipcode'";
}
if (!empty($facebook))
{
    $n_facebook = @mysql_real_escape_string(strip_tags($facebook),$tf_handle);
    $fields[@count($fields)] = "`facebook` = '$n_facebook'";
}
if (!empty($twitter))
{
    $n_twitter = @mysql_real_escape_string(strip_tags($twitter),$tf_handle);
    $fields[@count($fields)] = "`twitter` = '$n_twitter'";
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


function rid_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `rid` %s ",$extra);
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

function rid_get_by_idnumber($idnumber)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = rid_get("WHERE `idnumber` = '$n_idnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function  rid_update($id,$expire,$nationality,$city,$gender,$mstatus,$idatt)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `rid` SET ';

if (!empty($expire))
{
    $n_expire = @mysql_real_escape_string(strip_tags($expire),$tf_handle);
    $fields[@count($fields)] = "`expire` = '$n_expire'";
}
if (!empty($nationality))
{
    $n_nationality = @mysql_real_escape_string(strip_tags($nationality),$tf_handle);
    $fields[@count($fields)] = "`nationality` = '$n_nationality'";
}
if (!empty($city))
{
    $n_city = @mysql_real_escape_string(strip_tags($city),$tf_handle);
    $fields[@count($fields)] = "`city` = '$n_city'";
}
if (!empty($gender))
{
    $n_gender = @mysql_real_escape_string(strip_tags($gender),$tf_handle);
    $fields[@count($fields)] = "`gender` = '$n_gender'";
}
if (!empty($mstatus))
{
    $n_mstatus = @mysql_real_escape_string(strip_tags($mstatus),$tf_handle);
    $fields[@count($fields)] = "`mstatus` = '$n_mstatus'";
}
if (!empty($idatt))
{
    $n_idatt = @mysql_real_escape_string(strip_tags($idatt),$tf_handle);
    $fields[@count($fields)] = "`idatt` = '$n_idatt'";
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

function reducation_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `reducation` %s ",$extra);
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

function reducation_get_by_idnumber($idnumber)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = reducation_get("WHERE `idnumber` = '$n_idnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function reducation_cv_update($id,$cvatt)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `reducation` SET ';

if (!empty($cvatt))
{
    $n_cvatt = @mysql_real_escape_string(strip_tags($cvatt),$tf_handle);
    $fields[@count($fields)] = "`cvatt` = '$n_cvatt'";
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


function edu_update($id,$eduname,$degree,$major,$edudate,$educuntry,$educity,$grade,$ceratt,$traatt)
{
    global $tf_handle;

    //$user = reducation_get_by_id($id);
    //if(!$user)
    //    return false ;


$fields = array();
$query = 'UPDATE `reducation` SET ';

if (!empty($eduname))
{
    $n_eduname = @mysql_real_escape_string(strip_tags($eduname),$tf_handle);
    $fields[@count($fields)] = "`eduname` = '$n_eduname'";
}
if (!empty($degree))
{
    $n_degree = @mysql_real_escape_string(strip_tags($degree),$tf_handle);
    $fields[@count($fields)] = "`degree` = '$n_degree'";
}
if (!empty($major))
{
    $n_major = @mysql_real_escape_string(strip_tags($major),$tf_handle);
    $fields[@count($fields)] = "`major` = '$n_major'";
}
if (!empty($edudate))
{
    $n_edudate = @mysql_real_escape_string(strip_tags($edudate),$tf_handle);
    $fields[@count($fields)] = "`edudate` = '$n_edudate'";
}
if (!empty($educuntry))
{
    $n_educuntry = @mysql_real_escape_string(strip_tags($educuntry),$tf_handle);
    $fields[@count($fields)] = "`educuntry` = '$n_educuntry'";
}
if (!empty($educity))
{
    $n_educity = @mysql_real_escape_string(strip_tags($educity),$tf_handle);
    $fields[@count($fields)] = "`educity` = '$n_educity'";
}
if (!empty($grade))
{
    $n_grade = @mysql_real_escape_string(strip_tags($grade),$tf_handle);
    $fields[@count($fields)] = "`grade` = '$n_grade'";
}
if (!empty($ceratt))
{
    $n_ceratt = @mysql_real_escape_string(strip_tags($ceratt),$tf_handle);
    $fields[@count($fields)] = "`ceratt` = '$n_ceratt'";
}
if (!empty($traatt))
{
    $n_traatt = @mysql_real_escape_string(strip_tags($traatt),$tf_handle);
    $fields[@count($fields)] = "`traatt` = '$n_traatt'";
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