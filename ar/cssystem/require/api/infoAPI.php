<?php
function file_add($infoid,$fileName,$fileLink)
{

    global $tf_handle;
    if( (empty($infoid)) ||  (empty($fileName)) ||  (empty($fileLink)) )
        return false;
    
    
    $n_infoid         = @mysql_real_escape_string(strip_tags($infoid),$tf_handle);
  	$n_fileName          = @mysql_real_escape_string(strip_tags($fileName),$tf_handle);
  	$n_fileLink           = @mysql_real_escape_string(strip_tags($fileLink),$tf_handle);
  
    $query = sprintf("INSERT INTO `files` VALUE(NULL,'%d','%s','%s')",$n_infoid,$n_fileName,$n_fileLink);
    
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function file_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `files` %s ",$extra);
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

function file_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `files` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;


    return true;

}

function info_add($region,$zone,$site,$letternumber,$letterdate,$sitename,$btype,$ficameras,$micameras,$fecameras,$mecameras,$dvr,$nvr,$pc,$controld,$screens,$switch,$ups,$note,$ename,$file,$file2,$file3,$file4,$file5,$file6,$file7,$file8,$file9,$file10)
{

    global $tf_handle;
    if( (empty($site)) &&  (empty($region)) )
        return false;
    
   
    $n_region         = @mysql_real_escape_string(strip_tags($region),$tf_handle);
  	$n_zone           = @mysql_real_escape_string(strip_tags($zone),$tf_handle);
  	$n_site           = @mysql_real_escape_string(strip_tags($site),$tf_handle);
  	$n_letternumber   = @mysql_real_escape_string(strip_tags($letternumber),$tf_handle);
  	$n_letterdate     = @mysql_real_escape_string(strip_tags($letterdate),$tf_handle);
  	$n_sitename       = @mysql_real_escape_string(strip_tags($sitename),$tf_handle);
  	$n_btype          = @mysql_real_escape_string(strip_tags($btype),$tf_handle);
  	$n_ficameras      = @mysql_real_escape_string(strip_tags($ficameras),$tf_handle);
  	$n_micameras      = @mysql_real_escape_string(strip_tags($micameras),$tf_handle);
  	$n_fecameras      = @mysql_real_escape_string(strip_tags($fecameras),$tf_handle);
  	$n_mecameras      = @mysql_real_escape_string(strip_tags($mecameras),$tf_handle);
  	$n_dvr            = @mysql_real_escape_string(strip_tags($dvr),$tf_handle);
  	$n_nvr            = @mysql_real_escape_string(strip_tags($nvr),$tf_handle);
  	$n_pc             = @mysql_real_escape_string(strip_tags($pc),$tf_handle);
  	$n_controld       = @mysql_real_escape_string(strip_tags($controld),$tf_handle);
  	$n_screens        = @mysql_real_escape_string(strip_tags($screens),$tf_handle);
  	$n_switch         = @mysql_real_escape_string(strip_tags($switch),$tf_handle);
  	$n_ups            = @mysql_real_escape_string(strip_tags($ups),$tf_handle);
  	$n_note           = @mysql_real_escape_string(strip_tags($note),$tf_handle);
    $n_ename          = @mysql_real_escape_string(strip_tags($ename),$tf_handle);
    
     $n_file           = @mysql_real_escape_string(strip_tags($file),$tf_handle);
     $n_file2          = @mysql_real_escape_string(strip_tags($file2),$tf_handle);
     $n_file3          = @mysql_real_escape_string(strip_tags($file3),$tf_handle);
     $n_file4          = @mysql_real_escape_string(strip_tags($file4),$tf_handle);
     $n_file5          = @mysql_real_escape_string(strip_tags($file5),$tf_handle);
     $n_file6          = @mysql_real_escape_string(strip_tags($file6),$tf_handle);
     $n_file7          = @mysql_real_escape_string(strip_tags($file7),$tf_handle);
     $n_file8          = @mysql_real_escape_string(strip_tags($file8),$tf_handle);
     $n_file9          = @mysql_real_escape_string(strip_tags($file9),$tf_handle);
     $n_file10          = @mysql_real_escape_string(strip_tags($file10),$tf_handle);
   
    date_default_timezone_set("Asia/Riyadh");
    $date = date("d/m/Y h:i A");
    $day = date("l");
    $n_date           = @mysql_real_escape_string(strip_tags($date),$tf_handle);
  
  // '%d','%d','%d','%d','%d','%d','%d',

    $query = sprintf("INSERT INTO `info` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%d','%d','%d','%d','%d','%d','%d','%d','%d','%d','%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',null,null)",$n_region,$n_zone,$n_site,$n_letternumber,$n_letterdate,$n_sitename,$n_btype,$n_ficameras,$n_micameras,$n_fecameras,$n_mecameras,$n_dvr,$n_nvr,$n_pc,$n_controld,$n_screens,$n_switch,$n_ups,$n_note,$n_ename,$n_date,$n_file,$n_file2,$n_file3,$n_file4,$n_file5,$n_file6,$n_file7,$n_file8,$n_file9,$n_file10);
    //echo $query;
    
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}



function info_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `info` %s ",$extra);
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


function info_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = info_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}
function info_get_by_ename_id($ename,$id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $n_ename    = @mysql_real_escape_string(strip_tags($ename),$tf_handle);
    $result = info_get("WHERE `ename` = $n_ename AND `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function info_get_by_region_zone_site($region,$zone,$site)
{
    global $tf_handle;
   
	$n_region  = @mysql_real_escape_string(strip_tags($region),$tf_handle);
	$n_zone  = @mysql_real_escape_string(strip_tags($zone),$tf_handle);
	$n_site  =  @mysql_real_escape_string(strip_tags($site),$tf_handle);
	
    $result = info_get("WHERE `region` = '$n_region' AND `zone` = '$n_zone' AND `site`='$n_site'");

    if ($result != NULL)
        $user = $result [0];
    else
        $user = NULL;

    return $user ;
}


function info_delete($uid)
{
     $id = (int)$uid;
    if($id == 0)
        return false;

    $query = sprintf("DELETE FROM `info` WHERE `id` = %d",$id);
    $qresult = @mysql_query($query);
    if(!$qresult)
        return false;


    return true;


  //  $result = tinyf_users_delete(7);
  //  if($result);
}



function info_update($id,$ficameras,$micameras,$fecameras,$mecameras,$dvr,$nvr,$pc,$controld,$screens,$switch,$ups,$note,$uname,$udate)
{
    global $tf_handle;

    $user = info_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `info` SET ';

if (!empty($ficameras))
{
    $n_ficameras = @mysql_real_escape_string(strip_tags($ficameras),$tf_handle);
    $fields[@count($fields)] = "`ficameras` = '$n_ficameras'";
}

if (!empty($micameras))
{
    $n_micameras = @mysql_real_escape_string(strip_tags($micameras),$tf_handle);
    $fields[@count($fields)] = "`micameras` = '$n_micameras'";
}
if (!empty($fecameras))
{
    $n_fecameras = @mysql_real_escape_string(strip_tags($fecameras),$tf_handle);
    $fields[@count($fields)] = "`fecameras` = '$n_fecameras'";
}
if (!empty($mecameras))
{
    $n_mecameras = @mysql_real_escape_string(strip_tags($mecameras),$tf_handle);
    $fields[@count($fields)] = "`mecameras` = '$n_mecameras'";
}
if (!empty($dvr))
{
    $n_dvr = @mysql_real_escape_string(strip_tags($dvr),$tf_handle);
    $fields[@count($fields)] = "`dvr` = '$n_dvr'";
}
if (!empty($nvr))
{
    $n_nvr = @mysql_real_escape_string(strip_tags($nvr),$tf_handle);
    $fields[@count($fields)] = "`nvr` = '$n_nvr'";
}
if (!empty($pc))
{
    $n_pc = @mysql_real_escape_string(strip_tags($pc),$tf_handle);
    $fields[@count($fields)] = "`pc` = '$n_pc'";
}
if (!empty($controld))
{
    $n_controld = @mysql_real_escape_string(strip_tags($controld),$tf_handle);
    $fields[@count($fields)] = "`controld` = '$n_controld'";
}
if (!empty($screens))
{
    $n_screens = @mysql_real_escape_string(strip_tags($screens),$tf_handle);
    $fields[@count($fields)] = "`screens` = '$n_screens'";
}
if (!empty($switch))
{
    $n_switch = @mysql_real_escape_string(strip_tags($switch),$tf_handle);
    $fields[@count($fields)] = "`switch` = '$n_switch'";
}
if (!empty($ups))
{
    $n_ups = @mysql_real_escape_string(strip_tags($ups),$tf_handle);
    $fields[@count($fields)] = "`ups` = '$n_ups'";
}
if (!empty($note))
{
    $n_note = @mysql_real_escape_string(strip_tags($note),$tf_handle);
    $fields[@count($fields)] = "`note` = '$n_note'";
}
if (!empty($uname))
{
    $n_uname = @mysql_real_escape_string(strip_tags($uname),$tf_handle);
    $fields[@count($fields)] = "`uname` = '$n_uname'";
}
if (!empty($udate))
{
    $n_udate = @mysql_real_escape_string(strip_tags($udate),$tf_handle);
    $fields[@count($fields)] = "`udate` = '$n_udate'";
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



function rquest_doneby_update($id,$doneby)
{
    global $tf_handle;

    $user = request_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `requests` SET ';

if (!empty($doneby))
{
    $n_doneby = @mysql_real_escape_string(strip_tags($doneby),$tf_handle);
    $fields[@count($fields)] = "`doneby` = '$n_doneby'";
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

function rquest_closeddate_update($id,$rdate)
{
    global $tf_handle;

    $user = request_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `requests` SET ';

if (!empty($rdate))
{
    $n_rdate = @mysql_real_escape_string(strip_tags($rdate),$tf_handle);
    $fields[@count($fields)] = "`rdate` = '$n_rdate'";
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