
<?php

function form_add($level,$class,$semester,$nationality,$idnumber,$iddate,$aname1,$aname2,$aname3,$aname4,$ename1,$ename2,$ename3,$ename4,$passport,$birthdate,$countrybirth,$citybirth,$bloodtype,$ownershiphousing,$administrativeregion,$city,$district,$mainstreet,$substreet,$housenumber,$email,$postalcode,$mailbox,$fax,$addressin,$guardianname,$gnationality,$relativerelation,$identitytype,$identitydate,$source,$end,$homephonenumber,$mobilephonenumber,$workphonenumber,$nname1,$nphone1,$naddress1,$nname2,$nphone2,$naddress2)
{

    global $tf_handle;
    if((empty($idnumber)) || (empty($nationality)))
        return false;

    $n_level                  = @mysql_real_escape_string(strip_tags($level),$tf_handle);
    $n_class                  = @mysql_real_escape_string(strip_tags($class),$tf_handle);
    $n_semester               = @mysql_real_escape_string(strip_tags($semester),$tf_handle);
    $n_nationality            = @mysql_real_escape_string(strip_tags($nationality),$tf_handle);
    $n_idnumber               = @mysql_real_escape_string(strip_tags($idnumber),$tf_handle);
    $n_iddate                 = @mysql_real_escape_string(strip_tags($iddate),$tf_handle);
    $n_aname1                 = @mysql_real_escape_string(strip_tags($aname1),$tf_handle);
    $n_aname2                 = @mysql_real_escape_string(strip_tags($aname2),$tf_handle);
    $n_aname3                 = @mysql_real_escape_string(strip_tags($aname3),$tf_handle);
    $n_aname4                 = @mysql_real_escape_string(strip_tags($aname4),$tf_handle);
    $n_ename1                 = @mysql_real_escape_string(strip_tags($ename1),$tf_handle);
    $n_ename2                 = @mysql_real_escape_string(strip_tags($ename2),$tf_handle);
    $n_ename3                 = @mysql_real_escape_string(strip_tags($ename3),$tf_handle);
    $n_ename4                 = @mysql_real_escape_string(strip_tags($ename4),$tf_handle);
    $n_passport               = @mysql_real_escape_string(strip_tags($passport),$tf_handle);
    $n_birthdate              = @mysql_real_escape_string(strip_tags($birthdate),$tf_handle);
    $n_countrybirth           = @mysql_real_escape_string(strip_tags($countrybirth),$tf_handle);
    $n_citybirth              = @mysql_real_escape_string(strip_tags($citybirth),$tf_handle);
    $n_bloodtype              = @mysql_real_escape_string(strip_tags($bloodtype),$tf_handle);
    $n_ownershiphousing       = @mysql_real_escape_string(strip_tags($ownershiphousing),$tf_handle);
    $n_administrativeregion   = @mysql_real_escape_string(strip_tags($administrativeregion),$tf_handle);
    $n_city                   = @mysql_real_escape_string(strip_tags($city),$tf_handle);
    $n_district               = @mysql_real_escape_string(strip_tags($district),$tf_handle);
    $n_mainstreet             = @mysql_real_escape_string(strip_tags($mainstreet),$tf_handle);
    $n_substreet              = @mysql_real_escape_string(strip_tags($substreet),$tf_handle);
    $n_housenumber            = @mysql_real_escape_string(strip_tags($housenumber),$tf_handle);
    $n_email                  = @mysql_real_escape_string(strip_tags($email),$tf_handle);
    $n_postalcode             = @mysql_real_escape_string(strip_tags($postalcode),$tf_handle);
    $n_mailbox                = @mysql_real_escape_string(strip_tags($mailbox),$tf_handle);
    $n_fax                    = @mysql_real_escape_string(strip_tags($fax),$tf_handle);
    $n_addressin              = @mysql_real_escape_string(strip_tags($addressin),$tf_handle);
    $n_guardianname           = @mysql_real_escape_string(strip_tags($guardianname),$tf_handle);
    $n_gnationality           = @mysql_real_escape_string(strip_tags($gnationality),$tf_handle);
    $n_relativerelation       = @mysql_real_escape_string(strip_tags($relativerelation),$tf_handle);
    $n_identitytype           = @mysql_real_escape_string(strip_tags($identitytype),$tf_handle);
    $n_identitydate           = @mysql_real_escape_string(strip_tags($identitydate),$tf_handle);
    $n_source                 = @mysql_real_escape_string(strip_tags($source),$tf_handle);
    $n_end                    = @mysql_real_escape_string(strip_tags($end),$tf_handle);
    $n_homephonenumber        = @mysql_real_escape_string(strip_tags($homephonenumber),$tf_handle);
    $n_mobilephonenumber      = @mysql_real_escape_string(strip_tags($mobilephonenumber),$tf_handle);
    $n_workphonenumber        = @mysql_real_escape_string(strip_tags($workphonenumber),$tf_handle);
    $n_nname1                 = @mysql_real_escape_string(strip_tags($nname1),$tf_handle);
    $n_nphone1                = @mysql_real_escape_string(strip_tags($nphone1),$tf_handle);
    $n_naddress1              = @mysql_real_escape_string(strip_tags($naddress1),$tf_handle);
    $n_nname2                 = @mysql_real_escape_string(strip_tags($nname2),$tf_handle);
    $n_nphone2                = @mysql_real_escape_string(strip_tags($nphone2),$tf_handle);
    $n_naddress2              = @mysql_real_escape_string(strip_tags($naddress2),$tf_handle);
    $n_studentno = null ;
    date_default_timezone_set("Asia/Riyadh");
    $date = date("d/m/Y D h:i A");
    $n_date             = @mysql_real_escape_string(strip_tags($date),$tf_handle);
    

    $query = sprintf("INSERT INTO `form` VALUE(NULL,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')"
 ,$n_level               
 ,$n_class               
 ,$n_semester            
 ,$n_nationality         
 ,$n_idnumber            
 ,$n_iddate              
 ,$n_aname1              
 ,$n_aname2              
 ,$n_aname3              
 ,$n_aname4              
 ,$n_ename1              
 ,$n_ename2              
 ,$n_ename3              
 ,$n_ename4              
 ,$n_passport            
 ,$n_birthdate           
 ,$n_countrybirth        
 ,$n_citybirth           
 ,$n_bloodtype           
 ,$n_ownershiphousing    
 ,$n_administrativeregion
 ,$n_city                
 ,$n_district            
 ,$n_mainstreet          
 ,$n_substreet           
 ,$n_housenumber         
 ,$n_email               
 ,$n_postalcode          
 ,$n_mailbox             
 ,$n_fax                 
 ,$n_addressin           
 ,$n_guardianname        
 ,$n_gnationality        
 ,$n_relativerelation    
 ,$n_identitytype        
 ,$n_identitydate        
 ,$n_source              
 ,$n_end                 
 ,$n_homephonenumber     
 ,$n_mobilephonenumber   
 ,$n_workphonenumber     
 ,$n_nname1              
 ,$n_nphone1             
 ,$n_naddress1           
 ,$n_nname2              
 ,$n_nphone2             
 ,$n_naddress2    
 ,$n_studentno 
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