

<?php $password = "123" ; ?>

<?php

@require_once('require/api/db.php');
@require_once('require/api/studentAPI.php');

if(empty($_GET['idnumber'])){
      header("Location: view.php?viewerror=errorab");
    die ('error');
}

 $info =  form_get_by_idnumber(trim($_GET['idnumber'])); /* */
 
 ?>
 


<!DOCTYPE html>

<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>المعلومات</title>
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
     <?php $view="active" ?>
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
                            <h1> معلومات الطالب 
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
                                <span>المعلومات</span>
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
                                                <span class="caption-subject font-green bold uppercase">معلومات الطالب</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                             <?php      
                                            
                                            if   (isset($_GET['p'] ) && $_GET['p'] == $password  )  {
                                                ?>
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
                                                		
                                                	<div class="form-group">
                                                	    <div class="col-md-12">
                                                            <div class="caption">
                                                                <h3>
                                                                
                                                                <span class="caption-subject font-green bold uppercase"> أولا : البيانات الشخصية </span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-1"> المرحلة الدراسية
                                                        </label>
                                                        <div class="col-md-2">
                                                                <?php echo @$info->level ; ?> 
                                                        </div>
                                                        <label class=" col-md-1"> الصف الدراسي  
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->class ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> الفصل  
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->semester ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> الجنسية  
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->nationality ; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" col-md-1">رقم السجل المدني / الإقامة  
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->idnumber ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> تاريخها  
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->iddate ; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" col-md-1">   الاسم الرباعي بالعربي 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->aname1 ; ?>
                                                        </div>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->aname2 ; ?>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->aname3 ; ?>
                                                        </div>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->aname4 ; ?>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class=" col-md-1">   الاسم الرباعي بالانجليزي 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->ename1 ; ?>
                                                        </div>
                                                    
                                                        <div class="col-md-2">
                                                             <?php echo @$info->ename2 ; ?>
                                                        </div>
                                                   
                                                        <div class="col-md-2">
                                                             <?php echo @$info->ename3 ; ?>
                                                        </div>
                                                   
                                                        <div class="col-md-2">
                                                             <?php echo @$info->ename4 ; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" col-md-1">  رقم جواز السفر 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->passport ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> تاريخ الميلاد   
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->birthdate ; ?>
                                                        </div>
                                                        <label class=" col-md-1">  دولة الميلاد  
                                                        </label>
                                                        <div class="col-md-2">
                                                           <?php echo @$info->countrybirth ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> مدينة الميلاد  
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->citybirth ; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" col-md-1">   فئة الدم  
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->bloodtype ; ?>
                                                        </div>
                                                        <label class=" col-md-1">   ملكية السكن 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->ownershiphousing ; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                	    <div class="col-md-12">
                                                            <div class="caption">
                                                                <h3>
                                                               
                                                                <span class="caption-subject font-green bold uppercase"> ثانيا : بيانات الاتصال</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" col-md-1">  المنطقة الادارية 
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->administrativeregion ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> المدينة 
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->city ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> الحي  
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->district ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> الشارع الرئيسي  
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->mainstreet ; ?>
                                                        </div>
                                                    </div>   
                                                     <div class="form-group">
                                                        <label class=" col-md-1">    الشارع الفرعي 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->substreet ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> رقم المنزل 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->housenumber ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> البريد الالكتروني  
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->email ; ?>
                                                        </div>
                                                        <label class=" col-md-1">   الرمز البريدي 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->postalcode ; ?>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class=" col-md-1">    صندوق البريد 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->mailbox ; ?>
                                                        </div>
                                                        <label class=" col-md-1">  الفاكس 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->fax ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> العنوان في أمرزة   
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->addressin ; ?>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                	    <div class="col-md-12">
                                                            <div class="caption">
                                                                <h4>
                                                                
                                                                <span class="caption-subject font-green bold uppercase">  بيانات ولي أمر الطالب </span>
                                                                </h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class=" col-md-1">   اسم ولي الأمر  
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->guardianname ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> الجنسية  
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->gnationality ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> صلة القرابة 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->relativerelation ; ?>
                                                        </div>
                                                        <label class=" col-md-1">   نوع الهوية 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->identitytype ; ?>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class=" col-md-1">    تاريخها 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->identitydate ; ?>
                                                        </div>
                                                        <label class=" col-md-1">  مصدرها 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->source ; ?>
                                                        </div>
                                                        <label class=" col-md-1">  نهايتها    
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->end ; ?>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class=" col-md-1">     رقم هاتف المنزل 
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->homephonenumber ; ?>
                                                        </div>
                                                        <label class=" col-md-1">  رقم هاتف الجوال 
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->mobilephonenumber ; ?>
                                                        </div>
                                                        <label class=" col-md-1"> رقم هاتف العمل 
                                                        </label>
                                                        <div class="col-md-2">
                                                           <?php echo @$info->workphonenumber ; ?>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class=" col-md-1"> اسم قريب للطفل  
                                                        </label>
                                                        <div class="col-md-2">
                                                           <?php echo @$info->nname1 ; ?>
                                                        </div>
                                                        <label class=" col-md-1">    الهاتف 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->nphone1 ; ?>
                                                        </div>
                                                        <label class=" col-md-1">   العنوان 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->naddress1 ; ?>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class=" col-md-1"> اسم قريب للطفل  
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->nname2 ; ?>
                                                        </div>
                                                        <label class=" col-md-1">    الهاتف 
                                                        </label>
                                                        <div class="col-md-2">
                                                            <?php echo @$info->nphone2 ; ?>
                                                        </div>
                                                        <label class=" col-md-1">   العنوان 
                                                        </label>
                                                        <div class="col-md-2">
                                                             <?php echo @$info->naddress2 ; ?>
                                                        </div>
                                                    </div> 
                                                    
                                                </div>
                                                <!--<div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-1 col-md-9">
                                                            <button type="submit" class="btn green"> إرسال </button>
                                                        </div>
                                                    </div>
                                                </div>-->
                                            </form>
                                            <!-- END FORM-->
                                            <?php } ?>
                                            <?php } else { ?>
                                            <!-- BEGIN FORM-->
                                            <form  action="?hgj=dgfjgh&jhjl=hgjghg" id="form_sample_3" class="form-horizontal">
                                                    <input type="hidden" name="idnumber" class="form-control" value="<?php echo $info->idnumber ;  ?>" />    
                                                    <input type="hidden" name="id" class="form-control" value="56 56" /> 
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">كلمة السر  
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </span>
                                                                <input type="password" name="p" class="form-control" placeholder="كلمة المرور " > </div>
                                                                <span class="help-block">كلمة السر  </span>
                                                        </div>
                                                    </div>
                                                  
                                                    
                                                      <input type="hidden" name="sdfh" class="form-control" value="aa55862" />    
                                                        <input type="hidden" name="dgh" class="form-control" value="dhgd" />  
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green" >عرض</button>
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