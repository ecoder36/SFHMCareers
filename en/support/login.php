
<?php require_once ('log/logsession.php'); ?> 
<?php


include_once('require/api/db.php');
require_once('require/api/usersAPI.php');


if(isset($_POST['username']) && (isset($_POST['password'])))
{
   
        
        $user =  users_get_by_uname($_POST['username']);
        
        if(!$user) {
          // die('No User');
        header("Location: ?user=No User OR Wrong User Info.");

       
         die();
        }
        $pass = @md5(@mysql_real_escape_string(strip_tags($_POST['password']),$tf_handle));
        tinyf_db_close();
        if(strcmp($pass,$user->pass)!= 0) {
             // die('Bad User');
       
        header("Location: ?password=Wrong Password.");
        
        die();
        }
        
        $user->pass = 0;
        $_SESSION['user_info'] = $user;
        if($_SESSION['user_info'] != false ){
         header('Location: form.php?id='.$_SESSION['user_info']->id.'');
        }else
        header('Location: jobs.php');

}
?>







<!DOCTYPE html>



<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Login</title>
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
         <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        
                <link href="../assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
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
        <?php $aclogin="active" ?>
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
                            <h1>Login Form 
                                <small>Login to your CV</small>
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
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            
                            <li>
                                <span>Login Form</span>
                            </li>
                        </ul>

                          <?php    if(isset($_GET['iderror'])){ ?>
                         <div class="alert alert-danger ">
                                                        <button class="close" data-close="alert"></button> you have CV here you can login by your idnumber and your password to view and edit your CV  </div>
                          <?php  } ?>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            
                         <!--   <form method="post" id="form_sample_3" class="form-horizontal">-->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                     <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-green"></i>
                                                <span class="caption-subject font-green sbold uppercase">Login to your CV</span>
                                            </div>
                                            <div class="actions">
                                               
                                                
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            
                                         <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                   <?php    if(isset($_GET['user'])){echo '<div class="alert alert-danger ">
                                                    <button class="close" data-close="alert"></button><strong>Error! </strong> '.$_GET['user'].'</div>';}
                                                      if(isset($_GET['password'])){echo ' <div class="alert alert-danger ">
                                                    <button class="close" data-close="alert"></button><strong>Error! </strong> '.$_GET['password'].'</div>';}?>

                                            <!-- BEGIN FORM-->
                                             
                                            
                                            <form method="post"  action="" id="form_sample_3" class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">ID Number
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-user"></i>
                                                                </span>
                                                                <input type="text" name="username" class="form-control" placeholder="ID Number" > </div>
                                                                <span class="help-block"> Enter your ID Number </span>
                                                        </div>
                                                    </div>
                                                  
                                                    
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Password
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </span>
                                                                <input type="password" name="password" class="form-control" placeholder="Password" > </div>
                                                                <span class="help-block"> Enter your Password </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green" >Login</button>
                                                            </div>
                                                        </div>
                                                    </div> 
                                            </form> 
                                            <!-- END FORM-->
                                         </div>
                                        </div>
                                        <!-- END VALIDATION STATES-->
                                    </div>
                                         
                                    <!-- END VALIDATION STATES-->
                                </div>
                            </div>
                            
                          <!--  <div class="m-heading-1 border-green m-bordered">
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="text-center">
                                            <button type="submit" class="btn green">Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                          <!--  </form>-->
                            
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
        
         <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="./../assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
         <script src="require/js/login.js" type="text/javascript"></script>
         
        <script src="require/js/addjobs.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>


      