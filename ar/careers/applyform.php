


<?php

$trimjobnumber = trim($_GET['jobnumber']) ;
 if(!isset($trimjobnumber)){
      header("Location: jobs.php?viewerror=erorr1");
 }
 

@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');
@require_once('require/api/rappAPI.php');
@require_once('require/api/addresumesAPI.php');

 $userdate = jobs_get_by_jobnumber(trim($_GET['jobnumber']));
                                              
                                              date_default_timezone_set("Asia/Riyadh");
                                                $date1 = substr($userdate->ldate,0,10);
                                                $date2 = substr($userdate->ldate,-10);
                                              $datenow = Date('d-m-Y') ;

                                            if(strtotime($date1) >  strtotime($datenow) || strtotime($datenow)  > strtotime($date2)) { 
                                                header("Location: jobdisplay.php?dateerror=erorr&jobnumber=$trimjobnumber");
                                                die();
                                            }
                                            

   if(isset($_GET['jobnumber'])){
                $enjob       =   jobsen_get_by_jobnumber(trim($_GET['jobnumber']));
                $arjob       =   jobsar_get_by_jobnumber(trim($_GET['jobnumber']));
                $jobsnocheck =   jobs_get_by_jobnumber(trim($_GET['jobnumber']));
            if ($jobsnocheck){
               
           
                        $jobs = jobs_get("WHERE `jobnumber` = ".trim($_GET['jobnumber'])."") ;
                        tinyf_db_close();
                         $ucount = @count($jobs) ;
                        // echo $ucount ;
                           /*  for($i = 0 ; $i < $ucount; $i++)
                                     {
                                        $res = $jobs[$i];
                                       echo  "$res->id" ;
                                     }*/
                                     
                                  //    if ($ucount == 0){
                                  //        header("Location: ?done=123");
                                   //       die();
                                   //   }
                                     
                          /*    if ($ucount != 0)
                         {
                              @$error.=" <br /> This job number is added in the table before";
                         }  
                        if(@$error) {
                        	  $result='<div class="alert alert-danger"><strong>There were error(s) in your form: </strong>'.$error.'</div>';
                        		}  else */
            		
                               @$idnumber = trim($_POST['idnumber']);
                               
                                $idnumbercheck = rapp_get_by_idnumber($idnumber);
                                if ($idnumbercheck){
                                          //           @$error.=" <br /> This Id number is exist in the table before";
                                           //           }
                                           //    if(@$error) {
                                        	//  $result='<div class="alert alert-danger"><strong>There were error(s) in your form: </strong>'.$error.'</div>';  
                                    header("Location: login.php?iderror=erorr&idnumber=$idnumber");
                                                die();
                                                   }else{
                                                        $name = $_FILES['file']['name']; $tmp_name = $_FILES['file']['tmp_name'];
                                                        $type = $_FILES['file']['type']; $size = $_FILES['file']['size']; $error = $_FILES['file']['error'];
                                                        $uniqid = uniqid();
                                                        $file_name = $idnumber.'.'.$uniqid.'.'.$name  ;
                                                        if(move_uploaded_file($tmp_name, "../../en/careers/file/".$file_name)){ $cvatt = $file_name; } else {  $cvatt = 'null' ; }
                                                        
                                                        
                                                     @$result = rapp_add(trim($_POST['idnumber']),trim($_GET['jobnumber']),$rno=null,trim($_POST['afullname']),trim($_POST['efullname']),trim($_POST['bdate']),trim($_POST['email']),$_POST['phone'],$pass=null,$approval=null,$acceptance=null).
                                                     rid_add(trim($_POST['idnumber']),$expire=null,$_POST['country'],$_POST['city'],$_POST['gender'],$_POST['mstatus'],$idatt=null).
                                                     reducation_add(trim($_POST['idnumber']),$_POST['universityname'],$_POST['degree'],$_POST['major'],$_POST['universitydate'],$_POST['universitycountry'],$_POST['universitycity'],$_POST['grad'],$ceratt=null,$traatt=null,$cvatt).rinfo_add(trim($_POST['idnumber']));
                                                     if($result)
                                                     {
                                                          $idno = rapp_get_by_idnumber(trim($_POST['idnumber'])) ;
                                                                $bid =  $idno->id ;
                                                                $y = date("Y");
                                                                $ref = $y.$bid ;
                                                                $_id = (int)$bid;
                                                    
                                                                if($_id == 0){
                                                                    die('Bad Access 2');
                                                                }
                                                                $spass = rapp_update($_id,$ref,$ref);
                                                                 if($spass){
                                                                         header("Location: login.php?idnumber=".$idno->idnumber."&pass=".$ref."");
                                                                         die(); 
                                                                    }else{
                                                                         die("failur5"); }
                                                         header("Location: ?idnumberr1=".$_POST['idnumber']."");
                                                     }
                                          }
                    }else{
                         header("Location: jobs.php?viewerror=erorr2");
                    }
}

?>







<!DOCTYPE html>

<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>نموذج التقديم</title>
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
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
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
                            <h1>نموذج التقديم
                                <small>نموذج التقديم</small>
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
                                <a href="jobs.php">الوظائف </a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="jobdisplay.php?jobnumber=<?php echo $arjob->jobnumber ?>"><?php echo $arjob->jobname ?></a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>نموذج التقديم </span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="portlet light " id="form_wizard_1">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class=" icon-layers font-red"></i>
                                                <span class="caption-subject font-red bold uppercase"> نموذج التقديم -
                                                    <span class="step-title"> خطوة 1 من 4 </span>
                                                </span>
                                            </div>
                                            <div class="actions">
                                               <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                                            </div>
                                        </div>
                                        <div class="portlet-body form">
                                            <form method="post" class="form-horizontal" id="submit_form" enctype="multipart/form-data">
                                                <div class="form-wizard">
                                                    <div class="form-body">
                                                        <ul class="nav nav-pills nav-justified steps">
                                                            <li>
                                                                <a href="#tab1" data-toggle="tab" class="step">
                                                                    <span class="number"> 1 </span>
                                                                    <span class="desc">
                                                                        <i class="fa fa-check"></i> الاسم و معلومات الاتصال </span>
                                                                </a>
                                                            </li>
                                                           
                                                            <li>
                                                                <a href="#tab2" data-toggle="tab" class="step">
                                                                    <span class="number"> 2 </span>
                                                                    <span class="desc">
                                                                        <i class="fa fa-check"></i> معلومات عامة </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab3" data-toggle="tab" class="step active">
                                                                    <span class="number"> 3 </span>
                                                                    <span class="desc">
                                                                        <i class="fa fa-check"></i> التعليم </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab4" data-toggle="tab" class="step">
                                                                    <span class="number"> 4 </span>
                                                                    <span class="desc">
                                                                        <i class="fa fa-check"></i> التأكيد </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                                            <div class="progress-bar progress-bar-success"> </div>
                                                        </div>
                                                        <div class="tab-content">
                                                            <div class="alert alert-danger display-none">
                                                                <button class="close" data-dismiss="alert"></button> يوجد بعض الأخطاء في النموذج . يرجى التأكد منها </div>
                                                            <div class="alert alert-success display-none">
                                                                <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                            <div class="tab-pane active" id="tab1">
                                                                <h3 class="block">معلومات الإسم</h3>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الإسم باللغة الإنجليزية
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="efullname" value="<?php echo @$_POST['efullname']; ?>" />
                                                                        <span class="help-block"> أكتب إسمك كامل باللغة الإنجليزية </span>
                                                                    </div>
                                                                </div>
                                                                
                                                                
                                                            
                                                    
                                                    
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الإسم باللغة العربية
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="afullname" value="<?php echo @$_POST['afullname']; ?>" />
                                                                        <span class="help-block">أكتب إسمك كامل باللغة العربية </span>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الإيميل
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="email" value="<?php echo @$_POST['email']; ?>" />
                                                                        <span class="help-block"> أضف بريدك الإلكتروني</span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الجوال
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="phone" value="<?php echo @$_POST['phone']; ?>" />
                                                                        <span class="help-block"> أضف رقم الجوال </span>
                                                                    </div>
                                                                </div>
                                                                
                                                                <!--<div class="form-group">
                                                                    <label class="control-label col-md-3">Password
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="password" class="form-control" name="password" id="submit_form_password" />
                                                                        <span class="help-block"> Provide your password. </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Confirm Password
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="password" class="form-control" name="rpassword" />
                                                                        <span class="help-block"> Confirm your password </span>
                                                                    </div>
                                                                </div>-->
                                                                
                                                            </div>
                                                            
                                                            <div class="tab-pane" id="tab2">
                                                                <h3 class="block">معلومات عامة </h3>
                                                                
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">رقم الهوية 
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="idnumber" value="<?php echo @$_POST['idnumber']; ?>" />
                                                                        <span class="help-block"> أكتب رقم بطاقة الهوية </span>
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
                                                                
                                                                <!--<div class="form-group">
                                                                    <label class="control-label col-md-3">Birth Date
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" id="mask_date2" placeholder="DD-MM-YYYY" name="bdate" value="<?php // echo @$_POST['bdate']; ?>" />
                                                                        <span class="help-block"> e.g 02-05-2008 </span>
                                                                    </div>
                                                                </div>-->
                                                               
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الجنس
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <div class="radio-list">
                                                                            <label>
                                                                                <input type="radio" name="gender" value="ذكر" data-title="Male" /> ذكر </label>
                                                                            <label>
                                                                                <input type="radio" name="gender" value="أنثى" data-title="Female" /> أنثى </label>
                                                                        </div>
                                                                        <div id="form_gender_error"> </div>
                                                                    </div>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label class="control-label col-md-3">الحالة الاجتماعية
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <div class="radio-list">
                                                                            <label>
                                                                                <input type="radio" name="mstatus" value="أعزب" data-title="Single" /> أعزب </label>
                                                                            <label>
                                                                                <input type="radio" name="mstatus" value="متزوج" data-title="Married" /> متزوج </label>
                                                                        </div>
                                                                        <div id="form_gender_error"> </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">المدينة 
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="city" value="<?php echo @$_POST['city']; ?>" />
                                                                        <span class="help-block"> المدينة التي تسكن بها </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الدولة 
                                                                    <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <select name="country" id="country_list" class="country_list form-control">
                                                                            <option value="<?php echo @$_POST['country']; ?>"></option>
                                                                            <option value="Afghanistan">Afghanistan</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="American">American Samoa</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrain">Bahrain</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Belarus">Belarus</option>
                                                                            <option value="Belgium">Belgium</option>
                                                                            <option value="Belize">Belize</option>
                                                                            <option value="Benin">Benin</option>
                                                                            <option value="Bermuda">Bermuda</option>
                                                                            <option value="Bhutan">Bhutan</option>
                                                                            <option value="Bolivia">Bolivia</option>
                                                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                                            <option value="Brazil">Brazil</option>
                                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="Cambodia">Cambodia</option>
                                                                            <option value="Cameroon">Cameroon</option>
                                                                            <option value="Canada">Canada</option>
                                                                            <option value="Cape Verde">Cape Verde</option>
                                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                                            <option value="Central African Republic">Central African Republic</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Christmas Island">Christmas Island</option>
                                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comoros">Comoros</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                                            <option value="Cook Islands">Cook Islands</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Cyprus">Cyprus</option>
                                                                            <option value="Czech Republic">Czech Republic</option>
                                                                            <option value="Denmark">Denmark</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egypt">Egypt</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Ethiopia">Ethiopia</option>
                                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Finland">Finland</option>
                                                                            <option value="France">France</option>
                                                                            <option value="French Guiana">French Guiana</option>
                                                                            <option value="French Polynesia">French Polynesia</option>
                                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                                            <option value="Gabon">Gabon</option>
                                                                            <option value="Gambia">Gambia</option>
                                                                            <option value="Georgia">Georgia</option>
                                                                            <option value="Germany">Germany</option>
                                                                            <option value="Ghana">Ghana</option>
                                                                            <option value="Gibraltar">Gibraltar</option>
                                                                            <option value="Greece">Greece</option>
                                                                            <option value="Greenland">Greenland</option>
                                                                            <option value="Grenada">Grenada</option>
                                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                                            <option value="Guam">Guam</option>
                                                                            <option value="Guatemala">Guatemala</option>
                                                                            <option value="Guinea">Guinea</option>
                                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                            <option value="Guyana">Guyana</option>
                                                                            <option value="Haiti">Haiti</option>
                                                                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hong Kong">Hong Kong</option>
                                                                            <option value="Hungary">Hungary</option>
                                                                            <option value="Iceland">Iceland</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Indonesia">Indonesia</option>
                                                                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                                            <option value="Iraq">Iraq</option>
                                                                            <option value="Ireland">Ireland</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italy">Italy</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Japan">Japan</option>
                                                                            <option value="Jordan">Jordan</option>
                                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                                            <option value="Kenya">Kenya</option>
                                                                            <option value="Kiribati">Kiribati</option>
                                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                            <option value="Latvia">Latvia</option>
                                                                            <option value="Lebanon">Lebanon</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Liberia">Liberia</option>
                                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lithuania">Lithuania</option>
                                                                            <option value="Luxembourg">Luxembourg</option>
                                                                            <option value="Macau">Macau</option>
                                                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Malaysia">Malaysia</option>
                                                                            <option value="Maldives">Maldives</option>
                                                                            <option value="Mali">Mali</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                                            <option value="Martinique">Martinique</option>
                                                                            <option value="Mauritania">Mauritania</option>
                                                                            <option value="Mauritius">Mauritius</option>
                                                                            <option value="Mayotte">Mayotte</option>
                                                                            <option value="Mexico">Mexico</option>
                                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                            <option value="Monaco">Monaco</option>
                                                                            <option value="Mongolia">Mongolia</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Morocco">Morocco</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Myanmar">Myanmar</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Netherlands">Netherlands</option>
                                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                            <option value="New Caledonia">New Caledonia</option>
                                                                            <option value="New Zealand">New Zealand</option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Niger">Niger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="Niue">Niue</option>
                                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                            <option value="Norway">Norway</option>
                                                                            <option value="Oman">Oman</option>
                                                                            <option value="Pakistan">Pakistan</option>
                                                                            <option value="Palau">Palau</option>
                                                                            <option value="Panama">Panama</option>
                                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Philippines">Philippines</option>
                                                                            <option value="Pitcairn">Pitcairn</option>
                                                                            <option value="Poland">Poland</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Reunion">Reunion</option>
                                                                            <option value="Romania">Romania</option>
                                                                            <option value="Russian Federation">Russian Federation</option>
                                                                            <option value="Rwanda">Rwanda</option>
                                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                            <option value="Saint LUCIA">Saint LUCIA</option>
                                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                            <option value="Samoa">Samoa</option>
                                                                            <option value="San Marino">San Marino</option>
                                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra">Sierra Leone</option>
                                                                            <option value="Singapore">Singapore</option>
                                                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                                            <option value="Slovenia">Slovenia</option>
                                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="South Africa">South Africa</option>
                                                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                            <option value="Spain">Spain</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="St. Helena">St. Helena</option>
                                                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                                            <option value="Sudan">Sudan</option>
                                                                            <option value="Suriname">Suriname</option>
                                                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                                            <option value="Swaziland">Swaziland</option>
                                                                            <option value="Sweden">Sweden</option>
                                                                            <option value="Switzerland">Switzerland</option>
                                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                            <option value="Tajikistan">Tajikistan</option>
                                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                            <option value="Thailand">Thailand</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tokelau">Tokelau</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                            <option value="Tunisia">Tunisia</option>
                                                                            <option value="Turkey">Turkey</option>
                                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Ukraine">Ukraine</option>
                                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                                            <option value="United Kingdom">United Kingdom</option>
                                                                            <option value="United State">United States</option>
                                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                                            <option value="Vanuatu">Vanuatu</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Viet Nam">Viet Nam</option>
                                                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                                            <option value="Western Sahara">Western Sahara</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!--<div class="form-group">
                                                                    <label class="control-label col-md-3">Remarks</label>
                                                                    <div class="col-md-4">
                                                                        <textarea class="form-control" rows="3" name="remarks"></textarea>
                                                                    </div>
                                                                </div>-->
                                                            </div>
                                                            <div class="tab-pane" id="tab3">
                                                                <h3 class="block">معلومات الشهادة العلمية </h3>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">اسم الجامعة
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="universityname" value="<?php echo @$_POST['universityname']; ?>" />
                                                                        <span class="help-block">مثال : جامعة أم القرى </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الدرجة
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="degree" value="<?php echo @$_POST['degree']; ?>" />
                                                                        <span class="help-block"> مثال : البكالوريوس </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">التخصص
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" placeholder="" class="form-control" name="major" value="<?php echo @$_POST['major']; ?>" />
                                                                        <span class="help-block">  مثال : هندسة حاسب آلي</span>
                                                                    </div>
                                                                </div>
                                                                  <div class="form-group">
                                                                    <label class="control-label col-md-3"> تاريخ التخرج <span class="required"> * </span></label>
                                                                    <div class="col-md-4">
                                                                        <div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
                                                                            <input required type="text" autocomplete="off" class="readonly form-control"  name="universitydate" value="<?php echo @$_POST['universitydate']; ?>"  /> 
                                                                            <span class="input-group-btn">
                                                                                <button class="btn default" type="button">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                        <!-- /input-group -->
                                                                        <span class="help-block"> حدد تاريخ التخرج </span>
                                                                    </div>
                                                                </div>
                                                                <!--<div class="form-group">
                                                                    <label class="control-label col-md-3">Graduation Date 
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" placeholder="DD-MM-YYYY" id="mask_date22" maxlength="10" class="form-control" name="universitydate" value="<?php // echo @$_POST['universitydate']; ?>" />
                                                                        <span class="help-block"> e.g 02-05-2012 </span>
                                                                    </div>
                                                                </div>-->
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">دولة التخرج</label>
                                                                    <div class="col-md-4">
                                                                        <select name="universitycountry" id="country_list" class="country_list form-control">
                                                                            <option value="<?php echo @$_POST['universitycountry']; ?>"></option>
                                                                           <option value="Afghanistan">Afghanistan</option>
                                                                            <option value="Albania">Albania</option>
                                                                            <option value="Algeria">Algeria</option>
                                                                            <option value="American">American Samoa</option>
                                                                            <option value="Andorra">Andorra</option>
                                                                            <option value="Angola">Angola</option>
                                                                            <option value="Anguilla">Anguilla</option>
                                                                            <option value="Argentina">Argentina</option>
                                                                            <option value="Armenia">Armenia</option>
                                                                            <option value="Aruba">Aruba</option>
                                                                            <option value="Australia">Australia</option>
                                                                            <option value="Austria">Austria</option>
                                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                                            <option value="Bahamas">Bahamas</option>
                                                                            <option value="Bahrain">Bahrain</option>
                                                                            <option value="Bangladesh">Bangladesh</option>
                                                                            <option value="Barbados">Barbados</option>
                                                                            <option value="Belarus">Belarus</option>
                                                                            <option value="Belgium">Belgium</option>
                                                                            <option value="Belize">Belize</option>
                                                                            <option value="Benin">Benin</option>
                                                                            <option value="Bermuda">Bermuda</option>
                                                                            <option value="Bhutan">Bhutan</option>
                                                                            <option value="Bolivia">Bolivia</option>
                                                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                                            <option value="Botswana">Botswana</option>
                                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                                            <option value="Brazil">Brazil</option>
                                                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                                            <option value="Bulgaria">Bulgaria</option>
                                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                                            <option value="Burundi">Burundi</option>
                                                                            <option value="Cambodia">Cambodia</option>
                                                                            <option value="Cameroon">Cameroon</option>
                                                                            <option value="Canada">Canada</option>
                                                                            <option value="Cape Verde">Cape Verde</option>
                                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                                            <option value="Central African Republic">Central African Republic</option>
                                                                            <option value="Chad">Chad</option>
                                                                            <option value="Chile">Chile</option>
                                                                            <option value="China">China</option>
                                                                            <option value="Christmas Island">Christmas Island</option>
                                                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                                            <option value="Colombia">Colombia</option>
                                                                            <option value="Comoros">Comoros</option>
                                                                            <option value="Congo">Congo</option>
                                                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                                            <option value="Cook Islands">Cook Islands</option>
                                                                            <option value="Costa Rica">Costa Rica</option>
                                                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                                            <option value="Cuba">Cuba</option>
                                                                            <option value="Cyprus">Cyprus</option>
                                                                            <option value="Czech Republic">Czech Republic</option>
                                                                            <option value="Denmark">Denmark</option>
                                                                            <option value="Djibouti">Djibouti</option>
                                                                            <option value="Dominica">Dominica</option>
                                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                                            <option value="Ecuador">Ecuador</option>
                                                                            <option value="Egypt">Egypt</option>
                                                                            <option value="El Salvador">El Salvador</option>
                                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                            <option value="Eritrea">Eritrea</option>
                                                                            <option value="Estonia">Estonia</option>
                                                                            <option value="Ethiopia">Ethiopia</option>
                                                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                                            <option value="Fiji">Fiji</option>
                                                                            <option value="Finland">Finland</option>
                                                                            <option value="France">France</option>
                                                                            <option value="French Guiana">French Guiana</option>
                                                                            <option value="French Polynesia">French Polynesia</option>
                                                                            <option value="French Southern Territories">French Southern Territories</option>
                                                                            <option value="Gabon">Gabon</option>
                                                                            <option value="Gambia">Gambia</option>
                                                                            <option value="Georgia">Georgia</option>
                                                                            <option value="Germany">Germany</option>
                                                                            <option value="Ghana">Ghana</option>
                                                                            <option value="Gibraltar">Gibraltar</option>
                                                                            <option value="Greece">Greece</option>
                                                                            <option value="Greenland">Greenland</option>
                                                                            <option value="Grenada">Grenada</option>
                                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                                            <option value="Guam">Guam</option>
                                                                            <option value="Guatemala">Guatemala</option>
                                                                            <option value="Guinea">Guinea</option>
                                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                            <option value="Guyana">Guyana</option>
                                                                            <option value="Haiti">Haiti</option>
                                                                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                                            <option value="Honduras">Honduras</option>
                                                                            <option value="Hong Kong">Hong Kong</option>
                                                                            <option value="Hungary">Hungary</option>
                                                                            <option value="Iceland">Iceland</option>
                                                                            <option value="India">India</option>
                                                                            <option value="Indonesia">Indonesia</option>
                                                                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                                            <option value="Iraq">Iraq</option>
                                                                            <option value="Ireland">Ireland</option>
                                                                            <option value="Israel">Israel</option>
                                                                            <option value="Italy">Italy</option>
                                                                            <option value="Jamaica">Jamaica</option>
                                                                            <option value="Japan">Japan</option>
                                                                            <option value="Jordan">Jordan</option>
                                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                                            <option value="Kenya">Kenya</option>
                                                                            <option value="Kiribati">Kiribati</option>
                                                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                                                            <option value="Kuwait">Kuwait</option>
                                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                                            <option value="Latvia">Latvia</option>
                                                                            <option value="Lebanon">Lebanon</option>
                                                                            <option value="Lesotho">Lesotho</option>
                                                                            <option value="Liberia">Liberia</option>
                                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                                            <option value="Lithuania">Lithuania</option>
                                                                            <option value="Luxembourg">Luxembourg</option>
                                                                            <option value="Macau">Macau</option>
                                                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                                            <option value="Madagascar">Madagascar</option>
                                                                            <option value="Malawi">Malawi</option>
                                                                            <option value="Malaysia">Malaysia</option>
                                                                            <option value="Maldives">Maldives</option>
                                                                            <option value="Mali">Mali</option>
                                                                            <option value="Malta">Malta</option>
                                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                                            <option value="Martinique">Martinique</option>
                                                                            <option value="Mauritania">Mauritania</option>
                                                                            <option value="Mauritius">Mauritius</option>
                                                                            <option value="Mayotte">Mayotte</option>
                                                                            <option value="Mexico">Mexico</option>
                                                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                                            <option value="Monaco">Monaco</option>
                                                                            <option value="Mongolia">Mongolia</option>
                                                                            <option value="Montserrat">Montserrat</option>
                                                                            <option value="Morocco">Morocco</option>
                                                                            <option value="Mozambique">Mozambique</option>
                                                                            <option value="Myanmar">Myanmar</option>
                                                                            <option value="Namibia">Namibia</option>
                                                                            <option value="Nauru">Nauru</option>
                                                                            <option value="Nepal">Nepal</option>
                                                                            <option value="Netherlands">Netherlands</option>
                                                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                                            <option value="New Caledonia">New Caledonia</option>
                                                                            <option value="New Zealand">New Zealand</option>
                                                                            <option value="Nicaragua">Nicaragua</option>
                                                                            <option value="Niger">Niger</option>
                                                                            <option value="Nigeria">Nigeria</option>
                                                                            <option value="Niue">Niue</option>
                                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                                            <option value="Norway">Norway</option>
                                                                            <option value="Oman">Oman</option>
                                                                            <option value="Pakistan">Pakistan</option>
                                                                            <option value="Palau">Palau</option>
                                                                            <option value="Panama">Panama</option>
                                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                                            <option value="Paraguay">Paraguay</option>
                                                                            <option value="Peru">Peru</option>
                                                                            <option value="Philippines">Philippines</option>
                                                                            <option value="Pitcairn">Pitcairn</option>
                                                                            <option value="Poland">Poland</option>
                                                                            <option value="Portugal">Portugal</option>
                                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                                            <option value="Qatar">Qatar</option>
                                                                            <option value="Reunion">Reunion</option>
                                                                            <option value="Romania">Romania</option>
                                                                            <option value="Russian Federation">Russian Federation</option>
                                                                            <option value="Rwanda">Rwanda</option>
                                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                                            <option value="Saint LUCIA">Saint LUCIA</option>
                                                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                                            <option value="Samoa">Samoa</option>
                                                                            <option value="San Marino">San Marino</option>
                                                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                                            <option value="Senegal">Senegal</option>
                                                                            <option value="Seychelles">Seychelles</option>
                                                                            <option value="Sierra">Sierra Leone</option>
                                                                            <option value="Singapore">Singapore</option>
                                                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                                            <option value="Slovenia">Slovenia</option>
                                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                                            <option value="Somalia">Somalia</option>
                                                                            <option value="South Africa">South Africa</option>
                                                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                                            <option value="Spain">Spain</option>
                                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                                            <option value="St. Helena">St. Helena</option>
                                                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                                            <option value="Sudan">Sudan</option>
                                                                            <option value="Suriname">Suriname</option>
                                                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                                            <option value="Swaziland">Swaziland</option>
                                                                            <option value="Sweden">Sweden</option>
                                                                            <option value="Switzerland">Switzerland</option>
                                                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                                            <option value="Tajikistan">Tajikistan</option>
                                                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                                            <option value="Thailand">Thailand</option>
                                                                            <option value="Togo">Togo</option>
                                                                            <option value="Tokelau">Tokelau</option>
                                                                            <option value="Tonga">Tonga</option>
                                                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                                            <option value="Tunisia">Tunisia</option>
                                                                            <option value="Turkey">Turkey</option>
                                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                                            <option value="Tuvalu">Tuvalu</option>
                                                                            <option value="Uganda">Uganda</option>
                                                                            <option value="Ukraine">Ukraine</option>
                                                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                                                            <option value="United Kingdom">United Kingdom</option>
                                                                            <option value="United State">United States</option>
                                                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                                            <option value="Uruguay">Uruguay</option>
                                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                                            <option value="Vanuatu">Vanuatu</option>
                                                                            <option value="Venezuela">Venezuela</option>
                                                                            <option value="Viet Nam">Viet Nam</option>
                                                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                                            <option value="Western Sahara">Western Sahara</option>
                                                                            <option value="Yemen">Yemen</option>
                                                                            <option value="Zambia">Zambia</option>
                                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">مدينة التخرج
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="universitycity" value="<?php echo @$_POST['universitycity']; ?>" />
                                                                        <span class="help-block">مثال : مكة  </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">المعدل 
                                                                        <span class="required"> * </span>
                                                                    </label>
                                                                    <div class="col-md-4">
                                                                        <input type="text" class="form-control" name="grad" value="<?php echo @$_POST['grad']; ?>" />
                                                                        <span class="help-block"> مثال : 3.55 من 4.00 أو 98.85% </span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">ملف السيرة الذاتية</label>
                                                                    <div class="col-md-4">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <span class="btn green btn-file">
                                                                                <span class="fileinput-new"> اختيار الملف </span>
                                                                                <span class="fileinput-exists"> تغيير </span>
                                                                                <input type="file" name="file"> </span>
                                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="tab-pane" id="tab4">
                                                                <h3 class="block">صفحة التأكد من البيانات المدخلة </h3>
                                                                <h4 class="form-section">الإسم و معلومات الاتصال</h4>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الاسم باللغة الإنجليزية : </label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="efullname"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الإسم باللغة العربية :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="afullname"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">البريد الإلكتروني :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="email"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">رقم الجوال :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="phone"> </p>
                                                                    </div>
                                                                </div>
                                                                <h4 class="form-section">معلومات عامة </h4>
                                                                
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">رقم الهوية :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="idnumber"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">تاريخ الميلاد :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="bdate"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الجنس :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="gender"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الحالة الاجتماعية :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="mstatus"> </p>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">المدينة :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="city"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الدولة :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="country"> </p>
                                                                    </div>
                                                                </div>
                                                                
                                                                <h4 class="form-section">التعليم </h4>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">اسم الجامعة :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="universityname"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">الدرجة العلمية :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="degree"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">التخصص :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="major"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">تاريخ التخرج :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="universitydate"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">دولة التخرج :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="universitycountry"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">مدينة التخرج :</label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="universitycity"> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">المعدل : </label>
                                                                    <div class="col-md-4">
                                                                        <p class="form-control-static" data-display="grad"> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <a href="javascript:;" class="btn default button-previous">
                                                                    <i class="fa fa-angle-right"></i> عودة </a>
                                                                <a href="javascript:;" class="btn btn-outline green button-next"> متابعة
                                                                    <i class="fa fa-angle-left"></i>
                                                                </a>
                                                                 <button type="submit" class="btn green button-submit"> إرسال
                                                                    <i class="fa fa-check"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        
         <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
         
         <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        
        
         <script src="../assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.input-ip-address-control-1.0.min.js" type="text/javascript"></script>
        
        
        
        <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
         <script src="require/js/trandate.js" type="text/javascript"></script>  
        <script src="require/js/applyform.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>