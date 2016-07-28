<?php

function jobs_add($jobnumber,$requairedno,$applicantsno,$candidateno,$ldate,$date)
{

    global $tf_handle;
    if( (empty($jobnumber))  )
        return false;
    
    $n_jobnumber            = @mysql_real_escape_string(strip_tags($jobnumber),$tf_handle);
    $n_requairedno          = @mysql_real_escape_string(strip_tags($requairedno),$tf_handle);
  	$n_applicantsno         = @mysql_real_escape_string(strip_tags($applicantsno),$tf_handle);
  	$n_candidateno          = @mysql_real_escape_string(strip_tags($candidateno),$tf_handle);
    $n_ldate                = @mysql_real_escape_string(strip_tags($ldate),$tf_handle);
    $n_date                 = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    
    $query = sprintf("INSERT INTO `jobs` VALUE(NULL,'%s','%s','%s','%s','%s','%s')",$n_jobnumber,$n_requairedno,$n_applicantsno,$n_candidateno,$n_ldate,$n_date);
    //echo $query;
    
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function jobsen_add($jobnumber,$jobname,$dept,$org,$city,$employmenttype,$perment,$sub1,$desc1,$sub2,$desc2)
{

    global $tf_handle;
    
    $n_jobnumber          = @mysql_real_escape_string(strip_tags($jobnumber),$tf_handle);
    $n_jobname            = @mysql_real_escape_string(strip_tags($jobname),$tf_handle);
  	$n_dept               = @mysql_real_escape_string(strip_tags($dept),$tf_handle);
  	$n_org                = @mysql_real_escape_string(strip_tags($org),$tf_handle);
    $n_city               = @mysql_real_escape_string(strip_tags($city),$tf_handle);
    $n_employmenttype     = @mysql_real_escape_string(strip_tags($employmenttype),$tf_handle);
    $n_perment            = @mysql_real_escape_string(strip_tags($perment),$tf_handle);
    $n_sub1            = @mysql_real_escape_string(strip_tags($sub1),$tf_handle);
    $n_desc1        = @mysql_real_escape_string(strip_tags($desc1),$tf_handle);
    $n_sub2        = @mysql_real_escape_string(strip_tags($sub2),$tf_handle);
    $n_desc2        = @mysql_real_escape_string(strip_tags($desc2),$tf_handle);
    
    $query = sprintf("INSERT INTO `jobsen` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$n_jobnumber,$n_jobname,$n_dept,$n_org,$n_city,$n_employmenttype,$n_perment,$n_sub1,$n_desc1,$n_sub2,$n_desc2);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function jobsar_add($jobnumber,$jobname,$dept,$org,$city,$employmenttype,$perment,$sub1,$desc1,$sub2,$desc2)
{

    global $tf_handle;
    
    $n_jobnumber          = @mysql_real_escape_string(strip_tags($jobnumber),$tf_handle);
    $n_jobname            = @mysql_real_escape_string(strip_tags($jobname),$tf_handle);
  	$n_dept               = @mysql_real_escape_string(strip_tags($dept),$tf_handle);
  	$n_org                = @mysql_real_escape_string(strip_tags($org),$tf_handle);
    $n_city               = @mysql_real_escape_string(strip_tags($city),$tf_handle);
    $n_employmenttype     = @mysql_real_escape_string(strip_tags($employmenttype),$tf_handle);
    $n_perment            = @mysql_real_escape_string(strip_tags($perment),$tf_handle);
    $n_sub1            = @mysql_real_escape_string(strip_tags($sub1),$tf_handle);
    $n_desc1        = @mysql_real_escape_string(strip_tags($desc1),$tf_handle);
    $n_sub2        = @mysql_real_escape_string(strip_tags($sub2),$tf_handle);
    $n_desc2        = @mysql_real_escape_string(strip_tags($desc2),$tf_handle);
    
    $query = sprintf("INSERT INTO `jobsar` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$n_jobnumber,$n_jobname,$n_dept,$n_org,$n_city,$n_employmenttype,$n_perment,$n_sub1,$n_desc1,$n_sub2,$n_desc2);
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}

function jobs_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `jobs` %s ",$extra);
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


function jobs_get_by_jobnumber($jobnumber)
{
    global $tf_handle;
    $n_jobnumber    = @mysql_real_escape_string(strip_tags($jobnumber),$tf_handle);
    $result = jobs_get("WHERE `jobnumber` = '$n_jobnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function jobs_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = jobs_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}


function jobsen_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `jobsen` %s ",$extra);
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


function jobsen_get_by_jobnumber($jobnumber)
{
    global $tf_handle;
    $n_jobnumber    = @mysql_real_escape_string(strip_tags($jobnumber),$tf_handle);
    $result = jobsen_get("WHERE `jobnumber` = '$n_jobnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function jobsen_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = jobsen_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}


function jobsar_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `jobsar` %s ",$extra);
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



function jobsar_get_by_jobnumber($jobnumber)
{
    global $tf_handle;
    $n_jobnumber    = @mysql_real_escape_string(strip_tags($jobnumber),$tf_handle);
    $result = jobsar_get("WHERE `jobnumber` = '$n_jobnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}

function jobsar_get_by_id($id)
{
    global $tf_handle;
    $n_id    = @mysql_real_escape_string(strip_tags($id),$tf_handle);
    $result = jobsar_get("WHERE `id` = '$n_id'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}


function jobs_date_update($id,$date,$required)
{
    global $tf_handle;

    $user = jobs_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `jobs` SET ';

if (!empty($date))
{
    $n_date = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    $fields[@count($fields)] = "`ldate` = '$n_date'";
}
if (!empty($required))
{
    $n_required = @mysql_real_escape_string(strip_tags($required),$tf_handle);
    $fields[@count($fields)] = "`requairedno` = '$n_required'";
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



function jobsen_desc_update($id,$sub1,$desc1,$sub2,$desc2)
{
    global $tf_handle;

    $user = jobsen_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `jobsen` SET ';

if (!empty($sub1))
{
    $n_sub1 = @mysql_real_escape_string(strip_tags($sub1),$tf_handle);
    $fields[@count($fields)] = "`sub1` = '$n_sub1'";
}
if (!empty($desc1))
{
    $n_desc1 = @mysql_real_escape_string(strip_tags($desc1),$tf_handle);
    $fields[@count($fields)] = "`desc1` = '$n_desc1'";
}
if (!empty($sub2))
{
    $n_sub2 = @mysql_real_escape_string(strip_tags($sub2),$tf_handle);
    $fields[@count($fields)] = "`sub2` = '$n_sub2'";
}
if (!empty($desc2))
{
    $n_desc2 = @mysql_real_escape_string(strip_tags($desc2),$tf_handle);
    $fields[@count($fields)] = "`desc2` = '$n_desc2'";
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

function jobsen_info_update($id,$jobname,$dept,$hours,$contract,$org,$city)
{
    global $tf_handle;

    $user = jobsen_get_by_id($id);
    if(!$user)
        return false ;


$fields = array();
$query = 'UPDATE `jobsen` SET ';

if (!empty($jobname))
{
    $n_jobname = @mysql_real_escape_string(strip_tags($jobname),$tf_handle);
    $fields[@count($fields)] = "`jobname` = '$n_jobname'";
}

if (!empty($dept))
{
    $n_dept = @mysql_real_escape_string(strip_tags($dept),$tf_handle);
    $fields[@count($fields)] = "`dept` = '$n_dept'";
}
if (!empty($hours))
{
    $n_hours = @mysql_real_escape_string(strip_tags($hours),$tf_handle);
    $fields[@count($fields)] = "`employmenttype` = '$n_hours'";
}
if (!empty($contract))
{
    $n_contract = @mysql_real_escape_string(strip_tags($contract),$tf_handle);
    $fields[@count($fields)] = "`perment` = '$n_contract'";
}
if (!empty($org))
{
    $n_org = @mysql_real_escape_string(strip_tags($org),$tf_handle);
    $fields[@count($fields)] = "`org` = '$n_org'";
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