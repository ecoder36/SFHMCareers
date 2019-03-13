
<?php

require_once('log/adminlogsession.php');

if($_SESSION['user_info'] != false  )
{

@require_once ('log/logsession.php'); 
@require_once('require/api/db.php');
@require_once('require/api/requestsAPI.php');
@require_once('require/api/recordsAPI.php');
@require_once('require/api/listsAPI.php');
@require_once('require/api/usersAPI.php');
$userinfo = users_get_by_id(@$_SESSION['user_info']->id);

   if(isset($_POST['site'])){

            $requestchek = request_get_by_site_ptype_status($_POST['site'],$_POST['ptype'],$_POST['status']);

            tinyf_db_close();
             $ucount = @count($requestchek) ;
             echo $ucount ;
          
                         
            if ($ucount != 0)
                   {
                       $ptype=$_POST['ptype'];
                       $site=$_POST['site'];
                       $name=$_POST['name'];
                       $problem=$_POST['problem'];
                       header("Location: ?error=123&id=$requestchek->id&site=$site&ptype=$ptype&name=$name&problem=$problem");
            		}  else {

		       $result =  request_add($_POST['region'],$_POST['city'],$_POST['site'],$_POST['ptype'],$_POST['name'],$_POST['problem'],$_POST['ename'],$_POST['status']);
                    if($result){
                        $idno = request_get_by_site_ptype_status($_POST['site'],$_POST['ptype'],$_POST['status']);
                        $rid =  $idno->id ;
                        $resultr = record_add($rid,$_POST['ename'],$_POST['problem'],$_POST['status']);
                         header("Location: ?done=123");
                    }
                     
             
            		}
   }


   
// require_once("dbcontroller.php");
// $db_handle = new DBController();
// $query ="SELECT DISTINCT region FROM regions";
// $results = $db_handle->runQuery($query);

?>

<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Form</title>
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <?php $newreq="active" ?>
        <?php require_once ("require/bheader.php") ; ?>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1 class="font-blue-dark"> <i class="icon-user"></i> <?php echo $_SESSION['user_info']->name ?>
                                <small></small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                             <!-- BEGIN THEME PANEL -->
                               <?php  // require_once ("require/themepanel.php") ; ?>
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
                       
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject font-dark sbold uppercase">Request Form</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                             
                                            <!-- BEGIN FORM-->
                                            <form method="post" id="form_sample_3" class="form-horizontal">
                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                     <?php  if(isset($_GET['done'])){echo ' <div class="alert alert-success ">
                                                <button class="close" data-close="alert"></button><strong>Success! </strong> The request has been added successfully! </div>';}?>
                                                     <?php if(isset($_GET['error'])) {
                                            		echo '<div class="alert alert-danger"><button class="close" data-close="alert"></button><strong>There is error : This problem is added before <a href="ticket.php?id='.$_GET['id'].'">click here</a></strong></div>';
                                            		} ?>
                                            		
                                            		
                                            		  <div class="form-group">
                                                        <label class="control-label col-md-3">Region
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            
                                                            <?php
                                                        $users = list_get('WHERE `tname` = "region" ORDER BY `id` DESC' );
                                                        if($users == NULL)
                                                              echo ('');
                                                        $ucount = @count($users);
            
                                                        if($ucount == 0)
                                                              echo ('');
            
                                                        ?>
                                                            <select class="form-control select2me" name="region">
                                                                 <option value="<?php echo @$_GET['region'] ?>"><?php echo @$_GET['region'] ?></option>
                                                                <option value="">Select...</option>
                                                                 <?php
                                                      for($i = 0 ; $i < $ucount; $i++)
                                                      {
                                                          $user = $users[$i];
                                                          
                                                          ?>
                                                          
                                                                <option value="<?php echo $user->content ?>"><?php echo $user->content ?></option>
                                                                
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">City
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            
                                                            <?php
                                                        $users = list_get('WHERE `tname` = "city" ORDER BY `id` DESC' );
                                                        if($users == NULL)
                                                              echo ('');
                                                        $ucount = @count($users);
            
                                                        if($ucount == 0)
                                                              echo ('');
            
                                                        ?>
                                                            <select class="form-control select2me" name="city">
                                                                 <option value="<?php echo @$_GET['city'] ?>"><?php echo @$_GET['city'] ?></option>
                                                                <option value="">Select...</option>
                                                                 <?php
                                                      for($i = 0 ; $i < $ucount; $i++)
                                                      {
                                                          $user = $users[$i];
                                                          
                                                          ?>
                                                          
                                                                <option value="<?php echo $user->content ?>"><?php echo $user->content ?></option>
                                                                
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Site</label>
                                                        <div class="col-md-4">
                                                            <input name="site" type="text" class="form-control" value="<?php echo @$_GET['site'] ?>" /> </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Problem Type
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <?php
                                                             $usersp = list_get('WHERE `tname` = "ptype" ORDER BY `id` DESC' );
                                                        if($usersp == NULL)
                                                              echo ('');
                                                        $ucountp = @count($usersp);
            
                                                        if($ucountp == 0)
                                                              echo ('');
                                                            ?>
                                                            <select class="form-control select2me" name="ptype">
                                                                <option value="<?php echo @$_GET['ptype'] ?>"><?php echo @$_GET['ptype'] ?></option>
                                                                <option value="">Select...</option>
                                                                 <?php
                                                      for($i = 0 ; $i < $ucountp; $i++)
                                                      {
                                                          $userp = $usersp[$i];
                                                          
                                                          ?>
                                                                <option value="<?php echo $userp->content ?>"><?php echo $userp->content ?></option>
                                                               <?php } ?> </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Name&nbsp;&nbsp;</label>
                                                        <div class="col-md-4">
                                                            <input name="name" type="text" class="form-control" value="<?php echo @$_GET['name'] ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">The Problem
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <textarea type="text" rows="5" name="problem" data-required="1" class="form-control" ><?php echo @$_GET['problem'] ?></textarea> </div>
                                                    </div>
                                                    <input type="hidden" name="ename" data-required="1" class="form-control" value="<?php echo $userinfo->id ?>" />
                                                    <input type="hidden" name="status" data-required="1" class="form-control" value="new" />
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn yellow">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                        </div>
                                        <!-- END VALIDATION STATES-->
                                    </div>
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
            
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
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
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/form.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>

<?php }
if($_SESSION['user_info'] == false ){
	header("Location: login.php?error=r");
}
?>