

<?php

require_once('log/adminlogsession.php');

if($_SESSION['admin_info'] != false  )
{
    
    
@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');

if($_GET['jobnumber'] == 0){
      header("Location: admintable.php?viewerror=error");
    die ('error');
}

 $joben =   jobsen_get_by_jobnumber(trim($_GET['jobnumber']));
 $jobar =   jobsar_get_by_jobnumber(trim($_GET['jobnumber']));
 $job   =   jobs_get_by_jobnumber(trim($_GET['jobnumber']));
//$users = tinyf_users_get_by_eidall(trim($_POST['eid']));

tinyf_db_close();
$ucount = @count($joben);

if($ucount == 0){
   //   header("Location: jobsadmin?viewerror=error");
  //  die ('error');
}

if($joben){
    
}

if(isset($_GET['jobnumber']) && isset($_GET['sub1en']) )
{
     $_jobnumber = trim($_GET['jobnumber']);
     $_id = $joben->id ;
            if($_id == 0)
                die('Bad Access 2');

     $_arid = $jobar->id ;

     $result = jobsen_desc_update($_id,$_GET['sub1en'],$_GET['desc1en'],$_GET['sub2en'],$_GET['desc2en']).jobsar_desc_update($_arid,$_GET['sub1ar'],$_GET['desc1ar'],$_GET['sub2ar'],$_GET['desc2ar']);

                                 if($result)
                                 {
                                     header("Location: ?jobnumber=".$_jobnumber."&descupdate=success");
                                 }else{ 
                                     die('Update Failure 1');
                                     }
                                 die();   
}

if(isset($_GET['jobnumber']) && isset($_GET['jobname']) )
{
     $_id = $joben->id ;
     $_jobnumber = trim($_GET['jobnumber']);
            if($_jobnumber == 0)
                die('Bad Access 2');
                
     $_arid = $jobar->id ;            
    
                                                if($_GET['employmenttype'] == "Full-time"){
                                                $etypear = "دوام كامل";
                                               }
                                                elseif($_GET['employmenttype'] == "Part-time"){ 
                                                $etypear = "دوام جزئي";   
                                                    }
                                                if($_GET['perment'] == "Permanent"){
                                                    $permentar = "ثابت";
                                        		}
                                                elseif($_GET['perment'] == "Contract"){  
                                                         $permentar = "مؤقت"; 
                                                    }            

     $result = jobsen_info_update($_id,$_GET['jobname'],$_GET['dept'],$_GET['employmenttype'],$_GET['perment'],$_GET['org'],$_GET['city']).jobsar_info_update($_arid,$_GET['arjobname'],$_GET['ardept'],$etypear,$permentar,$_GET['arorg'],$_GET['arcity']);

                                 if($result)
                                 {
                                     header("Location: ?jobnumber=".$_jobnumber."&infoupdate=success");
                                 }else{ 
                                     
                                die('Update Failure 2');
                                
                                }
                                 
                                 die();   
}

?>



<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $joben->jobname ; ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
                <link href="../assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

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
                            <h1>Job Information
                             
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
                                <a href="admintable.php">Admin Table</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span><?php echo $joben->jobname; ?></span>
                            </li>
                        </ul>
                        
                         <?php
                                                        if(isset($_GET['descupdate'])){echo ' <div class="alert alert-success ">
                                                        <button class="close" data-close="alert"></button><strong>Success! </strong>it has been updated successfully</div>';}
                
                                                        if(isset($_GET['infoupdate'])){echo ' <div class="alert alert-success ">
                                                        <button class="close" data-close="alert"></button><strong>Success! </strong>it has been updated successfully</div>';}
                                                        ?>
                        
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- BEGIN UNORDERED LISTS PORTLET-->
                                    
                                   </div>
                                <div class="col-md-8">
                                    <!-- BEGIN UNORDERED LISTS PORTLET-->
                                    
                                    <!-- END UNORDERED LISTS PORTLET-->
                                    <div>
                                        <!-- BEGIN GENERAL PORTLET-->
                                        <div class="portlet light ">
                                            
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-social-dribbble font-blue-sharp"></i>
                                                    <span class="caption-subject font-blue-sharp bold uppercase">General</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="#desc_edit" data-toggle="modal">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                         <h3 ><?php echo $joben->sub1; ?></h3>
                                                      <p class="muted">  &nbsp &nbsp <?php echo $joben->desc1; ?></p>
                                                        
                                                    </div>
        
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8 entry-content clearfix">
                                                         <h3><?php echo $joben->sub2; ?></h3>
                                                       <p class="muted">  &nbsp &nbsp <?php echo $joben->desc2; ?></p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END GENERAL PORTLET-->
                                   
                                                    <div id="desc_edit" class="modal fade" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                    <h4 class="modal-title">update description</h4>
                                                                </div>
                                                                
                                                               
                                                                <div class="modal-body">
                                                                    <form action="" class="form-horizontal">
                                                                        
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2">subject1</label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <input type="text" value="<?php echo @$joben->sub1; ?>" name="sub1en" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2">jobdesc1</label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <textarea class="col-md-12" name="desc1en" value="<?php echo @$joben->desc1; ?>" rows="5"><?php echo @$joben->desc1; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2">subject2</label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <input type="text" value="<?php echo @$joben->sub2; ?>" name="sub2en" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2">jobdesc2</label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <textarea class="col-md-12" name="desc2en" value="<?php echo @$joben->desc2; ?>" rows="5"><?php echo @$joben->desc2; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                  <input type="hidden" name="jobnumber" class="form-control" value="<?php echo @$joben->jobnumber ; ?>" />   
                                                                            </div>
                                                                           <div class="col-md-6">
                                                                                
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2"> </label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <input dir="rtl" type="text" value="<?php echo @$jobar->sub1; ?>" name="sub1ar" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2"> </label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <textarea dir="rtl" class="col-md-12" name="desc1ar" value="<?php echo @$jobar->desc1; ?>" rows="5"><?php echo @$jobar->desc1; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2"> </label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <input dir="rtl" type="text" value="<?php echo @$jobar->sub2; ?>" name="sub2ar" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2"> </label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <textarea dir="rtl" class="col-md-12" name="desc2ar" value="<?php echo @$jobar->desc2; ?>" rows="5"><?php echo @$jobar->desc2; ?></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                  <input type="hidden" name="arjobnumber" class="form-control" value="<?php echo @$jobar->jobnumber ; ?>" />   
                                                                            </div>
                                                                        </div> 
                                                                                
                                                                                
                                                                                    <div class="modal-footer">
                                                                                        <button type="submit" class="btn green btn-primary" >Save changes</button>
                                                                                        <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                                                       
                                                                                    </div>
                                                                                            
                                                                                <!--<div class="form-actions">
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
                                                    
                                                    
                                    <!-- BEGIN UNORDERED LISTS PORTLET-->
                                  
                                    <!-- END UNORDERED LISTS PORTLET-->
                                    
                            </div>
                                <div class="col-md-4">
                                    <!-- BEGIN UNORDERED LISTS PORTLET-->
                                   <div>
                                   <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="icon-social-dribbble font-blue"></i>
                                                    <span class="caption-subject font-blue bold uppercase">Information</span>
                                                </div>
                                                <div class="actions">
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="#info_edit" data-toggle="modal">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="table-scrollable table-scrollable-borderless">
                                                    <table class="table table-hover table-light">
                                                        <tr>
                                                            <td class="primary-link bold"> 	position  </td>
                                                            <td class="bold theme-font">  <?php echo $joben->jobname; ?> </td>
                                                            <td class="primary-link bold"> position number</td>
                                                            <td class="bold theme-font">  <?php echo $joben->jobnumber; ?>  </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td class="primary-link bold"> org </td>
                                                            <td class="bold theme-font"> <?php echo $joben->org; ?> </td>
                                                            <td class="primary-link bold"> department </td>
                                                            <td class="bold theme-font"> 	<?php echo $joben->dept; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="primary-link bold"> Contract </td>
                                                            <td class="bold theme-font"> <?php echo $joben->perment; ?>  </td>
                                                            <td class="primary-link bold"> Hours </td>
                                                            <td class="bold theme-font"> <?php echo $joben->employmenttype; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="primary-link bold"> City </td>
                                                            <td class="bold theme-font"> 	<?php echo $joben->city; ?> </td>
                                                        </tr>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                            
                                            
                                            <!-- start -->
                                                    <div id="info_edit" class="modal fade" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                    <h4 class="modal-title">update information</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" class="form-horizontal">
                                                                       
                                                                       <div class="row">
                                                                            <div class="col-md-6 col-md-offset-3">
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-4">hours</label>
                                                                                    <div class="col-md-8">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <div class="icheck-inline">
                                                                                               <label>
                                                                                                     <?php if ($joben->employmenttype == "Full-time") { 
                                                                                                    echo '<input type="radio" name="employmenttype" checked class="icheck" data-radio="iradio_flat-blue"  value="Full-time"> Full-time &nbsp&nbsp&nbsp</label>' ; } else 
                                                                                                  { echo '<input type="radio" name="employmenttype" class="icheck" data-radio="iradio_flat-blue"  value="Full-time"> Full-time &nbsp&nbsp&nbsp</label>' ; } ?>
                                                                                                <label>
                                                                                                     <?php if ($joben->employmenttype == "Part-time") { 
                                                                                                    echo '  <input type="radio" name="employmenttype" checked class="icheck" data-radio="iradio_flat-blue"  value="Part-time"> Part-time </label>' ; } else 
                                                                                                  {  echo '  <input type="radio" name="employmenttype" class="icheck" data-radio="iradio_flat-blue"  value="Part-time"> Part-time </label>'; } ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-4">contract</label>
                                                                                    <div class="col-md-8">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <div class="icheck-inline">
                                                                                                <label>
                                                                                                    <?php if ($joben->perment == "Permanent") { 
                                                                                                    echo '<input type="radio" name="perment" checked class="icheck" data-radio="iradio_flat-blue"  value="Permanent"> Permanent </label>' ; } else 
                                                                                                  {  echo '<input type="radio" name="perment" class="icheck" data-radio="iradio_flat-blue"  value="Permanent"> Permanent </label>'; } ?>
                                                                                                <label>
                                                                                                    <?php if ($joben->perment == "Contract") { 
                                                                                                    echo '<input type="radio" name="perment" checked class="icheck" data-radio="iradio_flat-blue"  value="Contract"> Contract </label>' ; } else 
                                                                                                  {  echo '<input type="radio" name="perment" class="icheck" data-radio="iradio_flat-blue"  value="Contract"> Contract </label>'; } ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                           </div>
                                                                       </div>
                                                                       <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2">position</label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <input type="text" value="<?php echo @$joben->jobname; ?>" name="jobname" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                 <div class="form-group">
                                                                                    <label class="control-label col-md-2">department</label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                             <input type="text" value="<?php echo @$joben->dept; ?>" name="dept" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                                 <div class="form-group">
                                                                                    <label class="control-label col-md-2">city</label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <input type="text" value="<?php echo @$joben->city; ?>" name="city" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2">organization</label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                             <input type="text" value="<?php echo @$joben->org; ?>" name="org" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                 <input type="hidden" name="jobnumber" class="form-control" value="<?php echo @$joben->jobnumber ; ?>" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2"></label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <input dir="rtl" type="text" value="<?php echo @$jobar->jobname; ?>" name="arjobname" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                 <div class="form-group">
                                                                                    <label class="control-label col-md-2"></label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                             <input dir="rtl" type="text" value="<?php echo @$jobar->dept; ?>" name="ardept" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                               
                                                                                 <div class="form-group">
                                                                                    <label class="control-label col-md-2"></label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                            <input dir="rtl" type="text" value="<?php echo @$jobar->city; ?>" name="arcity" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-2"></label>
                                                                                    <div class="col-md-7">
                                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                                             <input dir="rtl" type="text" value="<?php echo @$jobar->org; ?>" name="arorg" data-required="1" class="form-control" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                 <input type="hidden" name="arjobnumber" class="form-control" value="<?php echo @$jobar->jobnumber ; ?>" />
                                                                            </div>
                                                                        </div>
                                                                          
                                                                        
                                                                        
                                                                            <div class="modal-footer">
                                                                                 <button type="submit" class="btn green btn-primary" >Save changes</button>
                                                                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                                               
                                                                            </div>
                                                                                    
                                                                        
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <!-- end -->
                                                    
                                            </div>
                                             
                                       <!--    <div class="portlet light ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-social-dribbble font-blue"></i>
                                                            <span class="caption-subject font-blue bold uppercase">Apply </span>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="row">
                                                            <div class="col-md-8"> 
                                                            <a class="btn green btn-outline" href="applyform.php?jobnumber=<?php // echo $joben->jobnumber ; ?>" > Apply for <?php // echo $joben->jobname; ?>
                                                                <i class="fa fa-share"></i>
                                                            </a>
                                                               
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                            </div>-->
                                    </div>
                                    <!-- END UNORDERED LISTS PORTLET-->
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>

<?php  }
if($_SESSION['admin_info'] == false ){
	header("Location: adminlogin.php?error=r");
}
?>