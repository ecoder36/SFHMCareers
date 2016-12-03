

<?php

require_once('log/adminlogsession.php');

if($_SESSION['admin_info'] != false  )
{
  



@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');

   if(isset($_POST['jobnumber'])){

            // $jobs =   jobs_get_by_jobnumber(trim($_POST['jobnumber']));
            $jobs = jobs_get("WHERE `jobnumber` = ".trim($_POST['jobnumber'])."") ;
            tinyf_db_close();
             $ucount = @count($jobs) ;
             echo $ucount ;
               /*  for($i = 0 ; $i < $ucount; $i++)
                         {
                            $res = $jobs[$i];
                           echo  "$res->id" ;
                         }*/
                         
            if ($ucount != 0)
             {
                  @$error.=" <br /> This job number is added in the table before";
             }  
            if(@$error) {
            	  $result='<div class="alert alert-danger"><strong>There were error(s) in your form: </strong>'.$error.'</div>';
            		}  else {

		       $result =  jobs_add($_POST['jobnumber'],null,null,null,null,null);
               if($result){
                               $resulten =  jobsen_add($_POST['jobnumber'],$_POST['jobnameen'],$_POST['dept'],$_POST['org'],$_POST['city'],$_POST['employmenttype'],$_POST['perment'],$_POST['sub1en'],$_POST['desc1en'],$_POST['sub2en'],$_POST['desc2en']);
                                             
                                             $city = "مكة";  $org = "مستشفى قوى الأمن";
                                                
                                               if($_POST['employmenttype'] == "Full-time"){
                                                $etypear = "دوام كامل";
                                               }
                                                elseif($_POST['employmenttype'] == "Part-time"){ 
                                                $etypear = "دوام جزئي";   
                                                    }
                                                if($_POST['perment'] == "Permanent"){
                                                    $permentar = "ثابت";
                                        		}
                                                elseif($_POST['perment'] == "Contract"){  
                                                         $permentar = "مؤقت"; 
                                                    }
                                        
                                $resultar =  jobsar_add($_POST['jobnumber'],$_POST['jobnamear'],$_POST['deptar'],$org,$city,$etypear,$permentar,$_POST['sub1ar'],$_POST['desc1ar'],$_POST['sub2ar'],$_POST['desc2ar']);

                                header("Location: ?done=123");

                             }      
                                  
                                         
                           //   die(); 
                           
                        }                         
            }
  

?>



<!DOCTYPE html>



<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Add New Job</title>
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
        <?php $acaddjobs ="active" ?>
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
                            <h1>Add Job Form 
                                <small> </small>
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
                                <span></span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            
                            
                            <form method="post" id="form_sample_3" class="form-horizontal">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                     <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-green"></i>
                                                <span class="caption-subject font-green sbold uppercase">Basic Form</span>
                                            </div>
                                            <div class="actions">
                                                 <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            
                                               <?php  if(isset($_GET['done'])){echo ' <div class="alert alert-success ">
                                                <button class="close" data-close="alert"></button><strong>Success! </strong> The Job has been added successfully! </div>';}?>
                                                                        
                                                                        
                                            <!-- BEGIN FORM-->
                                          <!--  <form method="post" id="form_sample_3" class="form-horizontal"> -->
                                                <?php if(@$error) {
		echo '<div class="alert alert-danger"><button class="close" data-close="alert"></button><strong>There were error(s) in your form: </strong></div>';
		} ?>
                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>
  
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Position Number
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <input type="text" value="<?php echo @$_POST['jobnumber'] ; ?>" name="jobnumber" data-required="1" class="form-control" /> 
                                                       <?php   if(@$error) {
		echo '<div class="alert alert-danger"><button class="close" data-close="alert"></button><strong>Error: </strong>'.$error.'</div>';
		} ?>
                                                        	                	
                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Employment Type<span class="required"> * </span></label>
                                                        <div class="col-md-8">
                                                            <div class="input-group">
                                                                <div class="icheck-inline">
                                                                   <label>
                                                                         <?php if (@$_POST['employmenttype'] == "Full-time") { 
                                                                        echo '<input type="radio" name="employmenttype" checked class="icheck" data-radio="iradio_flat-blue"  value="Full-time"> Full-time &nbsp&nbsp&nbsp</label>' ; } else 
                                                                      { echo '<input type="radio" name="employmenttype" class="icheck" data-radio="iradio_flat-blue"  value="Full-time"> Full-time &nbsp&nbsp&nbsp</label>' ; } ?>
                                                                    <label>
                                                                         <?php if (@$_POST['employmenttype'] == "Part-time") { 
                                                                        echo '  <input type="radio" name="employmenttype" checked class="icheck" data-radio="iradio_flat-blue"  value="Part-time"> Part-time </label>' ; } else 
                                                                      {  echo '  <input type="radio" name="employmenttype" class="icheck" data-radio="iradio_flat-blue"  value="Part-time"> Part-time </label>'; } ?>
                                                                       
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                        

                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Contract Type<span class="required"> * </span></label>
                                                        <div class="col-md-8">
                                                            <div class="input-group">
                                                                <div class="icheck-inline">
                                                                    <label>
                                                                        <?php if (@$_POST['perment'] == "Permanent") { 
                                                                        echo '<input type="radio" name="perment" checked class="icheck" data-radio="iradio_flat-blue"  value="Permanent"> Permanent </label>' ; } else 
                                                                      {  echo '<input type="radio" name="perment" class="icheck" data-radio="iradio_flat-blue"  value="Permanent"> Permanent </label>'; } ?>
                                                                    <label>
                                                                        <?php if (@$_POST['perment'] == "Contract") { 
                                                                        echo '<input type="radio" name="perment" checked class="icheck" data-radio="iradio_flat-blue"  value="Contract"> Contract </label>' ; } else 
                                                                      {  echo '<input type="radio" name="perment" class="icheck" data-radio="iradio_flat-blue"  value="Contract"> Contract </label>'; } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    

                         
                                                <input type="hidden" name="org" data-required="1" class="form-control" value="SFHM" />
                                                    <input type="hidden" name="city" data-required="1" class="form-control" value="MAKKAH" />
                                             
                                                    
                                                </div>
                                                <!-- <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn green">Submit</button>
                                                            <button type="button" class="btn default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            <!--</form>--> 
                                            <!-- END FORM-->
                                        </div>
                                        <!-- END VALIDATION STATES-->
                                    </div>
                                         
                                    <!-- END VALIDATION STATES-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-green"></i>
                                                <span class="caption-subject font-green sbold uppercase">English Form</span>
                                            </div>
                                            <div class="actions">
                                                 <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <!-- BEGIN FORM-->
                                          <!--  <form action="#" method="post" id="form_sample_3" class="form-horizontal"> -->
                                                <div class="form-body">
                                                    <!--<div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>-->
                                           
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Position Name en
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php echo @$_POST['jobnameen']; ?>" name="jobnameen" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    
                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">Department en
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php echo @$_POST['dept']; ?>" name="dept" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    
                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">subject1 en
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php echo @$_POST['sub1en']; ?>" name="sub1en" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">jobdesc1 en<span class="required"> * </span></label>
                                                        <div class="col-md-8">
                                                            <textarea name="desc1en" data-provide="markdown" value="<?php echo @$_POST['desc1en']; ?>" rows="10" data-error-container="#editor_error1"><?php echo @$_POST['desc1en']; ?></textarea>
                                                            <div id="editor_error"> </div>
                                                        </div>
                                                    </div>
                                                    
                                                      <div class="form-group">
                                                        <label class="control-label col-md-3">subject2 en
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php echo @$_POST['sub2en']; ?>" name="sub2en" data-required="1" class="form-control" /> </div>
                                                    </div>

                                                 <!--   <div class="form-group last">
                                                        <label class="control-label col-md-3">CKEditor
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea class="ckeditor form-control" name="desc2en" rows="6" data-error-container="#editor2_error" value="<?php //echo @$_POST['desc2en']; ?>"><?php //echo @$_POST['desc2en']; ?></textarea>
                                                            <div id="editor2_error"> </div>
                                                        </div>
                                                    </div>
                                                     -->
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">jobdesc2 en<span class="required"> * </span></label>
                                                        <div class="col-md-8">
                                                            <textarea name="desc2en" data-provide="markdown" value="<?php echo @$_POST['desc2en']; ?>" rows="10" data-error-container="#editor_error3"><?php echo @$_POST['desc2en']; ?></textarea>
                                                            <div id="editor_error"> </div>
                                                        </div>
                                                    </div>

                                                </div>
                                              <!--  <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn green">Submit</button>
                                                            <button type="button" class="btn default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                           <!-- </form> -->
                                            <!-- END FORM-->
                                        </div>
                                        <!-- END VALIDATION STATES-->
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-green"></i>
                                                <span class="caption-subject font-green sbold uppercase">Arabic Form</span>
                                            </div>
                                            <div class="actions">
                                                <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <!-- BEGIN FORM-->
                                          <!--  <form method="post" id="form_sample_3" class="form-horizontal"> -->
                                                <div class="form-body">
                                                 <!--   <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                                    <div class="alert alert-success display-hide">
                                                        <button class="close" data-close="alert"></button> Your form validation is successful! </div>-->
                                                        
                                                  
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Position Name ar
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php echo @$_POST['jobnamear']; ?>" name="jobnamear" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                     <div class="form-group">
                                                        <label class="control-label col-md-3">Department ar
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php echo @$_POST['deptar']; ?>" name="deptar" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">subject1 ar
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php echo @$_POST['sub1ar']; ?>" name="sub1ar" data-required="1" class="form-control" /> </div>
                                                    </div>

                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">jobdesc ar<span class="required"> * </span></label>
                                                        <div class="col-md-8">
                                                            <textarea name="desc1ar" data-provide="markdown" value="<?php echo @$_POST['desc1ar']; ?>" rows="10" data-error-container="#editor_error1"><?php echo @$_POST['desc1ar']; ?></textarea>
                                                            <div id="editor_error"> </div>
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">subject2 ar 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-8">
                                                            <input type="text" value="<?php echo @$_POST['sub2ar']; ?>" name="sub2ar" data-required="1" class="form-control" /> </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">jobdesc en<span class="required"> * </span></label>
                                                        <div class="col-md-8">
                                                            <textarea name="desc2ar" data-provide="markdown" value="<?php echo @$_POST['desc2ar']; ?>" rows="10" data-error-container="#editor_error1"><?php echo @$_POST['desc2ar']; ?></textarea>
                                                            <div id="editor_error"> </div>
                                                        </div>
                                                    </div>
                                                                             
               
                                                  
                                                  <!--  <div class="form-group">
                                                        <label class="col-md-3 control-label">Email Address
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </span>
                                                                <input type="email" name="email" class="form-control" placeholder="Email Address"> </div>
                                                                <span class="help-block"> e.g: abc@abc.com or http://demo.com </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Datepicker</label>
                                                        <div class="col-md-4">
                                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                                <input type="text" class="form-control" readonly name="datepicker">
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group --
                                                            <span class="help-block"> select a date </span>
                                                        </div>
                                                    </div>
  
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">Services
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="checkbox-list" data-error-container="#form_2_services_error">
                                                                <label>
                                                                    <input type="checkbox" value="1" name="service" /> Service 1 </label>
                                                                <label>
                                                                    <input type="checkbox" value="2" name="service" /> Service 2 </label>
                                                                <label>
                                                                    <input type="checkbox" value="3" name="service" /> Service 3 </label>
                                                            </div>
                                                            <span class="help-block"> (select at least two) </span>
                                                            <div id="form_2_services_error"> </div>
                                                        </div>
                                                    </div> -->
                                                    
                                                </div>
                                              <!--  <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn green">Submit</button>
                                                            <button type="button" class="btn default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                           <!-- </form> -->
                                            <!-- END FORM-->
                                        </div>
                                        <!-- END VALIDATION STATES-->
                                    </div>
                                </div>
                                
                            </div>
                            <div class="m-heading-1 border-green m-bordered">
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="text-center">
                                            <button type="submit" class="btn green">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form>
                            
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
        <script src="require/js/addjobs.js" type="text/javascript"></script>
        
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