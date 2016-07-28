
<?php

@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');

if($_GET['jobnumber'] == 0){
      header("Location: jobsadmin.php?viewerror=error");
    die ('error');
}

 $joben =   jobsen_get_by_jobnumber(trim($_GET['jobnumber']));
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
                                <a href="jobsadmin.php">Jobs Admin</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span><?php echo $joben->jobname; ?></span>
                            </li>
                        </ul>
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
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
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
                                                    <div class="col-md-8 portlet-body">
                                                         <h3><?php echo $joben->sub2; ?></h3>
                                                       <pre class=" control light">  &nbsp &nbsp <?php echo $joben->desc2; ?></pre>
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
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-cloud-upload"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-wrench"></i>
                                                    </a>
                                                    <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                                                        <i class="icon-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="cf margin-bottom-5">
                                                			<dt class="grid-item two-fifths portable-one-whole palm-one-half inline">
                                                				job number
                                                			</dt>
                                                		
                                                		</div>
                                                		<div class="cf margin-bottom-5">
                                                			<dt class="grid-item two-fifths portable-one-whole palm-one-half inline">
                                                				job name
                                                			</dt>
                                                			
                                                		</div>	
                                                		<div class="cf margin-bottom-5">
                                                			<dt class="grid-item two-fifths portable-one-whole palm-one-half inline">
                                                				department
                                                			</dt>
                                                		
                                                		</div>
                                                		<div class="cf margin-bottom-5">
                                                			<dt class="grid-item two-fifths portable-one-whole palm-one-half inline">
                                                				Hours
                                                			</dt>
                                                			
                                                		</div>	
                                                		<div class="cf margin-bottom-5">
                                                			<dt class="grid-item two-fifths portable-one-whole palm-one-half inline">
                                                				Contract
                                                			</dt>
                                                			
                                                		</div>
                                                		<div class="cf margin-bottom-5">
                                                			<dt class="grid-item two-fifths portable-one-whole palm-one-half inline">
                                                				city
                                                			</dt>
                                                			
                                                		</div>

                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="cf margin-bottom-5">
                                                		
                                                			<dd class="inline">
                                                				<?php echo $joben->jobnumber; ?> 
                                                			</dd>
                                                		</div>
                                                		<div class="cf margin-bottom-5">
                                                			
                                                			<dd class="inline">
                                                			<?php echo $joben->jobname; ?>
                                                			</dd>
                                                		</div>	
                                                		<div class="cf margin-bottom-5">
                                                			
                                                			<dd class="inline">
                                                				<?php echo $joben->dept; ?> 
                                                			</dd>
                                                		</div>
                                                		<div class="cf margin-bottom-5">
                                                			
                                                			<dd class="inline">
                                                			<?php echo $joben->employmenttype; ?>
                                                			</dd>
                                                		</div>	
                                                		<div class="cf margin-bottom-5">
                                                		
                                                			<dd class="inline">
                                                				<?php echo $joben->perment; ?> 
                                                			</dd>
                                                		</div>
                                                		<div class="cf margin-bottom-5">
                                                			<dd class="inline">
                                                			<?php echo $joben->city; ?>
                                                			</dd>
                                                		</div>

                                                    </div>
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
                                                                <input type="submit" class="btn green-sharp btn-outline  btn-block sbold uppercase" value="Apply for <?php echo $joben->jobname; ?>">
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                    <!-- END UNORDERED LISTS PORTLET-->
                                    
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
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>