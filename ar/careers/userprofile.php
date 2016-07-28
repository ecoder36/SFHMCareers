
<?php

require_once('log/logsession.php');
if($_SESSION['user_info'] != false && $_SESSION['user_info']->idnumber != trim($_GET['idnumber']) )
{
    	header("Location: jobs.php?error=r");
}
if($_SESSION['user_info'] != false && $_SESSION['user_info']->idnumber == trim($_GET['idnumber']) )
{
    
?>

<?php

@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');
@require_once('require/api/addresumesAPI.php');
@require_once('require/api/rappAPI.php');
@require_once('require/api/certificationAPI.php');
@require_once('require/api/trainingAPI.php');
@require_once('require/api/experiencesAPI.php');

//if($_GET['idnumber'] == 0){
 //     header("Location: applicantslist.php?viewerror=error");
  //  die ('error');
//}

 $rapp =       rapp_get_by_idnumber(trim($_GET['idnumber'])); /* */
 $rid =   rid_get_by_idnumber(trim($_GET['idnumber']));
 $rinfo = rinfo_get_by_idnumber(trim($_GET['idnumber']));
 $reducation   =   reducation_get_by_idnumber(trim($_GET['idnumber']));
 $job   =   jobs_get_by_jobnumber(trim($rapp->jobnumber));
 $enjobname   =   jobsen_get_by_jobnumber(trim($rapp->jobnumber));
 $arjobname   =   jobsar_get_by_jobnumber(trim($rapp->jobnumber));
 

/* start pic update */
if(isset($_POST['idforpic'])){
 
            $name = $_FILES['picatt']['name']; $tmp_name = $_FILES['picatt']['tmp_name'];
            $type = $_FILES['picatt']['type']; $size = $_FILES['picatt']['size']; $error = $_FILES['picatt']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $picfile = $file_name; } else {  $picfile = '' ; }
    $result1 = rinfo_pic_update(trim($_POST['idforpic']),trim($picfile));
       if($result1){
       header("Location: ?idnumber=".$_GET['idnumber']."&picupdatesuccess=done ");
       }else{
        die('updating Error');
       }
}
/* End pic update */


/* start cv update */
if(isset($_POST['idforcv'])){

            $name = $_FILES['cvatt']['name']; $tmp_name = $_FILES['cvatt']['tmp_name'];
            $type = $_FILES['cvatt']['type']; $size = $_FILES['cvatt']['size']; $error = $_FILES['cvatt']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $cvfile = $file_name; } else {  $cvfile = '' ; }
    $result1 =  reducation_cv_update(trim($_POST['idforcv']),trim($cvfile));
       if($result1){
       header("Location: ?idnumber=".$_GET['idnumber']."&cvupdatesuccess=done ");
       }else{
        die('updating Error');
       }
}
/* End cv update */

/* start mail&phone update */
if(isset($_POST['idformail'])){
    
    $result  =  rapp_mail_phone_update(trim($_POST['idformail']),trim($_POST['mail']),trim($_POST['phone']));
       if($result){
       header("Location: ?idnumber=".$_GET['idnumber']."&mailupdatesuccess=done ");
       }else{
        die('updating Error');
       }
}
/* End mail&phone update */

/* start address update */
if(isset($_POST['idforrinfo'])){
    
    $result  =  rinfo_address_update(trim($_POST['idforrinfo']),trim($_POST['address']),trim($_POST['pobox']),trim($_POST['zipcode']),trim($_POST['facebook']),trim($_POST['twitter']));
       if($result){
       header("Location: ?idnumber=".$_GET['idnumber']."&rinfoupdatesuccess=done ");
       }else{
        die('updating Error');
       }
}
/* End address update */
/* start edu update */
if(isset($_POST['eduname']))
{
            $name = $_FILES['cefile']['name']; $tmp_name = $_FILES['cefile']['tmp_name'];
            $type = $_FILES['cefile']['type']; $size = $_FILES['cefile']['size']; $error = $_FILES['cefile']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $cefile = $file_name; } else {  $cefile = '' ; }
            $name2 = $_FILES['trfile']['name']; $tmp_name2 = $_FILES['trfile']['tmp_name'];
            $type2 = $_FILES['trfile']['type']; $size2 = $_FILES['trfile']['size']; $error2 = $_FILES['trfile']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name2 = $idnumber . '.' . $uniqid . '.' . $name2  ;
            if(move_uploaded_file($tmp_name2, "../../en/careers/file/".$file_name2)){ $trfile = $file_name2; } else {  $trfile = '' ; }
    $_id = $reducation->id ;
    $result = edu_update($_id,trim($_POST['eduname']),trim($_POST['degree']),trim($_POST['major']),trim($_POST['edudate']),trim($_POST['educuntry']),trim($_POST['educity']),trim($_POST['grade']),trim($cefile),trim($trfile));
                               
                                 if($result)
                                 { 
                                     header("Location: ?idnumber=".$_POST['idnumber']."&eduupdated=done ");
                                 }else{ 
                                     die('Update Failure');
                                     }  
                                 die();   
}
/* End edu update */



/* Start ID functions */


if(isset($_POST['idforid']))
{
            $name = $_FILES['idfile']['name']; $tmp_name = $_FILES['idfile']['tmp_name'];
            $type = $_FILES['idfile']['type']; $size = $_FILES['idfile']['size']; $error = $_FILES['idfile']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $idfile = $file_name; } else {  $idfile = '' ; }

    $result = rid_update(trim($_POST['idforid']),trim($_POST['expire']),trim($_POST['nationality']),trim($_POST['city']),trim($_POST['gender']),trim($_POST['mstatus']),trim($idfile));
                               
                                 if($result)
                                 { 
                                     header("Location: ?idnumber=".$_POST['idnumber']."&idupdated=done ");
                                 }else{ 
                                     die('Update Failure');
                                     }  
                                 die();   
}
    /* End ID functions */
    
    

/* Start traning functions */
if(isset($_GET['traindel']))
{
//die($_GET['del']);
            $_del = (int)$_GET['traindel'];
            if($_del == 0)
                die('Bad Access 2');

             $resultd = rtraining_delete($_del);
             tinyf_db_close();
             if($resultd){
                      header("Location: ?traindelsuccess=del&idnumber=".$_GET['idnumber']."");
                   //die('Success');
             }else {
                      die('Failure delete');
                  }
              die();
}

if(isset($_POST['trainname']) && !isset($_POST['id']))
{  
    $idnumber = trim($_POST['idnumber']);
    $trainname = trim($_POST['trainname']) ;
    $cnamechek = rtraining_get_by_idnumberandtranname($idnumber,$trainname);
    if ($cnamechek){
       header("Location: ?idnumber=".$_POST['idnumber']."&trainadderror=erroe ");
       die();
    }else{
            $name = $_FILES['trainfile']['name']; $tmp_name = $_FILES['trainfile']['tmp_name'];
            $type = $_FILES['trainfile']['type']; $size = $_FILES['trainfile']['size']; $error = $_FILES['trainfile']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $trainfile = $file_name; } else {  $trainfile = '' ; }
            
            date_default_timezone_set("Asia/Riyadh");
            $datedif = $_POST['traindate'] ;
            $date1 = substr($datedif,0,10);
            $date2 = substr($datedif,-10);
            $datetime1 = new DateTime($date1);
            $datetime2 = new DateTime($date2);
            $interval55 = $datetime1->diff($datetime2);
            echo '<br>'.$interval55->format('%a days');
            //echo '<br>'.$interval55->date("U");
            //echo '<br>'.$interval55->format(date("U"));
            //echo '<br>'.$interval55->format('%y years %m months and %d days');
            $t2days = $interval55->format('%a');
                       
            $resulttrain =  rtraining_add(trim($idnumber),trim($_POST['trainname']),trim($_POST['inname']),trim($_POST['traindate']),$t2days,trim($trainfile));

                                 if($resulttrain)
                                 { 
                                     header("Location: ?idnumber=".$_POST['idnumber']."&trainaddsuccess=done ");
                                 }else{ 
                                     die('Tranning Adding Error');
                                     }
                                     
    }
    
}

if(isset($_POST['traindate']) && isset($_POST['id'])){
            $name = $_FILES['trainfile']['name']; $tmp_name = $_FILES['trainfile']['tmp_name'];
            $type = $_FILES['trainfile']['type']; $size = $_FILES['trainfile']['size']; $error = $_FILES['trainfile']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $trainfile = $file_name; } else {  $trainfile = '' ; }
            
            date_default_timezone_set("Asia/Riyadh");
            $datedif = $_POST['traindate'] ;
            $date1 = substr($datedif,0,10);
            $date2 = substr($datedif,-10);

            $datetime1 = new DateTime($date1);
            $datetime2 = new DateTime($date2);
            $interval55 = $datetime1->diff($datetime2);
            $t2days = $interval55->format('%a');
            
    $result1 = rtraining_update(trim($_POST['id']),trim($_POST['inname']),trim($_POST['traindate']),trim($trainfile),$t2days);
       if($result1){
       header("Location: ?idnumber=".$_GET['idnumber']."&trainupdatesuccess=done ");
       }else{
        die('updating Error');
       }
}
    /* End traning functions */
    
    /* Start experiences functions */
if(isset($_GET['experiencedel']))
{
//die($_GET['del']);
            $_del = (int)$_GET['experiencedel'];
            if($_del == 0)
                die('Bad Access 2');

             $resultd = rexperiences_delete($_del);
             tinyf_db_close();
             if($resultd){
                      header("Location: ?edelsuccess=del&idnumber=".$_GET['idnumber']."");
                   //die('Success');
             }else {
                      die('Failure delete');
                  }
              die();
}

if(isset($_POST['companyname']) && !isset($_POST['id']))
{  
    $idnumber = trim($_POST['idnumber']);
    $date = trim($_POST['edate']) ;
    $datecheck =  rexperiences_get_by_idnumberanddate($idnumber,$date);
    if ($datecheck){
       header("Location: ?idnumber=".$_POST['idnumber']."&eadderror=erroe ");
       die();
    }else{
            $name = $_FILES['efile']['name']; $tmp_name = $_FILES['efile']['tmp_name'];
            $type = $_FILES['efile']['type']; $size = $_FILES['efile']['size']; $error = $_FILES['efile']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $efile = $file_name; } else {  $efile = '' ; }
            
            date_default_timezone_set("Asia/Riyadh");
            $datedif = $_POST['edate'] ;
            $date1 = substr($datedif,0,10);
            $date2 = substr($datedif,-10);
            $datetime1 = new DateTime($date1);
            $datetime2 = new DateTime($date2);
            $interval55 = $datetime1->diff($datetime2);
            //echo '<br>'.$interval55->format('%a days');
            //echo '<br>'.$interval55->date("U");
            //echo '<br>'.$interval55->format(date("U"));
            //echo '<br>'.$interval55->format('%y years %m months and %d days');
            $t2days = $interval55->format('%a');
            
            
                       
            $resulttrain =  rexperiences_add(trim($idnumber),trim($_POST['edate']),$t2days,trim($_POST['location']),trim($_POST['companyname']),trim($_POST['csize']),trim($_POST['position']),trim($_POST['cindustry']),trim($_POST['workdesc']),trim($efile));

                                 if($resulttrain)
                                 { 
                                     header("Location: ?idnumber=".$_POST['idnumber']."&eaddsuccess=done ");
                                 }else{ 
                                     die('experiences Adding Error');
                                     }
                                     
    }
    
}

if(isset($_POST['companyname']) && isset($_POST['id'])){
            $name = $_FILES['efile']['name']; $tmp_name = $_FILES['efile']['tmp_name'];
            $type = $_FILES['efile']['type']; $size = $_FILES['efile']['size']; $error = $_FILES['efile']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $trainfile = $file_name; } else {  $trainfile = '' ; }
            
            date_default_timezone_set("Asia/Riyadh");
            $datedif = $_POST['edate'] ;
            $date1 = substr($datedif,0,10);
            $date2 = substr($datedif,-10);
            $datetime1 = new DateTime($date1);
            $datetime2 = new DateTime($date2);
            $interval55 = $datetime1->diff($datetime2);
            $t2days = $interval55->format('%a');
            
    $result1 = rexperiences_update(trim($_POST['id']),trim($_POST['edate']),$t2days,trim($_POST['location']),trim($_POST['companyname']),trim($_POST['csize']),trim($_POST['position']),trim($_POST['cindustry']),trim($_POST['workdesc']),trim($efile));
       if($result1){
       header("Location: ?idnumber=".$_GET['idnumber']."&eupdatesuccess=done ");
       }else{
        die('updating Error');
       }
}
    /* End experiences functions */
    
    
// certification functions
if(isset($_GET['cdel']))
{
//die($_GET['del']);
            $_del = (int)$_GET['cdel'];
            if($_del == 0)
                die('Bad Access 2');

             $resultd = rcertifications_delete($_del);
             tinyf_db_close();
             if($resultd){
                      header("Location: ?cdelsuccess=del&idnumber=".$_GET['idnumber']."");
                   //die('Success');
             }else {
                      die('Failure delete');
                  }
              die();
}

if(isset($_POST['cname']) && !isset($_POST['id']))
{  
    $idnumber = trim($_POST['idnumber']);
    $cname = trim($_POST['cname']) ;
    $cnamechek = rcertifications_get_by_idnumberandcname($idnumber,$cname);
    if ($cnamechek){
       header("Location: ?idnumber=".$_POST['idnumber']."&cadderror=erroe ");
       die();
    }else{
            $name = $_FILES['file']['name']; $tmp_name = $_FILES['file']['tmp_name'];
            $type = $_FILES['file']['type']; $size = $_FILES['file']['size']; $error = $_FILES['file']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $cfile = $file_name; } else {  $cfile = '' ; }
            $result2 =  rcertifications_add(trim($rapp->idnumber),trim($_POST['cname']),trim($_POST['cdate']),trim($cfile));

                                 if($result2)
                                 { 
                                     header("Location: ?idnumber=".$_POST['idnumber']."&caddsuccess=done ");
                                 }else{ 
                                     die('Adding Error');
                                     }                           
    }
 
}
if(isset($_POST['cdate']) && isset($_POST['id'])){
            $name = $_FILES['file']['name']; $tmp_name = $_FILES['file']['tmp_name'];
            $type = $_FILES['file']['type']; $size = $_FILES['file']['size']; $error = $_FILES['file']['error'];
            $idnumber = trim($_POST['idnumber']);$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $cfile = $file_name; } else {  $cfile = '' ; }
    $result1 = rcertifications_update(trim($_POST['id']),trim($_POST['cdate']),trim($cfile));
       if($result1){
       header("Location: ?idnumber=".$_GET['idnumber']."&cupdatesuccess=done ");
       }else{
        die('updating Error');
       }
}

tinyf_db_close();

// End certification functions

?>



<!DOCTYPE html>



<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
        
    <head>
        <meta charset="utf-8" />
        <title>صفحة المتقدم</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        
          <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/profile-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
         <?php $acuprofile="active" ?>
         <?php require_once ("require/bheader.php") ; ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container-fluid">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1 class="theme-font">صفحة المتقدم
                                <small></small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <?php  require_once ("require/themepanel.php") ; ?>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                          
                            <li>
                                <span>صفحة المتقدم</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PROFILE SIDEBAR -->
                                    <div class="profile-sidebar">
                                         <div class="portlet light">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart theme-font hide"></i>
                                                    
                                                    <?php if($rapp->approval == "Candidate"){
                                                          $approvalc = "<span class='label label-sm label-success'>مرشح </span>" ;
                                                      }
                                                      if($rapp->approval == "Excluded"){
                                                          $approvalc = "<span class='label label-sm label-danger'> مستبعد </span>" ;
                                                      }
                                                      if($rapp->approval == ""){
                                                          $approvalc = "<span class='label label-sm label-warning'> جديد </span>" ;
                                                      }?>
                                                <span class="caption-helper uppercase">الحالة  </span>
                                                <span class="caption-subject theme-font bold uppercase"><?php echo $approvalc ; ?></span>
                                                </div>
                                                <div class="actions">
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                               
                                                    <span class="caption-helper uppercase">الرقم المرجعي  </span>
                                                    <span class="caption-subject theme-font bold uppercase"><?php echo $rapp->rno ; ?></span>
                                                    <br/>
                                                    <span class="caption-helper uppercase">متقدم إلى   </span>
                                                    <span class="caption-subject theme-font bold uppercase"><?php echo $arjobname->jobname ; ?></span><br/>
                                                    <span class="caption-helper uppercase">   تاريخ التقديم  </span>
                                                    <span class="caption-subject theme-font bold uppercase"><?php echo $rapp->experience  ; ?></span>
                                                    <br/>
                                               
                                                
                                            </div>    
                                        </div>   
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light profile-sidebar-portlet ">
                                            <!-- SIDEBAR USERPIC -->
                                            <div class="profile-userpic">
                                               <!-- <img src="../assets/pages/media/profi2le/profile_user.jpg" class="img-responsive" alt=""> </div>-->
                                                  <!-- <a href="<?php if( empty($rinfo->picatt) ) { echo 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png' ; }else{echo '../../en/careers/file/'.$rinfo->picatt;} ?>">-->
                                                      <img src="<?php if( empty($rinfo->picatt) ) { echo 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png' ; }else{echo '../../en/careers/file/'.$rinfo->picatt;} ?>" class="img-responsive " alt="" />
                                                   <!--    </a>-->
                                                  
                                            </div>
                                            <!-- END SIDEBAR USERPIC -->
                                            <!-- SIDEBAR USER TITLE -->
                                            <div class="profile-usertitle">
                                                <div class="profile-usertitle-name"> <?php echo $rapp->efullname ; ?></div>
                                                <div class="profile-usertitle-name"> <?php echo $rapp->afullname ; ?></div>
                                                <div class="profile-usertitle-job"> <?php echo $reducation->major ; ?> </div>
                                            <!--    <div class="profile-usertitle-job"> Developer </div>-->
                                            </div>
                                            <!-- END SIDEBAR USER TITLE -->
                                             <div class="portlet light ">
                                               
                                                 <div class="margin-top-20 bold font-blue-hoki profile-desc-link">
                                                        <i class="icon-envelope"></i>
                                                        <?php echo $rapp->email ; ?>
                                                    </div>
                                                    <div class="margin-top-20 bold font-blue-hoki profile-desc-link">
                                                        <i class="icon-screen-smartphone"></i>
                                                       <?php echo  $rapp->mobile ; ?> 
                                                    </div>
                                                     <div class="margin-top-20 profile-desc-link ">
                                                    <i class="fa fa-file-pdf-o"></i>
                                                    
                                                      <?php if( $reducation->cvatt != null)
                                                          echo " <a href='../../en/careers/file/$reducation->cvatt' target='_blank' class='primary-link'>CV Link</a>";
                                                          else {
                                                              echo "<a  data-toggle='modal' href='#cv_modal' >أضف السيرة الذاتية  </a>";
                                                                }
                                                      ?>
                                                  
                                                </div>
                                                   <div class="margin-top-20 timeline-body-head-actions text-right">
                                                                            <div class="btn-group">
                                                                                <button class="btn btn-circle red btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> تعديل
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                                    <li>
                                                                                        <a  data-toggle="modal" href="#pic_modal" > تحديث الصورة  </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a  data-toggle="modal" href="#cv_modal" > تحديث السيرة الذاتية  </a>
                                                                                    </li>
                                                                                  
                                                                                    <li class="divider"> </li>
                                                                                    <li>
                                                                                        <a data-toggle="modal" href="#mail_modal">تحديث الإيميل و الجوال  </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                </div>
                                            <!-- SIDEBAR BUTTONS -->
                                        
                                         
                                            <!-- END SIDEBAR BUTTONS -->
                                            <!-- SIDEBAR MENU -->
                                        
                                            <!-- END MENU -->
                                            
                                            
                                             <!-- START PIC EDIT -->
                                         <?php  // include_once('require/modals.php'); ?>
                                             <!-- END PIC EDIT  -->
                                               <!-- START CV EDIT  -->
                                                <?php  // include_once('require/modals.php'); ?>
                                             <!-- END CV EDIT  -->
                                            
                                            
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                     
                                                <!-- BEGIN PORTLET -->
                                                <div class="portlet light ">
                                                    <div class="portlet-title tabbable-line">
                                                        <div class="caption caption-md">
                                                            <i class="icon-globe theme-font hide"></i>
                                                            <span class="caption-subject theme-font bold uppercase"> معلومات عامة </span>
                                                        </div>
                                                         <div class="actions">
                                                            
                                                          
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#tab_1_11" data-toggle="tab"> الهوية </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_22" data-toggle="tab"> العنوان </a>
                                                            </li>
                                                        </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="portlet-body">
                                                         <div data-handle-color="#D7DCE2">
                                                            
                                                        <!--BEGIN TABS-->
                                                        <div class="tab-content">
                                                                    <div class="tab-pane active" id="tab_1_11">
                                                                        
                                                                        
                                                                        <?php  if(isset($_GET['idupdated'])){echo ' <div class="alert alert-success ">
                                                                        <button class="close" data-close="alert"></button><strong> تم تحديث معلومات الهوية الوطنية بنجاح 
                                                                        </strong>  </div>';}?>
                                                                
                                                                        <?php  if(isset($_GET['rinfoupdatesuccess'])){echo ' <div class="alert alert-success ">
                                                                        <button class="close" data-close="alert"></button><strong> تم تحديث العنوان بنجاح </strong> </div>';}?>
                                                                    
                                                                        <div class="well margin-top-20" data-handle-color="#D7DCE2">
                                                                            
                                                                              
                                                                            <div class="actions margin-bottom-20">
                                                                               <!-- <a href="javascript:;" class="btn btn-circle btn-default theme-font"><i class="fa fa-plus"></i> Add </a>-->
                                                                                <a data-toggle="modal" href="#idedit_modal" class="btn btn-circle red-sunglo btn-sm">
                                                                                    <i class="fa fa-pencil"></i> تحديث </a>
                                                                   
                                                                            </div>
                                                                            <div class="profile-pic ">
                                                                                
                                                                                <a href="<?php if( empty($rid->idatt) ) { echo 'http://www.myimprov.com/wp-content/uploads/2015/05/drivers-license.jpg' ; }else{echo '../../en/careers/file/'.$rid->idatt;} ?>"><img src="<?php if( empty($rid->idatt) ) { echo 'http://www.myimprov.com/wp-content/uploads/2015/05/drivers-license.jpg' ; }else{echo '../../en/careers/file/'.$rid->idatt;} ?>" class="img-responsive pic-bordered" alt="" /></a>
                                                                            </div>   
                                                                            
                                                                                <div class="table-scrollable table-scrollable-borderless">
                                                                                    <table class="table table-hover table-light">
                                                                                      
                                                                                        <tr>
                                                                                            <td class="bold"> رقم الهوية </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->idnumber ; ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="bold"> تاريخ الانتهاء </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->expire ; ?></td>
                                                                                        </tr>
                                                                                         <tr>
                                                                                            <td class="bold"> الجنسية </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->nationality ; ?></td>
                                                                                        </tr>
                                                                                         <tr>
                                                                                            <td class="bold"> المدينة </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->city ; ?></td>
                                                                                        </tr>
                                                                                         <tr>
                                                                                            <td class="bold"> الجنس </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->gender ; ?></td>
                                                                                        </tr>
                                                                                         <tr>
                                                                                            <td class="bold"> الحالة الاجتماعية </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->mstatus ; ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="bold"> العمر </td>
                                                                                            
                                                                                                <?php
                                                                                                    $bd = $rapp->birthd ;
                                                                                                    $nd = Date('d-m-Y') ;
                                                                                                    $datetime1 = new DateTime($bd);
                                                                                                    $datetime2 = new DateTime($nd);
                                                                                                    $interval55 = $datetime1->diff($datetime2);
                                                                                                    $age = $interval55->format('%y سنة %m شهر');
                                                                                                ?>
                                                                                            <td class="bold theme-font"><?php echo $age ; ?></td>
                                                                                        </tr>
                                                                                       
                                                                                    </table>
                                                                                </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                <div class="tab-pane" id="tab_1_22">
                                                                    <div class="scroller" style="height: 320px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">   
                                                                      <div class="actions margin-bottom-20">
                                                                               <!-- <a href="javascript:;" class="btn btn-circle btn-default theme-font"><i class="fa fa-plus"></i> Add </a>-->
                                                                                <a data-toggle="modal" href="#addressedit_modal" class="btn btn-circle red-sunglo btn-sm">
                                                                                    <i class="fa fa-pencil"></i> تحديث </a>
                                                                            </div>
                                                                    <div class="well">
                                                                        <address>
                                                                            <strong>العنوان</strong>
                                                                            <?php echo $rinfo->address ; ?>
                                                                            <br><abbr title="Phone">P:</abbr> <?php echo  $rapp->mobile ; ?>  </address>
                                                                        <address>
                                                                            <strong>الرمز البريدي و صندوق البريد</strong>
                                                                            <br/>
                                                                            <a href="mailto:#"> </a>
                                                                            <?php echo $rinfo->zipcode ; ?>, <?php echo $rinfo->pobox ; ?>
                                                                        </address>
                                                                    </div>
                                                                   
                                                                    <div class="margin-top-20 profile-desc-link">
                                                                        <i class="fa fa-twitter"></i>
                                                                         <?php if( $rinfo->twitter != null)
                                                          echo " <a href='$rinfo->twitter' >Twitter Link</a>";
                                                          else {
                                                              echo "<a  data-toggle='modal' href='#addressedit_modal' >أضف رابط حسابك في تويتر  </a>";
                                                                }
                                                      ?>
                                                                       
                                                                    </div>
                                                                    <div class="margin-top-20 profile-desc-link">
                                                                        <i class="fa fa-facebook"></i>
                                                                        <?php if( $rinfo->facebook != null)
                                                          echo " <a href='$rinfo->facebook' >Facebook Link</a>";
                                                          else {
                                                              echo "<a  data-toggle='modal' href='#addressedit_modal' >أضف رابط حسابك في الفيسبوك </a>";
                                                                }
                                                      ?>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--END TABS-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END PORTLET -->
                                                                
                                         <!-- PORTLET MAIN -->
                                        <!--<div class="portlet light ">
                                            <!-- STAT -->
                                         <!--   <div class="row list-separated profile-stat">
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> 37 </div>
                                                    <div class="uppercase profile-stat-text"> Projects </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> 51 </div>
                                                    <div class="uppercase profile-stat-text"> Tasks </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                    <div class="uppercase profile-stat-title"> 61 </div>
                                                    <div class="uppercase profile-stat-text"> Uploads </div>
                                                </div>
                                            </div> 
                                            <!-- END STAT -->
                                            
                                        <!--    <div>
                                                <h4 class="profile-desc-title">About Marcus Doe</h4>
                                                <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-globe"></i>
                                                    <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                                                </div>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-twitter"></i>
                                                    <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                                                </div>
                                                <div class="margin-top-20 profile-desc-link">
                                                    <i class="fa fa-facebook"></i>
                                                    <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                                                </div>
                                            </div>
                                        </div> 
                                        <!-- END PORTLET MAIN -->
                                         
                                    </div>
                                    <!-- END BEGIN PROFILE SIDEBAR -->
                                    <!-- BEGIN PROFILE CONTENT -->
                                    <div class="profile-content">
                                        
                                        <div class="row">
                                             <div class="col-md-6">
                                                <!-- BEGIN PORTLET -->
                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption caption-md">
                                                            <i class="icon-bar-chart theme-font hide"></i>
                                                            <span class="caption-subject theme-font bold uppercase">التعليم </span>
                                                            <span class="caption-helper hide">weekly stats...</span>
                                                        </div>
                                                        <div class="actions">
                                                           
                                                            <!--<a class="btn green btn-outline sbold" data-toggle="modal" href="#edu_modal"> View Demo </a>-->
                                                            <a data-toggle="modal" href="#edu_modal" class="btn btn-circle red-sunglo">
                                                                <i class="fa fa-pencil"></i> تعديل </a>
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                            <div class="table-scrollable table-scrollable-borderless">
                                                                <table class="table table-hover table-light">
                                                                   
                                                                    <tr>
                                                                        <td class="primary-link bold"> اسم الجامعة </td>
                                                                        <td class="bold theme-font">  <?php echo $reducation->eduname ;?> </td>
                                                                        <td class="primary-link bold"> الدرجة العلمية </td>
                                                                        <td class="bold theme-font">  <?php echo $reducation->degree ;?> </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="primary-link bold"> التخصص </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->major ;?> </td>
                                                                        <td class="primary-link bold"> المعدل </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->grade ;?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="primary-link bold"> الدولة </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->educuntry ;?> </td>
                                                                        <td class="primary-link bold"> المدينة </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->educity ;?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="primary-link bold"> تاريخ التخرج </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->edudate ;?> </td>
                                                                       
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="primary-link bold"> الشهادة </td>
                                                                        <td>
                                                                             <?php if( $reducation->ceratt != null)
                                                                                  echo "<a href='../../en/careers/file/$reducation->ceratt' class='primary-link'>Link</a>";
                                                                                  else {
                                                                                       echo "<a  data-toggle='modal' href='#edu_modal' >أضف الشهادة الجامعية  </a>";
                                                                                  }?>
                                                                        </td>
                                                                        <td class="primary-link bold">السجل الأكاديمي  </td>
                                                                        <td>
                                                                            <?php if( $reducation->traatt != null)
                                                                                  echo " <a href='../../en/careers/file/$reducation->traatt' class='primary-link'>tLink</a>";
                                                                                  else {
                                                                                      echo "<a  data-toggle='modal' href='#edu_modal' >أضف السجل الأكاديمي  </a>";
                                                                                  }?>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                  <!-- START EDU EDIT FORM -->
                                              <?php  // include_once('require/modals.php'); ?>
                                                  <!-- END EDU EDIT FORM -->
                                             
                                             
                                                <!-- END PORTLET -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- BEGIN PORTLET -->
                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption caption-md">
                                                            <i class="icon-bar-chart theme-font hide"></i>
                                                            <span class="caption-subject theme-font bold uppercase">التدريب </span>
                                                            
                                                             <?php 
                                                                          $idnumber = trim($_GET['idnumber']);
                                                                          $rtrainingsum = rtraining_get_sum("WHERE `idnumber` = '$idnumber' ");
                                                                          $trcountsum = @count($rtrainingsum);
                                                                          for($i = 0 ; $i < $trcountsum; $i++)
                                                                          {
                                                                              $user = $rtrainingsum[$i]; 
                                                                             // echo "<th>". $user->sum ."</th>";
                                                                             	
                                                                                    $No = $user->sum ;

                                                                                      $Y = (int)($No / '360');
                                                                                      $M = (int)(($No - ((int)($No / 360) * 360)) / 30);
                                                                                      $D = $No - (($Y * 360) + ($M * 30));
                                                                                    $D2YMD = $Y . " years " . $M . " months " . $D . " days" ;
                                                                              //  echo "<span class='caption-helper'>". $D2YMD ."</span>";     
                                                                              } ?>
                                                        </div>
                                                        <div class="actions">
                                                           <!-- <a href="javascript:;" class="btn btn-circle btn-default theme-font"><i class="fa fa-plus"></i> Add </a>-->
                                                            <a class="btn green btn-circle btn-outline sbold" data-toggle="modal" href="#addtran_modal"><i class="fa fa-plus"></i> إضافة دورة تدريبية </a>
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <?php  if(isset($_GET['trainaddsuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong>تم إضافة دورة تدريبية جديدة بنجاح  </strong> </div>';}
                                                           if(isset($_GET['trainupdatesuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong>تم تحديث الدورة التدريبية بنجاح ! </strong>  </div>';}
                                                           if(isset($_GET['traindelsuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong> تم حذف الدورة التدريبية بنجاح </strong>  </div>';}
                                                         if(isset($_GET['trainadderror'])){echo ' <div class="alert alert-danger ">
                                                         <button class="close" data-close="alert"></button><strong>هذه الدورة التدريبية مضافة في الجدول  </strong></div>';}?>
                                                        <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                            <div class="table-scrollable table-scrollable-borderless">
                                                                <?php      
                                                                    $idnumber = trim($_GET['idnumber']);
                                                                    $rtraining = rtraining_get("WHERE `idnumber` = '$idnumber' ORDER BY `id` ASC");
                                                                    if($rtraining == NULL)
                                                                          echo ('');
                                                                    $trcount = @count($rtraining);
                                                                    if($trcount == 0)
                                                                          echo ('');
                                                                          
                                                                ?>
                                                                <table class="table table-hover table-light">
                                                                    <thead>
                                                                        <tr class="uppercase">
                                                                            <th> اسم الدورة التدريبية </th>
                                                                            <th> اسم المعهد </th>
                                                                            <th> التاريخ </th>
                                                                            <th> الشهادة </th>
                                                                            <th> </th>
                                                                         
                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                    <?php
                                                                          for($i = 0 ; $i < $trcount; $i++)
                                                                          {
                                                                              $user = $rtraining[$i];
                                                    
                                                                              
                                                                            echo  "<tr> <td class=\"bold theme-font\"> $user->title </td>
                                                                                        <td> $user->institute </td>
                                                                                        <td>$user->date</td> ";
                                                                                            
                                                                                             if($user->tatt != null)
                                                                                  echo "<td> <a href='../../en/careers/file/$user->tatt'>Link</a></td>";
                                                                                  else {
                                                                                      echo "<td> </td>";
                                                                                  }
                                                                                        
                                                                
                                                                     echo "<td> <span class='label'><a class=\"edit \" data-toggle=\"modal\" href=\"#trainedit_modal".$user->id."\"><span class='label label-sm label-success  btn-circle btn green btn-sm'><i class='fa fa-edit'></i></span></a>
                                                                   <a class=\"delete1 \" href=\"?traindel=$user->id&idnumber=$user->idnumber&5945\" onclick=\"return confirm('Are you sure to delete ($user->title) Certification  ?')\"> <span class='label label-sm label-success btn red btn-sm'> <i class='fa fa-trash'></i></span> </a></span>  </td>
                                                             "; ?>
                                                                                        
                                                                                <!-- START traning Edit FORM -->
                                                                                           
                                                                                     <div id="trainedit_modal<?php echo  @$user->id ; ?>" class="modal fade" role="dialog" aria-hidden="true">
                                                                                         <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                                                    <h4 class="modal-title">تعديل </h4>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                                                                         <div class="form-group">
                                                                                                            <label class="control-label col-md-4">اسم الدورة التدريبية </label>
                                                                                                            <div class="col-md-7">
                                                                                                                <input disabled type="text" class="form-control" name="trainname" value="<?php echo $user->title ; ?>" />
                                                                                                                <span class="help-block"><p></p> </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group">
                                                                                                            <label class="control-label col-md-4">اسم المعهد </label>
                                                                                                            <div class="col-md-7">
                                                                                                                <input type="text" class="form-control" name="inname" value="<?php echo $user->institute ; ?>"  />
                                                                                                                <span class="help-block"><p></p> </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                                        
                                                                                                                        
                                                                                                                        
                                                                                                                         <div class="form-group">
                                                                                                                            <label class="control-label col-md-4">تاريخ التدريب </label>
                                                                                                                            <div class="col-md-7">
                                                                                                                                <div class="input-group date defaultrange_modal" data-date-format="dd-mm-yyyy">
                                                                                                                                    <input required type="text" autocomplete="off" class="readonly form-control"  name="traindate" value="<?php echo  @$user->date ; ?>"  /> 
                                                                                                                                    <span class="input-group-btn">
                                                                                                                                        <button class="btn default date-range-toggle" type="button">
                                                                                                                                            <i class="fa fa-calendar"></i>
                                                                                                                                        </button>
                                                                                                                                    </span>
                                                                                                                                </div>
                                                                                                                                <!-- /input-group -->
                                                                                                                                <span class="help-block"> اختر التاريخ </span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        
                                                    
                                                    
                                                                                                    
                                                                                                       
                                                                                                        <input type="hidden" name="idnumber" class="form-control" value="<?php echo  $user->idnumber ; ?>" />    
                                                                                                        <input type="hidden" name="id" class="form-control" value="<?php echo  @$user->id  ; ?>" /> 
                                                                                                                 <div class="form-group">
                                                                                                                    <label class="control-label col-md-4">الشهادة </label>
                                                                                                                    <div class="col-md-7">
                                                                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                                                            <span class="btn green btn-file">
                                                                                                                                <span class="fileinput-new"> اختر الملف </span>
                                                                                                                                <span class="fileinput-exists"> تغيير </span>
                                                                                                                                <input type="file" name="trainfile"> </span>
                                                                                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                                                                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                        <div class="form-actions">
                                                                                                            <div class="row">
                                                                                                                <div class="col-md-offset-8 col-md-9">
                                                                                                                    <button type="submit" class="btn green btn-primary"> إرسال </button>
                                                                                                                    <button type="button" data-dismiss="modal" class="btn default" aria-hidden="true">إلغاء </button>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                     
                                                                                <!-- END traning Edit FORM -->
                                                                                
                                                                          <?php echo  "</tr>"; }  ?>
                                                                       
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END PORTLET -->
                                            </div>
                                            
                                            
                                              <!-- START traning ADD FORM -->
                                               <?php  //include_once('require/modals.php'); ?>
                                              <!-- END traning ADD FORM -->
                                            
                                            
                                            
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-microphone theme-font"></i>
                                                            <span class="caption-subject bold theme-font uppercase"> الخبرة العملية </span>
                                                             <?php 
                                                                          $rexperiences = rexperiences_get_sum("WHERE `idnumber` = '$idnumber' ");
                                                                          $trcountsum = @count($rexperiences);
                                                                          for($i = 0 ; $i < $trcountsum; $i++)
                                                                          {
                                                                              $user = $rexperiences[$i]; 
                                                                              
                                                                              
                                                                                    $No = $user->sum ;

                                                                                      $Y = (int)($No / '360');
                                                                                      $M = (int)(($No - ((int)($No / 360) * 360)) / 30);
                                                                                      $D = $No - (($Y * 360) + ($M * 30));
                                                                                    $D2YMD = $Y . " سنة " . $M . " شهر " . $D . " يوم " ;
                                                                                    
                                                                              echo "<span class='caption-helper'>". $D2YMD ."</span>";
                                                                          } ?>
                                                            
                                                        </div>
                                                        <div class="actions">
                                                            
                                                            <a class="btn btn-circle green btn-outline sbold btn-sm " data-toggle="modal" href="#adde_modal"><i class="fa fa-plus"></i> جديد </a>
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <?php  if(isset($_GET['eaddsuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong>تم إضافة الخبرة بنجاح  </strong>  </div>';}
                                                           if(isset($_GET['eupdatesuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong> تم تحديث الخبرة بنجاح </strong>  </div>';}
                                                           if(isset($_GET['edelsuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong> تم حذف الخبرة بنجاح </strong>  </div>';}
                                                         if(isset($_GET['eadderror'])){echo ' <div class="alert alert-danger ">
                                                         <button class="close" data-close="alert"></button><strong>هذه الخبرة موجودة مسبقا  </strong> </div>';}?>
                                                         
                                                        <div class="timeline">
                                                            
                                                             <?php      
                                                                    $idnumber = trim($_GET['idnumber']);
                                                                    $rexperiences = rexperiences_get("WHERE `idnumber` = '$idnumber' ORDER BY `date` ASC");
                                                                    if($rexperiences == NULL)
                                                                          echo ('');
                                                                    $trcount = @count($rexperiences);
                                                                    if($trcount == 0)
                                                                          echo ('');
                                                                          
                                                                ?>
                                                                <?php
                                                                          for($i = 0 ; $i < $trcount; $i++)
                                                                          {
                                                                              $user = $rexperiences[$i];
                                                                 ?>
                                                            
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <div class="timeline-icon">
                                                                        <i class="icon-note font-green-haze"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <a href="javascript:;" class="timeline-body-title font-blue-madison"><?php echo $user->cname ; ?></a>
                                                                            <span class="timeline-body-time font-grey-cascade"> <?php echo $user->date ; ?></span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions">
                                                                            <div class="btn-group">
                                                                                <button class="btn btn-circle green btn-outline btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> تعديل
                                                                                    <i class="fa fa-angle-down"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu pull-right" role="menu">
                                                                                    <li>
                                                                                        <a data-toggle="modal" href="#edite_modal<?php echo $user->id ; ?> ">تعديل </a>
                                                                                    </li>
                                                                                    <li class="divider"> </li>
                                                                                    <li>
                                                                                       <a class="delete1" href="?experiencedel=<?php echo $user->id ; ?>&idnumber=<?php echo $user->idnumber ; ?>&5945" onclick="return confirm('Are you sure to delete (<?php echo $user->cname ; ?>) experience  ?')"> حذف </a>
                                                                                    </li>
                                                                                    
                                                                                 
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="margin-top-40 timeline-body-content">
                                                                       
                                                                                <span class="font-grey-cascade"> <?php echo $user->workdesc ; ?> </span>
                                                                         <div class="table-scrollable table-scrollable-borderless">
                                                                            <table class="table table-hover table-light">
                                                                             
                                                                                <tr>
                                                                                    <td  class="bold"> المسمى الوظيفي </td>
                                                                                    <td class=" bold theme-font"> <?php echo $user->position ; ?> </td>
                                                                                    <td class="bold"> الموقع </td>
                                                                                    <td class="bold theme-font"><?php echo $user->location ; ?> </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td  class="bold"> حجم الشركة </td>
                                                                                    <td class="bold theme-font"> <?php echo $user->csize ; ?> </td>
                                                                                    <td class="bold"> المجال  </td>
                                                                                    <td class="bold theme-font"> <?php echo $user->cindustry ; ?> </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td  class="bold"> مدة الخبرة </td>
                                                                                    <?php	
                                                                                    $No = $user->days ;

                                                                                      $Y = (int)($No / '360');
                                                                                      $M = (int)(($No - ((int)($No / 360) * 360)) / 30);
                                                                                      $D = $No - (($Y * 360) + ($M * 30));
                                                                                    $D2YMD = $Y . " سنة " . $M . " شهر " . $D . " يوم " ;
                                                                                    ?>
                                                                                  
                                                                                    <td class="bold theme-font"> <?php echo $D2YMD ; ?> </td>
                                                                                    <td  class="bold"> شهادة الخبرة </td>
                                                                                    <td class="bold theme-font"> 
                                                                                    <?php
                                                                                     if($user->eatt != null)
                                                                                                  echo "<a href='../../en/careers/file/$user->eatt'> رابط </a></td>";
                                                                                                  else {
                                                                                                      echo "<td> </td>";
                                                                                                  }
                                                                                                  ?>
                                                                                                 
                                                                                    
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                            <!-- START experiences ADD FORM -->
    <div id="edite_modal<?php echo $user->id ; ?>" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">EDIT experience</h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                        
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">اسم الشركة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="companyname" value="<?php echo $user->cname ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                    <label class="control-label col-md-4">التاريخ </label>
                                   
                                     <div class="col-md-7">
                                       <div class="input-group defaultrange_modal">
                                            <input readonly name="edate" type="text" class="form-control"  value="<?php echo $user->date ; ?>" >
                                            <span class="input-group-btn">
                                                <button class="btn default date-range-toggle" type="button">
                                                    <i class="fa fa-calendar"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4"> المسمى الوظيفي </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="position" value="<?php echo $user->position ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">المدينة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="location" value="<?php echo $user->location ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">حجم الشركة </label>
                                        <div class="col-md-7">
                                           
                                             <select name="csize" class="form-control">
                                                <option value="<?php echo $user->csize ; ?>"><?php echo $user->csize ; ?></option>
                                                <option value="-100 Staff">-100 موظف</option>
                                                <option value="100 to 1000 Staff">100 الى 1000 موظف</option>
                                                <option value="1000 to 2000 Staff">1000 الى 2000 موظف</option>
                                                <option value="2000 to 5000 Staff">2000 الى 5000 موظف</option>
                                                <option value="+5000 Staff">+5000 موظف</option>
                                            </select>
                                            <span class="help-block"> </span>
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">مجال الشركة </label>
                                        <div class="col-md-7">
                                            <input type="text" class="form-control" name="cindustry" value="<?php echo $user->cindustry ; ?>" />
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                                 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">وصف العمل </label>
                                        <div class="col-md-7">
                                            <textarea type="text" class="form-control" name="workdesc" value="<?php echo $user->workdesc ; ?>" ><?php echo $user->workdesc ; ?></textarea>
                                            <span class="help-block"> </span>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label col-md-4">شهادة الخبرة </label>
                                        <div class="col-md-7">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <span class="btn green btn-file">
                                                    <span class="fileinput-new">اختر الملف  </span>
                                                    <span class="fileinput-exists"> تغيير  </span>
                                                    <input type="file" name="efile"> </span>
                                                <span class="fileinput-filename"> </span> &nbsp;
                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               
                               
                            
                     <input type="hidden" name="idnumber" class="form-control" value="<?php echo $user->idnumber ; ?>" />
                      <input type="hidden" name="id" class="form-control" value="<?php echo $user->id ; ?>" />
                        
                        
                            <div class="modal-footer">
                                <button type="submit" class="btn green btn-primary" >حفظ التغييرات </button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">إلغاء </button>
                            </div>
                                    
                       <!-- <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Submit</button>
                                    <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                </div>
                            </div>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- END experiences ADD FORM -->
                                                            <?php } ?>
                                                            
                                                            
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        
                                                    
                                                    
                                            <div class="col-md-6">
                                                <!-- BEGIN PORTLET -->
                                                <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption caption-md">
                                                            <i class="icon-bar-chart theme-font hide"></i>
                                                            <span class="caption-subject theme-font bold uppercase">الشهادات </span>
                                                           
                                                        </div>
                                                        <div class="actions">
                                                             <a class="btn green btn-circle btn-outline sbold" data-toggle="modal" href="#cadd_modal"><i class="fa fa-plus"></i> جديد </a>
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                          <?php  if(isset($_GET['caddsuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong> تم إضافة الشهادة بنجاح </strong>  </div>';}
                                                           if(isset($_GET['cupdatesuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong> تم تحديث الشهادة بنجاح  </strong>  </div>';}
                                                           if(isset($_GET['cdelsuccess'])){echo ' <div class="alert alert-success ">
                                                           <button class="close" data-close="alert"></button><strong> تم حذف الشهادة بنجاح  </strong></div>';}
                                                         if(isset($_GET['cadderror'])){echo ' <div class="alert alert-danger ">
                                                         <button class="close" data-close="alert"></button><strong>هذه الشهادة مضافة مسبقا  </strong> </div>';}?>
                                                        <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                            <div class="table-scrollable table-scrollable-borderless">
                                                                        <?php      
                                                                    $idnumber = trim($_GET['idnumber']);
                                                                    $rcertifications = rcertifications_get("WHERE `idnumber` = '$idnumber' ORDER BY `id` ASC");
                                                                    if($rcertifications == NULL)
                                                                      //  die ('problem');
                                                                          echo ('');
                                                                    $ucount = @count($rcertifications);
                                                                    if($ucount == 0)
                                                                          echo ('');
                                                                          
                                                                    ?>
                                                                    <table class="table table-hover table-light">
                                                                        <thead>
                                                                            <tr class="uppercase">
                                                                                
                                                                                <th> اسم الشهادة  </th>
                                                                                <th> التاريخ </th>
                                                                                <th> صورة الشهادة </th>
                                                                                <th>  </th>
                                                                            </tr>
                                                                        </thead>
                                                                        
                                                                        <?php
                                                              for($i = 0 ; $i < $ucount; $i++)
                                                              {
                                                                  $user = $rcertifications[$i];
                                        
                                                                  
                                                                echo  "<tr>   
                                                                      <td class='bold theme-font' > $user->cname   </td>
                                                                      <td> $user->cdate   </td>
                                                                      ";
                                                                      
                                                                      if($user->catt != null)
                                                                      echo "<td> <a href='../../en/careers/file/$user->catt'>Link</a></td>";
                                                                      else {
                                                                          echo "<td> </td>";
                                                                      }
                                                                      
                                                                      echo "<td> <span class='label'><a class=\"edit \" data-toggle=\"modal\" href=\"#cadd_modal".$user->id."\"><span class='label label-sm label-success  btn-circle btn green btn-sm'><i class='fa fa-edit'></i></span></a>
                                                                           <a class=\"delete1 \" href=\"?cdel=$user->id&idnumber=$user->idnumber&5945\" onclick=\"return confirm('Are you sure to delete ($user->cname) Certification  ?')\"> <span class='label label-sm label-success btn red btn-sm'> <i class='fa fa-trash'></i></span> </a></span>  </td>
                                                                     "; ?>
                                                                     
                                                                             <!-- Start Certification EDIT FORM -->
                                                                            <div id="cadd_modal<?php echo  @$user->id ; ?>" class="modal fade" role="dialog" aria-hidden="true">
                                                                                <div class="modal-dialog">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                                            <h4 class="modal-title">تحديث الشهادة </h4>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                                                                <div class="form-group">
                                                                                                    <label class="control-label col-md-4">اسم الشهادة </label>
                                                                                                    <div class="col-md-7">
                                                                                                        <input disabled type="text" class="form-control" name="cname" value=" <?php echo  @$user->cname ; ?>" />
                                                                                                         <span class="help-block"><P> </P>  </span>
                                                                                                    </div>
                                                                                                </div>
                                                                                                
                                                                                                
                                                                                                  <div class="form-group">
                                                        <label class="control-label col-md-4">تاريخ الشهادة <span class="required"> * </span></label>
                                                        <div class="col-md-7">
                                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                                <input required type="text" autocomplete="off" class="readonly form-control"  name="cdate" value="<?php echo  @$user->cdate ; ?>"  /> 
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                            <span class="help-block"> اختر التاريخ </span>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                                                               
                                                                                               
                                                                                                <input type="hidden" name="idnumber" class="form-control" value="<?php echo  $rapp->idnumber ; ?>" />    
                                                                                                <input type="hidden" name="id" class="form-control" value="<?php echo  @$user->id  ; ?>" /> 
                                                                                                         <div class="form-group">
                                                                                                            <label class="control-label col-md-4">صورة الشهادة </label>
                                                                                                            <div class="col-md-7">
                                                                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                                                    <span class="btn green btn-file">
                                                                                                                        <span class="fileinput-new"> اختر الملف </span>
                                                                                                                        <span class="fileinput-exists"> تغيير </span>
                                                                                                                        <input type="file" name="file"> </span>
                                                                                                                    <span class="fileinput-filename"> </span> &nbsp;
                                                                                                                    <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                <div class="form-actions">
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-offset-8 col-md-9">
                                                                                                            <button type="submit" class="btn green btn-primary">تحديث </button>
                                                                                                            <button type="button" data-dismiss="modal" class="btn default" aria-hidden="true">إلغاء </button>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- END Certification EDIT FORM -->
                                                                              <?php echo  "</tr>"; }  ?>
                                                                                
                                                               </table> 
                                                               <!-- Start Certification ADD FORM -->
                                                                         <?php  include_once('require/modals.php'); ?>
                                                                <!-- END Certification ADD FORM -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END PORTLET -->
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- END PROFILE CONTENT -->
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
          
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
           <?php require_once ("require/footer.php") ; ?>
  <!-- BEGIN CORE PLUGINS -->
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        
         <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
       
        <script src="require/js/trandate.js" type="text/javascript"></script>  
         
       <!-- <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/timeline.min.js" type="text/javascript"></script>-->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

    </body>

</html>
       

<?php  }
if($_SESSION['user_info'] == false ){
	header("Location: login.php?error=r");
}
?>