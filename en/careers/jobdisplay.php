

<?php

@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');

if(empty($_GET['jobnumber'])){
      header("Location: jobs.php?viewerror=errorc");
    die ('error');
}

 $jobsnocheck =   jobs_get_by_jobnumber(trim($_GET['jobnumber']));
            if ($jobsnocheck == null){
                header("Location: jobs.php?viewerror=errord");
            }
            
 $joben =   jobsen_get_by_jobnumber(trim($_GET['jobnumber']));
 $job   =   jobs_get_by_jobnumber(trim($_GET['jobnumber']));


tinyf_db_close();




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
                                <a href="jobs.php">Jobs</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span><?php echo $joben->jobname; ?></span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <?php    if(isset($_GET['dateerror'])){echo '<div class="alert alert-danger ">
                                <button class="close" data-close="alert"></button><strong>Error! </strong> You can not apply for this job now!</div>';}
                              ?>
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
                                                     <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
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
                                                    <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
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
                                        </div>
                                           <div class="portlet light ">
                                                <div class="portlet-title">
                                                    <div class="caption">
                                                        <i class="icon-social-dribbble font-blue"></i>
                                                        <span class="caption-subject font-blue bold uppercase">Apply </span>
                                                    </div>
                                                </div>
                                                <div class="portlet-body">
                                                    <div class="row">
                                                        <div class="col-md-8"> 
                                                            <a class="btn green btn-outline" href="applyform.php?jobnumber=<?php echo $joben->jobnumber ; ?>" data-toggle="modal"> Apply for <?php echo $joben->jobname; ?>
                                                                <i class="fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                           
                                            
                                            
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