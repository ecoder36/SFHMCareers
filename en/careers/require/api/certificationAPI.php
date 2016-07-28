
<?php

function rcertifications_add($idnumber,$cname,$cdate,$catt)
{

    global $tf_handle;
    if( (empty($idnumber)) || (empty($cname)) )
        return false;
    
    $n_idnumber         = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_cname            = @mysql_real_escape_string(strip_tags($cname),$tf_handle);
  	$n_cdate            = @mysql_real_escape_string(strip_tags($cdate),$tf_handle);
  	$n_catt             = @mysql_real_escape_string(strip_tags($catt),$tf_handle);
    
    $query = sprintf("INSERT INTO `rcertifications` VALUE(NULL,'%s','%s','%s','%s')",$n_idnumber,$n_cname,$n_cdate,$n_catt);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function rcertifications_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `rcertifications` %s ",$extra);
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

function rcertifications_get_by_idnumber($idnumber)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = rcertifications_get("WHERE `idnumber` = '$n_idnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rcertifications_get_by_idnumberandcname($idnumber,$cname)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_cname    = @mysql_real_escape_string(strip_tags($cname),$tf_handle);
    $result = rcertifications_get("WHERE `idnumber` = '$n_idnumber' AND `cname` = '$n_cname'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function rcertifications_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `rcertifications` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;

    return true;

}

function rcertifications_update($id,$cdate,$catt)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `rcertifications` SET ';


if (!empty($cdate))
{
    $n_cdate = @mysql_real_escape_string(strip_tags($cdate),$tf_handle);
    $fields[@count($fields)] = "`cdate` = '$n_cdate'";
}
if (!empty($catt))
{
    $n_catt = @mysql_real_escape_string(strip_tags($catt),$tf_handle);
    $fields[@count($fields)] = "`catt` = '$n_catt'";
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