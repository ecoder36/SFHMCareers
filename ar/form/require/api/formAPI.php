
<?php

function form_add($name,$bdate,$age,$sex,$idnumber,$fidnumber,$city,$phone1,$phone2,$att)
{

    global $tf_handle;
    if((empty($name)) || (empty($age)))
        return false;

    $n_name       = @mysql_real_escape_string(strip_tags($name),$tf_handle);
    $n_bdate       = @mysql_real_escape_string(strip_tags($bdate),$tf_handle);
    $n_age       = @mysql_real_escape_string(strip_tags($age),$tf_handle);
    $n_sex       = @mysql_real_escape_string(strip_tags($sex),$tf_handle);
    $n_idnumber      = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_fidnumber       = @mysql_real_escape_string(strip_tags($fidnumber),$tf_handle);
    $n_city       = @mysql_real_escape_string(strip_tags($city),$tf_handle); 
    $n_phone1      = @mysql_real_escape_string(strip_tags($phone1),$tf_handle);
    $n_phone2       = @mysql_real_escape_string(strip_tags($phone2),$tf_handle);
    $n_att      = @mysql_real_escape_string(strip_tags($att),$tf_handle);
  	
    date_default_timezone_set("Asia/Riyadh");
    $date = date("d/m/Y D h:i A");
    $n_date             = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    


    $query = sprintf("INSERT INTO `form` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')"
    ,$n_name
    ,$n_bdate
    ,$n_age
    ,$n_sex
    ,$n_idnumber
    ,$n_fidnumber
    ,$n_city
    ,$n_phone1
    ,$n_phone2
    ,$n_att
    ,$n_date
    );
    //echo $query;
    $qresult = @mysql_query($query);
    if (!$qresult)
        return false;


    return true;

}


function form_get($extra = '')
{
    global $tf_handle;
    //$ex = strip_tags($extra);
    $query = sprintf("SELECT * FROM `form` %s ",$extra);
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

function form_get_by_id($uid)
{
    $id = (int)$uid;
    if($id ==0)
        return null;

    $result = form_get('where `id` ='.$id);
    if($result == null)
        return null;

    $user = $result[0];
    return $user;
}

function form_get_by_idnumber($idnumber)
{
    global $tf_handle;
    $n_idnumber    = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $result = form_get("WHERE `idnumber` = '$n_idnumber'");

    if ($result != NULL)
        $user = $result[0];
    else
        $user = NULL;

    return $user ;
}



?>