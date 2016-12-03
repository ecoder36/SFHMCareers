


<?php

require_once('log/adminlogsession.php');

if($_SESSION['admin_info'] != false  )
{


@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');
@require_once('require/api/addresumesAPI.php');
@require_once('require/api/rappAPI.php');
@require_once('require/api/certificationAPI.php');
@require_once('require/api/trainingAPI.php');
@require_once('require/api/experiencesAPI.php');

if(empty($_GET['idnumber'])){
      header("Location: applicantslist.php?viewerror=errorab");
    die ('error');
}

 $rapp =       rapp_get_by_idnumber(trim($_GET['idnumber'])); /* */
 $rid =   rid_get_by_idnumber(trim($_GET['idnumber']));
 $rinfo = rinfo_get_by_idnumber(trim($_GET['idnumber']));
 $reducation   =   reducation_get_by_idnumber(trim($_GET['idnumber']));
 $job   =   jobs_get_by_jobnumber(trim($rapp->jobnumber));
 $enjobname   =   jobsen_get_by_jobnumber(trim($rapp->jobnumber));
 $idnumberofu = trim($_GET['idnumber']) ; 
 
if(isset($_GET['id']) && isset($_GET['rno']) && isset($_GET['name'])){
                          
                            $name = trim($_GET['name']);
                            $_id = (int)$_GET['id'];

                            if($_id == 0)
                                die('Bad Access');
                            $pass = trim($_GET['rno']);
                            
                            if (strlen($pass) == 0)
                                $pass = NULL;
                                
                            $result = rapp_pass_update($_id,$pass);
                            
                            tinyf_db_close();
                            
                            if($result)
                            {  
                                header("Location: ?idnumber=".$idnumberofu."&upass= password of ($name) has been updated to (<strong>$pass</strong>) successfully ");
                            }else{
                                die('Failure');
                                }
                                
                            }
                            
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['status'])){
                          
                            $name = trim($_GET['name']);
                            $_id = (int)$_GET['id'];

                            if($_id == 0)
                                die('Bad Access');
                                
                            $pass = trim($_GET['rno']);
                            $approval = trim($_GET['status']);
                                
                            $result = rapp_approval_update($_id,$approval);
                            
                            tinyf_db_close();
                            
                            if($result)
                            {
                                header("Location: ?idnumber=".$idnumberofu."&approval= The Applicant ( $name ) has been updated to (<strong>$approval</strong>) successfully");
                            }else{
                                die('Failure');
                                }
                                
                            }                            
                            

?>




<!DOCTYPE html>



<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
        
    <head>
        <meta charset="utf-8" />
        <title>User Profile</title>
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
        
          <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
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
                            <h1 class="theme-font">User Profile
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
                           <!-- <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>-->
                          
                            <li>
                                <span>User Profile</span>
                            </li>
                        </ul>
                         <?php
                            if(isset($_GET['upass'])){echo ' <div class="alert alert-success ">
                             <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['upass'].'</div>';}
                        ?>
                         <?php
                            if(isset($_GET['approval'])){echo ' <div class="alert alert-success ">
                             <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['approval'].'</div>';}
                        ?>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PROFILE SIDEBAR -->
                                    <div class="profile-sidebar">
                                        
                                        
                                        <div class="portlet light ">
                                            <div class="portlet-title">
                                                <div class="caption caption-md">
                                                    <i class="icon-bar-chart theme-font hide"></i>
                                                    <span class="caption-helper uppercase">refrence no.  </span>
                                                    <span class="caption-subject theme-font bold uppercase"><?php echo $rapp->rno ; ?></span><br/>
                                                      <span class="caption-helper uppercase">applied for  </span>
                                                <span class="caption-subject theme-font bold uppercase"><?php echo $enjobname->jobname ; ?></span><br/>
                                                <span class="caption-helper uppercase">  date </span>
                                                    <span class="caption-subject theme-font bold uppercase"><?php echo $rapp->experience  ; ?></span>
                                                    <br/>  
                                               <?php  if($rapp->approval == "Candidate"){
                                                          $approvalc = "<span class='label label-sm label-success'>$rapp->approval</span>" ;
                                                      }
                                                      if($rapp->approval == "Excluded"){
                                                          $approvalc = "<span class='label label-sm label-danger'>$rapp->approval</span>" ;
                                                      }
                                                      if($rapp->approval == "" || $rapp->approval == "New" ){
                                                          $approvalc = "<span class='label label-sm label-warning'>new</span>" ;
                                                      }?>
                                                <span class="caption-helper uppercase">status  </span>
                                                <span class="caption-subject theme-font bold uppercase"><?php echo $approvalc ; ?></span>
                                                </div>
                                                <div class="actions">
                                                </div>
                                            </div>
                                            
                                            <div class="margin-top-20 timeline-body-head-actions text-right">
                                                <div class="btn-group">
                                                    <button class="btn btn-circle red btn-sm dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        
                                                        <li>
                                                             <a class="yellow-lemon btn red btn-outline tooltips" data-original-title="New"  href="?idnumber=<?php echo $rapp->idnumber ; ?>&name=<?php echo $rapp->efullname ; ?>&status=New &id=<?php echo $rapp->id ; ?>&74236424202" onclick="return confirm('Are you sure to make (<?php echo $rapp->efullname ; ?>) New ?')"> 
                                                                New </a>
                                                        </li>
                                                        <li>
                                                             <a class="btn green btn-outline tooltips" data-original-title="Candidate"  href="?idnumber=<?php echo $rapp->idnumber ; ?>&name=<?php echo $rapp->efullname ; ?>&status=Candidate&id=<?php echo $rapp->id ; ?>&74236424202" onclick="return confirm('Are you sure to make (<?php echo $rapp->efullname ; ?>) Candidate ?')"> 
                                                                Candidate <i class="fa fa-check"></i></a>
                                                        </li>
                                                        <li>
                                                             <a class="btn red btn-outline tooltips" data-original-title="Exclude" href="?idnumber=<?php echo $rapp->idnumber ; ?>&name=<?php echo $rapp->efullname ; ?>&status=Excluded&id=<?php echo $rapp->id ; ?>&74236424202" onclick="return confirm('Are you sure to make (<?php echo $rapp->efullname ; ?>) Excluded  ?')"> 
                                                                Exclude <i class="fa fa-remove"></i></a>
                                                        </li>
                                                      
                                                        <li class="divider"> </li>
                                                        <li>
                                                            <a class="btn green btn-outline tooltips" href="?idnumber=<?php echo $rapp->idnumber ; ?>&name=<?php echo $rapp->efullname ; ?>&rno=<?php echo $rapp->rno ; ?>&id=<?php echo $rapp->id ; ?>&74236424202&resetpass=rest"  onclick="return confirm('Are you sure to Reset Password for this user (<?php echo $rapp->efullname ; ?>)  ?')" > Reset Password
                                                                        <i class="fa fa-unlock-alt"></i>
                                                                    </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>                
                                                        
                                        <!-- PORTLET MAIN -->
                                        <div class="portlet light profile-sidebar-portlet ">
                                            <!-- SIDEBAR USERPIC -->
                                            <div class="profile-userpic">
                                               <!-- <img src="../assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> </div>-->
                                                  <!-- <a href="<?php if( empty($rinfo->picatt) ) { echo 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png' ; }else{echo 'file/'.$rinfo->picatt;} ?>">-->
                                                      <img src="<?php if( empty($rinfo->picatt) ) { echo 'http://s3.amazonaws.com/37assets/svn/765-default-avatar.png' ; }else{echo 'file/'.$rinfo->picatt;} ?>" class="img-responsive " alt="" />
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
                                                                                  echo " <a href='file/$reducation->cvatt' target='_blank' class='primary-link'>CV Link</a>";
                                                                                  else {
                                                                                      echo "";
                                                                                  }?>
                                                   
                                                </div>
                                                   
                                            </div>
                                            <!-- SIDEBAR BUTTONS -->
                                        
                                         
                                            <!-- END SIDEBAR BUTTONS -->
                                            <!-- SIDEBAR MENU -->
                                        
                                            <!-- END MENU -->
                                            
                                      
                                            
                                        </div>
                                        <!-- END PORTLET MAIN -->
                                     
                                                <!-- BEGIN PORTLET -->
                                                <div class="portlet light ">
                                                    <div class="portlet-title tabbable-line">
                                                        <div class="caption caption-md">
                                                            <i class="icon-globe theme-font hide"></i>
                                                            <span class="caption-subject bold uppercase theme-font">Info</span>
                                                        </div>
                                                         <div class="actions">
                                                            
                                                          
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#tab_1_11" data-toggle="tab"> ID </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab_1_22" data-toggle="tab"> Address </a>
                                                            </li>
                                                        </ul>
                                                        
                                                    </div>
                                                    
                                                    <div class="portlet-body">
                                                         <div data-handle-color="#D7DCE2">
                                                            
                                                        <!--BEGIN TABS-->
                                                        <div class="tab-content">
                                                                    <div class="tab-pane active" id="tab_1_11">
                                                                        <div class="well margin-top-20" data-handle-color="#D7DCE2">
                                                                           
                                                                            <div class="profile-pic ">
                                                                                
                                                                                <a href="<?php if( empty($rid->idatt) ) { echo 'http://speedquiizz.com/assets/img/20/demo.png' ; }else{echo 'file/'.$rid->idatt;} ?>"><img src="<?php if( empty($rid->idatt) ) { echo 'http://speedquiizz.com/assets/img/20/demo.png' ; }else{echo 'file/'.$rid->idatt;} ?>" class="img-responsive pic-bordered" alt="" /></a>
                                                                            </div>   
                                                                            
                                                                                <div class="table-scrollable table-scrollable-borderless">
                                                                                    <table class="table table-hover table-light">
                                                                                      
                                                                                        <tr>
                                                                                            <td class="bold"> idnumber </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->idnumber ; ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="bold"> expire date </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->expire ; ?></td>
                                                                                        </tr>
                                                                                         <tr>
                                                                                            <td class="bold"> nationality </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->nationality ; ?></td>
                                                                                        </tr>
                                                                                         <tr>
                                                                                            <td class="bold"> city </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->city ; ?></td>
                                                                                        </tr>
                                                                                         <tr>
                                                                                            <td class="bold"> gender </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->gender ; ?></td>
                                                                                        </tr>
                                                                                         <tr>
                                                                                            <td class="bold"> mstatus </td>
                                                                                            <td class="bold theme-font"><?php echo $rid->mstatus ; ?></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="bold"> age </td>
                                                                                            
                                                                                                <?php
                                                                                                    $bd = $rapp->birthd ;
                                                                                                    $nd = Date('d-m-Y') ;
                                                                                                    $datetime1 = new DateTime($bd);
                                                                                                    $datetime2 = new DateTime($nd);
                                                                                                    $interval55 = $datetime1->diff($datetime2);
                                                                                                    $age = $interval55->format('%y years %m m');
                                                                                                ?>
                                                                                            <td class="bold theme-font"><?php echo $age ; ?></td>
                                                                                        </tr>
                                                                                       
                                                                                    </table>
                                                                                </div>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                <div class="tab-pane" id="tab_1_22">
                                                                    <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">     
                                                                    
                                                                       <div class="well">
                                                                        <address>
                                                                            <strong>Address</strong>
                                                                            <?php echo $rinfo->address ; ?>
                                                                            <br><abbr title="Phone">P:</abbr> <?php echo  $rapp->mobile ; ?>  </address>
                                                                        <address>
                                                                            <strong>zipcode & pobox</strong>
                                                                            <br/>
                                                                            <a href="mailto:#"></a>
                                                                                 <?php echo $rinfo->zipcode ; ?>, <?php echo $rinfo->pobox ; ?>
                                                                        </address>
                                                                    </div>
                                                                    
                                                                    <div class="margin-top-20 profile-desc-link">
                                                                        <i class="fa fa-twitter"></i>
                                                                         <?php if( $rinfo->twitter != null)
                                                          echo " <a href='$rinfo->twitter' >Twitter Link</a>";
                                                          else {
                                                              echo "No Twitter Link";
                                                                }
                                                      ?>
                                                                       
                                                                    </div>
                                                                    <div class="margin-top-20 profile-desc-link">
                                                                        <i class="fa fa-facebook"></i>
                                                                        <?php if( $rinfo->facebook != null)
                                                          echo " <a href='$rinfo->facebook' >Facebook Link</a>";
                                                          else {
                                                              echo "No Facebook Link ";
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
                                                            <span class="caption-subject theme-font bold uppercase">Education</span>
                                                            <span class="caption-helper hide">weekly stats...</span>
                                                        </div>
                                                        <div class="actions">
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                                            <div class="table-scrollable table-scrollable-borderless">
                                                                <table class="table table-hover table-light">
                                                                   
                                                                    <tr>
                                                                        <td class="primary-link bold"> University Name </td>
                                                                        <td class="bold theme-font">  <?php echo $reducation->eduname ;?> </td>
                                                                        <td class="primary-link bold"> Degree </td>
                                                                        <td class="bold theme-font">  <?php echo $reducation->degree ;?> </td>
                                                                        
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="primary-link bold"> Major </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->major ;?> </td>
                                                                        <td class="primary-link bold"> Grade </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->grade ;?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="primary-link bold"> Cuntry </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->educuntry ;?> </td>
                                                                        <td class="primary-link bold"> City </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->educity ;?> </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="primary-link bold"> Date </td>
                                                                        <td class="bold theme-font"> <?php echo $reducation->edudate ;?> </td>
                                                                       
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="primary-link bold"> Certification </td>
                                                                          <td>
                                                                             <?php if( $reducation->ceratt != null)
                                                                                  echo " <a href='file/$reducation->ceratt' class='primary-link'>cert Link</a>";
                                                                                  else {
                                                                                      echo "";
                                                                                  }?>
                                                                        </td>
                                                                        <td class="primary-link bold"> BS transcript </td>
                                                                        <td>
                                                                            <?php if( $reducation->traatt != null)
                                                                                  echo " <a href='file/$reducation->traatt' class='primary-link'>t Link</a>";
                                                                                  else {
                                                                                      echo "";
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
                                                            <span class="caption-subject theme-font bold uppercase">tarining</span>
                                                        </div>
                                                        <div class="actions">
                                                           <!-- <a href="javascript:;" class="btn btn-circle btn-default theme-font"><i class="fa fa-plus"></i> Add </a>-->
                                                            
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                       
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
                                                                            <th> title </th>
                                                                            <th> institute </th>
                                                                            <th> date </th>
                                                                            <th> Attachment </th>
                                                                            <th>  </th>
                                                                          <?php 
                                                                          $rtrainingsum = rtraining_get_sum("WHERE `idnumber` = '$idnumber' ");
                                                                          $trcountsum = @count($rtrainingsum);
                                                                          for($i = 0 ; $i < $trcountsum; $i++)
                                                                          {
                                                                              $user = $rtrainingsum[$i]; 
                                                                             // echo "<th>". $user->sum ."</th>";
                                                                              } ?>
                                                                            
                                                                        </tr>
                                                                    </thead>
                                                                    <?php
                                                                          for($i = 0 ; $i < $trcount; $i++)
                                                                          {
                                                                              $user = $rtraining[$i];
                                                    
                                                                              
                                                                            echo  "<tr>   <td class=\"bold theme-font\"> $user->title </td>
                                                                                            <td> $user->institute </td>
                                                                                            <td> $user->date </td> ";
                                                                                            
                                                                                             if($user->tatt != null)
                                                                                  echo "<td> <a href='file/$user->tatt'>Link</a></td>";
                                                                                  else {
                                                                                      echo "<td> </td>";
                                                                                  }
                                                                                        
                                                                
                                                                     echo "<td>  </td>
                                                             "; ?>
                                                                                 
                                                                          <?php echo  "</tr>"; }  ?>
                                                                       
                                                                    
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END PORTLET -->
                                            </div>
                                            
                                       
                                            
                                            
                                            
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="portlet light portlet-fit ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-microphone theme-font"></i>
                                                            <span class="caption-subject bold theme-font uppercase"> Work Expirences</span>
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
                                                                                    $D2YMD = $Y . " years " . $M . " months " . $D . " days" ;
                                                                                    
                                                                              echo "<span class='caption-helper'>". $D2YMD ."</span>";
                                                                          } ?>
                                                        </div>
                                                        <div class="actions">
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
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
                                                                            <span class="timeline-body-time font-grey-cascade">from <?php echo $user->date ; ?></span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="margin-top-40 timeline-body-content">
                                                                       
                                                                                <span class="font-grey-cascade"> <?php echo $user->workdesc ; ?> </span>
                                                                         <div class="table-scrollable table-scrollable-borderless">
                                                                            <table class="table table-hover table-light">
                                                                             
                                                                                <tr>
                                                                                    <td  class="bold"> position </td>
                                                                                    <td class=" bold theme-font"> <?php echo $user->position ; ?> </td>
                                                                                    <td class="bold"> location </td>
                                                                                    <td class="bold theme-font"><?php echo $user->location ; ?> </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td  class="bold"> csize </td>
                                                                                    <td class="bold theme-font"> <?php echo $user->csize ; ?> </td>
                                                                                    <td class="bold"> cindustry </td>
                                                                                    <td class="bold theme-font"> <?php echo $user->cindustry ; ?> </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td  class="bold"> years </td>
                                                                                    <?php	
                                                                                    $No = $user->days ;

                                                                                      $Y = (int)($No / '360');
                                                                                      $M = (int)(($No - ((int)($No / 360) * 360)) / 30);
                                                                                      $D = $No - (($Y * 360) + ($M * 30));
                                                                                    $D2YMD = $Y . " years " . $M . " months " . $D . " days" ;
                                                                                    ?>
                                                                                  
                                                                                    <td class="bold theme-font"> <?php echo $D2YMD ; ?> </td>
                                                                                    <td  class="bold"> attachment </td>
                                                                                    <td class="bold theme-font"> 
                                                                                    <?php
                                                                                     if($user->eatt != null)
                                                                                                  echo " <a href='file/$user->eatt'>Link</a></td>";
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
                                                            <span class="caption-subject theme-font bold uppercase">certifications</span>
                                                           
                                                        </div>
                                                        <div class="actions">
                                                             
                                                            <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                         
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
                                                                                
                                                                                <th> Certification Name </th>
                                                                                <th> date </th>
                                                                                <th> attachment </th>
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
                                                                      echo "<td> <a href='file/$user->catt'>Link</a></td>";
                                                                      else {
                                                                          echo "<td> </td>";
                                                                      }
                                                                      
                                                                      echo "<td> </td>
                                                                     "; ?>
                                                                     
                                                                            
                                                                              <?php echo  "</tr>"; }  ?>
                                                                                
                                                               </table> 
                                                               <!-- Start Certification ADD FORM -->
                                                                       
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
if($_SESSION['admin_info'] == false ){
	header("Location: adminlogin.php?error=r");
}
?>