
<?php



@require_once('require/api/db.php');
@require_once('require/api/formAPI.php');

 
		      
if(isset($_POST['name'])){
   
   $user = form_get_by_idnumber(@$_POST['idnumber']);
   if ($user->idnumber == $_POST['idnumber'] )
   
                          // if ($user != NULL)

                             {
                                /*       $rcount =@count($user);
                                          for($i = 0 ; $i < $rcount; $i++)
                                         {
                                            $res = $user[$i] ;
                                         }
                                     tinyf_db_close();*/
                                     
@$error.=" <br />  يوجد لك ملف هنا ";

                                    // die();
                             }

if(@$error) {
		$result='<div class="alert alert-danger"><strong>  ملاحظة :  </strong>'.$error.'</div>';
		} else
		
		{
		    

            $name = $_FILES['att']['name']; $tmp_name = $_FILES['att']['tmp_name'];
            $type = $_FILES['att']['type']; $size = $_FILES['att']['size']; $error = $_FILES['att']['error'];
            $idnumber = $_POST['idnumber'];$uniqid = uniqid();
            $file_name = $idnumber . '.' . $uniqid . '.' . $name  ;
            { if(move_uploaded_file($tmp_name, "file/".$file_name)){ $att = $file_name; } else {  $att = '' ; } }
		    
                         @$result = form_add($_POST['name'],$_POST['bdate'],$_POST['age'],$_POST['sex'],$_POST['idnumber'],$_POST['fidnumber'],$_POST['city'],$_POST['phone1'],$_POST['phone2'],trim($att));
                         tinyf_db_close();
                         
                         	
                         if($result)
                             {
                                 // header("Location: inventorytable.php?done=123");
                                  header("Location: ?done=123");
                             }
                         else{
                         header("Location: ?error=1");
                         }
                         
		 
                         
                         
	        	}
}    	
	        	
	        	

?>







<!DOCTYPE html>

<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>النموذج</title>
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
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        
         <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
     <?php $form="active" ?>
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
                            <h1>نموذج الاشتراك 
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
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            
                            <li>
                                <span>النموذج</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            
             
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-bubble font-green"></i>
                                                <span class="caption-subject font-green bold uppercase">النموذج</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <?php
                                                if(isset($_GET['done'])){echo '<div class="alert alert-success ">
                                                <strong> تم إضافة بياناتك بنجاح , وشكرا . </strong></div>';}
                                            ?>
                                                <?php if(!isset($_GET['done'])){ ?>		
                                            <!-- BEGIN FORM-->
                                            <form method="post" id="form_sample_2" class="form-horizontal" enctype="multipart/form-data">
                                                <div class="form-body">
                                                    <div class="alert alert-danger display-hide">
                                                        <button class="close" data-close="alert"></button> يوجد خطأ في النموذج , يرجى التأكد منه </div>
                                                    
                                                        <?php
                                                         if(@$error) {
                                                		echo '<div class="alert alert-danger"><button class="close" data-close="alert"></button><strong> يوجد خطأ في النموذج يرجى التأكد منه  </strong></div>';
                                                		}
                                                		?>
                                                		
                                                		
                                                    <div class="form-group  margin-top-20">
                                                        <label class="control-label col-md-3">الإسم الرباعي
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="name" value="<?php echo @$_POST['name']; ?>" /> </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">تاريخ الميلاد<span class="required"> * </span></label>
                                                        <div class="col-md-4">
                                                            <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                                <input required type="text" autocomplete="off" class="readonly form-control"  name="bdate" value="<?php echo @$_POST['bdate']; ?>"  /> 
                                                                <span class="input-group-btn">
                                                                    <button class="btn default" type="button">
                                                                        <i class="fa fa-calendar"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                            <!-- /input-group -->
                                                            <span class="help-block"> أضف تاريخ ميلادك </span>
                                                        </div>
                                                    </div>
                                                                
                                             
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">العمر
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="age" value="<?php echo @$_POST['age']; ?>" /> </div>
                                                            <span class="help-block"> </span>
                                                        </div>
                                                    </div>
                                                
                                                    
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label"> الجنس <span class="required"> * </span></label>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <div class="icheck-inline">
                                                                   <label> <input type="radio" name="sex" class="icheck" data-radio="iradio_flat-blue"  value="ذكر">    &nbsp&nbsp&nbsp    ذكر   </label>
                                                                   <label> <input type="radio" name="sex" class="icheck" data-radio="iradio_flat-blue"  value="أنثى">  &nbsp&nbsp&nbsp   أنثى  </label>
                                                                     
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3"> رقم الهوية
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="idnumber" value="<?php echo @$_POST['idnumber']; ?>" /> </div>
                                                                <span class="help-block"> مثال : 1234567890 </span>
                                                                  <?php     if(@$error) {
                                                            		echo '<div class="alert alert-danger"><button class="close" data-close="alert"></button><strong>تنبيه : </strong>'.$error.'</div>';
                                                            		}?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">رقم هوية الوالد 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="fidnumber" value="<?php echo @$_POST['fidnumber']; ?>" /> </div>
                                                            <span class="help-block"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3"> مكان السكن
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="city" value="<?php echo @$_POST['city']; ?>" /> </div>
                                                            <span class="help-block"> مثال : مكة </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3"> رقم الجوال 1
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="phone1" value="<?php echo @$_POST['phone1']; ?>" /> </div>
                                                            <span class="help-block"> </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3"> رقم الجوال 2
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="phone2" value="<?php echo @$_POST['phone2']; ?>" /> </div>
                                                            <span class="help-block"> </span>
                                                        </div>
                                                    </div>
                                                    
                                                  
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3">تحميل الصورة </label>
                                                        <div class="col-md-4">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <span class="btn green btn-file">
                                                                    <span class="fileinput-new"> اختيار الصورة </span>
                                                                    <span class="fileinput-exists"> تغيير </span>
                                                                    <input type="file" name="att"> </span>
                                                                <span class="fileinput-filename"> </span> &nbsp;
                                                                <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <button type="submit" class="btn green"> إرسال </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END FORM-->
                                            <?php } ?>
                                            
                                            
                                        </div>
                                    </div>
                                    <!-- END VALIDATION STATES-->
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        
           <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
        
        
        
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