
<?php



@require_once('require/api/db.php');
@require_once('require/api/studentAPI.php');

 
		      
if(isset($_POST['idnumber'])){
   
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
		    
		    $level                 =  $_POST['level'] ;
            $class                 =  $_POST['class'] ;
            $semester              =  $_POST['semester'] ;
            $nationality           =  $_POST['nationality'] ;
            $idnumber              =  $_POST['idnumber'] ;
            $iddate                =  $_POST['iddate'] ;
            $aname1                =  $_POST['aname1'] ;
            $aname2                =  $_POST['aname2'] ;
            $aname3                =  $_POST['aname3'] ;
            $aname4                =  $_POST['aname4'] ;
            $ename1                =  $_POST['ename1'] ;
            $ename2                =  $_POST['ename2'] ;
            $ename3                =  $_POST['ename3'] ;
            $ename4                =  $_POST['ename4'] ;
            $passport              =  $_POST['passport'] ;
            $birthdate             =  $_POST['birthdate'] ;
            $countrybirth          =  $_POST['countrybirth'] ;
            $citybirth             =  $_POST['citybirth'] ;
            $bloodtype             =  $_POST['bloodtype'] ;
            $ownershiphousing      =  $_POST['ownershiphousing'] ;
            $administrativeregion  =  $_POST['administrativeregion'] ;
            $city                  =  $_POST['city'] ;
            $district              =  $_POST['district'] ;
            $mainstreet            =  $_POST['mainstreet'] ;
            $substreet             =  $_POST['substreet'] ;
            $housenumber           =  $_POST['housenumber'] ;
            $email                 =  $_POST['email'] ;
            $postalcode            =  $_POST['postalcode'] ;
            $mailbox               =  $_POST['mailbox'] ;
            $fax                   =  $_POST['fax'] ;
            $addressin             =  $_POST['addressin'] ;
            $guardianname          =  $_POST['guardianname'] ;
            $gnationality          =  $_POST['gnationality'] ;
            $relativerelation      =  $_POST['relativerelation'] ;
            $identitytype          =  $_POST['identitytype'] ;
            $identitydate          =  $_POST['identitydate'] ;
            $source                =  $_POST['source'] ;
            $end                   =  $_POST['end'] ;
            $homephonenumber       =  $_POST['homephonenumber'] ;
            $mobilephonenumber     =  $_POST['mobilephonenumber'] ;
            $workphonenumber       =  $_POST['workphonenumber'] ;
            $nname1                =  $_POST['nname1'] ;
            $nphone1               =  $_POST['nphone1'] ;
            $naddress1             =  $_POST['naddress1'] ;
            $nname2                =  $_POST['nname2'] ;
            $nphone2               =  $_POST['nphone2'] ;
            $naddress2             =  $_POST['naddress2'] ;
		    
@$result = form_add($level,$class,$semester,$nationality,$idnumber,$iddate,$aname1,$aname2,$aname3,$aname4,$ename1,$ename2,$ename3,$ename4,$passport,$birthdate,$countrybirth,$citybirth,$bloodtype,$ownershiphousing,$administrativeregion,$city,$district,$mainstreet,$substreet,$housenumber,$email,$postalcode,$mailbox,$fax,$addressin,$guardianname,$gnationality,$relativerelation,$identitytype,$identitydate,$source,$end,$homephonenumber,$mobilephonenumber,$workphonenumber,$nname1,$nphone1,$naddress1,$nname2,$nphone2,$naddress2);
                       
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
                    <div class="container-fluid">
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
                    <div class="container-fluid">
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
                              
                                                    	echo '<div class="alert alert-danger"><button class="close" data-close="alert"></button><strong> رقم السجل المدني موجود مسبقا  </strong></div>';
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
                                                        <label class="control-label col-md-1"> المرحلة الدراسية
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="level" value="<?php echo @$_POST['level']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> الصف الدراسي 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="class" value="<?php echo @$_POST['class']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> الفصل 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="semester" value="<?php echo @$_POST['semester']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> الجنسية 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="nationality" value="<?php echo @$_POST['nationality']; ?>" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label class="control-label col-md-1">رقم السجل المدني / الإقامة 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="idnumber" value="<?php echo @$_POST['idnumber']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> تاريخها 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="iddate" value="<?php echo @$_POST['iddate']; ?>" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">   الاسم الرباعي بالعربي
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="aname1" value="<?php echo @$_POST['aname1']; ?>" /> </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="aname2" value="<?php echo @$_POST['aname2']; ?>" /> </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="aname3" value="<?php echo @$_POST['aname3']; ?>" /> </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="aname4" value="<?php echo @$_POST['aname4']; ?>" /> </div>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-1">   الاسم الرباعي بالانجليزي
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="ename1" value="<?php echo @$_POST['ename1']; ?>" /> </div>
                                                        </div>
                                                    
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="ename2" value="<?php echo @$_POST['ename2']; ?>" /> </div>
                                                        </div>
                                                   
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="ename3" value="<?php echo @$_POST['ename3']; ?>" /> </div>
                                                        </div>
                                                   
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="ename4" value="<?php echo @$_POST['ename4']; ?>" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">  رقم جواز السفر
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="passport" value="<?php echo @$_POST['passport']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> تاريخ الميلاد  
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="birthdate" value="<?php echo @$_POST['birthdate']; ?>" /> </div>
                                                                <!--<span class="help-block"> أضف تاريخ ميلادك </span>  -->
                                                        </div>
                                                        <label class="control-label col-md-1">  دولة الميلاد 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="countrybirth" value="<?php echo @$_POST['countrybirth']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> مدينة الميلاد 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="citybirth" value="<?php echo @$_POST['citybirth']; ?>" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">   فئة الدم 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="bloodtype" value="<?php echo @$_POST['bloodtype']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">   ملكية السكن
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="ownershiphousing" value="<?php echo @$_POST['ownershiphousing']; ?>" /> </div>
                                                        </div>
                                                    </div> <hr>
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
                                                        <label class="control-label col-md-1">  المنطقة الادارية
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="administrativeregion" value="<?php echo @$_POST['administrativeregion']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> المدينة
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="city" value="<?php echo @$_POST['city']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> الحي 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="district" value="<?php echo @$_POST['district']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> الشارع الرئيسي 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="mainstreet" value="<?php echo @$_POST['mainstreet']; ?>" /> </div>
                                                        </div>
                                                    </div>   
                                                     <div class="form-group">
                                                        <label class="control-label col-md-1">    الشارع الفرعي
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="substreet" value="<?php echo @$_POST['substreet']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> رقم المنزل
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="housenumber" value="<?php echo @$_POST['housenumber']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> البريد الالكتروني 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="email" value="<?php echo @$_POST['email']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">   الرمز البريدي
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="postalcode" value="<?php echo @$_POST['postalcode']; ?>" /> </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">    صندوق البريد
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="mailbox" value="<?php echo @$_POST['mailbox']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">  الفاكس
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="fax" value="<?php echo @$_POST['fax']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> العنوان في أمرزة  
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="addressin" value="<?php echo @$_POST['addressin']; ?>" /> </div>
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
                                                        <label class="control-label col-md-1">   اسم ولي الأمر 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="guardianname" value="<?php echo @$_POST['guardianname']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> الجنسية 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="gnationality" value="<?php echo @$_POST['gnationality']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> صلة القرابة
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="relativerelation" value="<?php echo @$_POST['relativerelation']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">   نوع الهوية
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="identitytype" value="<?php echo @$_POST['identitytype']; ?>" /> </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">    تاريخها
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="identitydate" value="<?php echo @$_POST['identitydate']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">  مصدرها
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="source" value="<?php echo @$_POST['source']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">  نهايتها   
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="end" value="<?php echo @$_POST['end']; ?>" /> </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1">     رقم هاتف المنزل
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="homephonenumber" value="<?php echo @$_POST['homephonenumber']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">  رقم هاتف الجوال
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="mobilephonenumber" value="<?php echo @$_POST['mobilephonenumber']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1"> رقم هاتف العمل
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="workphonenumber" value="<?php echo @$_POST['workphonenumber']; ?>" /> </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1"> اسم قريب للطفل 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="nname1" value="<?php echo @$_POST['nname1']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">    الهاتف
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="nphone1" value="<?php echo @$_POST['nphone1']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">   العنوان
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="naddress1" value="<?php echo @$_POST['naddress1']; ?>" /> </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group">
                                                        <label class="control-label col-md-1"> اسم قريب للطفل 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="nname2" value="<?php echo @$_POST['nname2']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">    الهاتف
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="nphone2" value="<?php echo @$_POST['nphone2']; ?>" /> </div>
                                                        </div>
                                                        <label class="control-label col-md-1">   العنوان
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-2">
                                                            <div class="input-icon right">
                                                                <i class="fa"></i>
                                                                <input type="text" class="form-control" name="naddress2" value="<?php echo @$_POST['naddress2']; ?>" /> </div>
                                                        </div>
                                                    </div>    
                                                    
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-1 col-md-9">
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