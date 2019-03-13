<?php

//Users APIs


function users_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `users` %s ",$extra);
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

//$u = tinyf_users_get('id,name','where id = 10');

function users_get_by_id($uid)
{
    $id = (int)$uid;
    if($id ==0)
        return null;

    $result = users_get('where `id` ='.$id);
    if($result == null)
        return null;

    $user = $result[0];
    return $user;
}

function users_get_by_name($name)
{
    global $tf_handle;
    $n_name    = @mysql_real_escape_string(strip_tags($name),$tf_handle);
    $result = users_get("WHERE `name` = '$n_name'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function users_get_by_uname($uname)
{
    global $tf_handle;
    $n_uname    = @mysql_real_escape_string(strip_tags($uname),$tf_handle);
    $result = users_get("WHERE `uname` = '$n_uname'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function users_get_by_eid($eid)
{
    global $tf_handle;
    $n_eid    = @mysql_real_escape_string(strip_tags($eid),$tf_handle);
    $result = users_get("WHERE `eid` = '$n_eid'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function users_get_by_unameOReid($unameOReid)
{
    global $tf_handle;
    $n_unameOReid    = @mysql_real_escape_string(strip_tags($unameOReid),$tf_handle) ;
	//$n_email    = @mysql_real_escape_string(strip_tags($email),$tf_handle);
    $result = users_get("WHERE `uname` = '$n_unameOReid' OR `eid` = '$n_unameOReid'")  ;

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function users_get_by_pass($opass,$uname)
{
    global $tf_handle;
    $n_opass  = @md5(@mysql_real_escape_string(strip_tags($opass),$tf_handle));
	$n_uname  = @mysql_real_escape_string(strip_tags($uname),$tf_handle);
    $result = users_get("WHERE `uname`='$n_uname' AND `pass` = '$n_opass'");

    if ($result != NULL)
        $user = $result [0];
    else
        $user = NULL;

    return $user ;
}


function users_get_info_eid($uname,$eid){

    global $tf_handle;
	   
     $n_uname    = @mysql_real_escape_string(strip_tags($uname),$tf_handle);
     $n_eid    = @mysql_real_escape_string(strip_tags($eid),$tf_handle);

     $result = users_get("WHERE `uname` like '$n_uname' OR `eid` like '$n_eid' ");

     if ($result != NULL)
        $user = $result ;
    else
        $user = NULL;

    return $user ;

}

function users_get_info($name,$uname){

    global $tf_handle;
	   $n_name    = @mysql_real_escape_string(strip_tags($name),$tf_handle);
     $n_uname    = @mysql_real_escape_string(strip_tags($uname),$tf_handle);

     $result = users_get("WHERE `name` like '$n_name' OR `uname` like '$n_uname' ");

     if ($result != NULL)
        $user = $result ;
    else
        $user = NULL;

    return $user ;

}

function users_add($name,$uname,$password,$perm)
{

    global $tf_handle;
    if((empty($name)) || (empty($uname)) || (empty($password)))
        return false;

    $n_name       = @mysql_real_escape_string(strip_tags($name),$tf_handle);
  	$n_uname      = @mysql_real_escape_string(strip_tags($uname),$tf_handle);
 // 	$n_eid        = @mysql_real_escape_string(strip_tags($eid),$tf_handle);
    $n_pass       = @md5(@mysql_real_escape_string(strip_tags($password),$tf_handle));
    $n_isadmin    = @mysql_real_escape_string(strip_tags($perm),$tf_handle);

  // if (($n_isadmin != 0) && ($n_isadmin != 1))
  //      $n_isadmin = 0;

    $query = sprintf("INSERT INTO `users` VALUE(NULL,'%s','%s','%s','%s','%d')",$n_name,$n_uname,"1",$n_pass,$n_isadmin);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}


function users_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `users` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;


    return true;


  //  $result = tinyf_users_delete(7);
  //  if($result);
}

function users_pass_update($uid,$password)
{
    global $tf_handle;
    $id = (int)$uid;
    if($id == 0)
        return false;


    $user = users_get_by_id($id);
    if(!$user)
        return false ;

if (empty($password))
        return false;

$fields = array();
$query = 'UPDATE `users` SET ';

if (!empty($password))
{
    $n_pass = @md5(@mysql_real_escape_string(strip_tags($password),$tf_handle));
    $fields[@count($fields)] = "`pass` = '$n_pass'";
}


$fcount = @count($fields) ;
if($fcount == 1)
{
    $query .= $fields[0].' WHERE `id` = '.$id;
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

    $query .= ' WHERE `id` = '.$id;
    //echo $query;
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;
    else
        return true;
}

function eid_update($id,$content)
{
    global $tf_handle;


$fields = array();
$query = 'UPDATE `users` SET ';

if (!empty($content))
{
    $n_content = @mysql_real_escape_string(strip_tags($content),$tf_handle);
    $fields[@count($fields)] = "`eid` = '$n_content'";
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

function users_update($uid,$name = null,$uname = null,$password,$isadmin = -1)
{
    global $tf_handle;
    $id = (int)$uid;
    if($id == 0)
        return false;

    $n_isadmin = (int)$isadmin;

    $user = users_get_by_id($id);
    if(!$user)
        return false ;

if((empty($name)) && (empty($uname)) && (empty($password)) && ($user->isadmin == $n_isadmin ))
        return false;

$fields = array();
$query = 'UPDATE `users` SET ';

if (!empty($name))
{
    $n_name = @mysql_real_escape_string(strip_tags($name),$tf_handle);
    $fields[@count($fields)] = "`name` = '$n_name'";
}
if (!empty($uname))
{
    $n_uname = @mysql_real_escape_string(strip_tags($uname),$tf_handle);
    $fields[@count($fields)] = "`uname` = '$n_uname'";
}
/*if (!empty($eid))
{
    $n_eid = @mysql_real_escape_string(strip_tags($eid),$tf_handle);
    $fields[@count($fields)] = "`eid` = '$n_eid'";
}*/
if (!empty($password))
{
    $n_pass = @md5(@mysql_real_escape_string(strip_tags($password),$tf_handle));
    $fields[@count($fields)] = "`pass` = '$n_pass'";
}
if (!empty($isadmin))
{
    $n_isadmin = @mysql_real_escape_string(strip_tags($isadmin),$tf_handle);
    $fields[@count($fields)] = "`isadmin` = '$n_isadmin'";
}


if($n_isadmin == -1)
    $n_isadmin = $user->isadmin;

$fields[@count($fields)] = "`isadmin` = $n_isadmin";

$fcount = @count($fields) ;
if($fcount == 1)
{
    $query .= $fields[0].' WHERE `id` = '.$id;
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

    $query .= ' WHERE `id` = '.$id;
    //echo $query;
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;
    else
        return true;
}



?>
