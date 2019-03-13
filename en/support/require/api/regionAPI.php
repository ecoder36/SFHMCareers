<?php

function region_add($region,$city)
{

    global $tf_handle;
    if( (empty($region)) &&  (empty($city)) )
        return false;
    
   
    $n_region         = @mysql_real_escape_string(strip_tags($region),$tf_handle);
  	$n_city           = @mysql_real_escape_string(strip_tags($city),$tf_handle);

  	
  // '%d','%d','%d','%d','%d','%d','%d',

    $query = sprintf("INSERT INTO `regions` VALUE(NULL,'%s','%s',null)",$n_region,$n_city);
    //echo $query;
    
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}



function region_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `regions` %s ",$extra);
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


function region_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = region_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}


function region_get_by_region_city($region,$city)
{
    global $tf_handle;
   
	$n_region  = @mysql_real_escape_string(strip_tags($region),$tf_handle);
	$n_city    = @mysql_real_escape_string(strip_tags($city),$tf_handle);

    $result = region_get("WHERE `region` = '$n_region' AND `city`='$n_city'");

    if ($result != NULL)
        $user = $result ;
    else
        $user = NULL;

    return $user ;
}

function region_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `regions` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;

    return true;

}



function region_update($id,$region,$city)
{
    global $tf_handle;

    $user = region_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `regions` SET ';

if (!empty($region))
{
    $n_region = @mysql_real_escape_string(strip_tags($region),$tf_handle);
    $fields[@count($fields)] = "`region` = '$n_region'";
}
if (!empty($city))
{
    $n_city = @mysql_real_escape_string(strip_tags($city),$tf_handle);
    $fields[@count($fields)] = "`city` = '$n_city'";
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