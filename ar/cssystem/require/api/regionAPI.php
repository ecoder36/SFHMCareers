<?php

function region_add($eregion,$ecity)
{

    global $tf_handle;
    if( (empty($eregion)) &&  (empty($ecity)) )
        return false;
    
   
    $n_eregion         = @mysql_real_escape_string(strip_tags($eregion),$tf_handle);
  	$n_ecity           = @mysql_real_escape_string(strip_tags($ecity),$tf_handle);

  	
  // '%d','%d','%d','%d','%d','%d','%d',

    $query = sprintf("INSERT INTO `regions` VALUE(NULL,'%s',null,'%s',null,null,null)",$n_eregion,$n_ecity);
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


function region_get_by_region_city($eregion,$ecity)
{
    global $tf_handle;
   
	$n_eregion  = @mysql_real_escape_string(strip_tags($eregion),$tf_handle);
	$n_ecity    = @mysql_real_escape_string(strip_tags($ecity),$tf_handle);

    $result = region_get("WHERE `eregion` = '$n_eregion' AND `ecity`='$n_ecity'");

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



function region_update($id,$eregion,$ecity)
{
    global $tf_handle;

    $user = region_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `regions` SET ';

if (!empty($eregion))
{
    $n_eregion = @mysql_real_escape_string(strip_tags($eregion),$tf_handle);
    $fields[@count($fields)] = "`eregion` = '$n_eregion'";
}
if (!empty($ecity))
{
    $n_ecity = @mysql_real_escape_string(strip_tags($ecity),$tf_handle);
    $fields[@count($fields)] = "`ecity` = '$n_ecity'";
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