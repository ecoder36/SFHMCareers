
<?php
require_once('log/adminlogsession.php');

if($_SESSION['admin_info'] != false  )
{
    
@require_once('require/api/db.php');
@require_once('require/api/rappAPI.php');
@require_once('require/api/addjobsAPI.php');
@require_once('require/api/addresumesAPI.php');

   $rapp = rapp_get_by_idnumber(trim(@$_GET['idnumber']));
  
  
  
 // if (isset( @$_POST['sendsms']))
  // @$_POST['sendsms']
  if (isset($_POST['smsormail'])){
      
  
   include('sms/sms.class.php');
    if (isset($_POST['sendsms'])){
                $DTT_SMS = new Malath_SMS("sultansz","555555",'UTF-8');
                $Credits = $DTT_SMS->GetCredits();
                $SenderName = $DTT_SMS->GetSenders();
        	//	$SmS_Msg = @$_POST['Text'];
        		$msg = @$_POST['smsormail'];
        	
        		$SmS_Msg = $msg;
                $Mobiles = @$_POST['sendsms'];
                $Originator ='SFHMCareers';
               if(@$Mobiles){
                $Sends = $DTT_SMS->Send_SMS($Mobiles,$Originator,$SmS_Msg);
             }
             
           
    }
     if (isset($_POST['sendmail'])){
                    $msgmail = @$_POST['sendmail'];                         
                    $to= $msgmail;
                    $subject='SFHM: SFHMCareers ';
                                                                                          
             $message="<html>
                        <head>
                        <title>HTML email</title>
                        </head>
                        <body>
                        <p>This email from SFHMCareers!</p>
                         $efullname <br>
                         $msgmail
                        </body>
                        </html>";

                       
                        $tmail = $msgmail ;
                        $headers  = "From: SFHMCareers <szagzoog@sfhm.med.sa>" . "\r\n" .
                                    'Cc: szagzoog@sfhm.med.sa' . "\r\n" .
                                    'MIME-Version: 1.0' . "\r\n" .
                                    'Content-type: text/html; charset=utf-8';
                        $Sendm = mail($to,$subject,$message,$headers);
             
     }
     
     if ($_POST['sendsms'] == null && $_POST['sendmail'] == null){
                  header("Location: ?nosend=done");
             }
     // if(!$Sends && !$Sendm){
    //     header("Location: ?nosend=done");
    // }
     if($Sends && $Sendm){
         header("Location: ?sandmsend=done");
     }
     if($Sends){
         header("Location: ?ssend=done");
     }
     if($Sendm){
         header("Location: ?msend=done");
     }
  
}
  
  
  
   
?>

<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Applicants List </title>
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
        
        <link href="../assets/global/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
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
        <?php $acapplicantslist ="active" ?>
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
                            <h1>Applicants
                                <small>Applicants List</small>
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
                                <span>Applicants List</span>
                            </li>
                        </ul>
                      
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                     <?php
                                              if(isset($_GET['viewerror'])){echo '<div class="alert alert-danger ">
                                    <button class="close" data-close="alert"></button><strong>Error! </strong> Wrong Job Number</div>';}?>
                                     <?php
                                    if(isset($_GET['msend'])){echo '<div class="alert alert-success ">
                                    <button class="close" data-close="alert"></button><strong>Success! </strong>the Message has been send to the Mail successfully!</div>';}
                                    if(isset($_GET['ssend'])){echo '<div class="alert alert-success ">
                                    <button class="close" data-close="alert"></button><strong>Success! </strong>the Message has been send to the Phone successfully!</div>';}
                                    if(isset($_GET['sandmsend'])){echo '<div class="alert alert-success ">
                                    <button class="close" data-close="alert"></button><strong>Success! </strong>the Message has been send to the Phone & Mail successfully!</div>';}
                                    if(isset($_GET['nosend'])){echo '<div class="alert alert-danger ">
                                    <button class="close" data-close="alert"></button><strong>Error! </strong> the message not send </div>';}
                                    ?>
                                    
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <span class="label"><a class="btn btn-circle btn-icon-only btn-default" data-original-title="Select Columns" href="#daterangepicker_modal" data-toggle="modal">
                                                        <i class="icon-wrench"></i>
                                                    </a></span>
                                            </div>
                                            <div class="tools">
                                            </div>
                                        </div>
                                         <div id="daterangepicker_modal" class="modal fade" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title">Select Columns </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <form action="" method="post" class="form-horizontal">
                                                                    <div class="form-group">
                                                                       <label class="col-md-3">Checkboxes</label>
                                                                        <div class="col-md-4 checkbox-list">
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Position" >Position</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="ID Number" >ID Number</label> 
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Reference Number" >Reference Number</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Status" >Status</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Nationality" >Nationality</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="CV Link" >CV Link</label>
                                                                        </div>
                                                                        <div class="col-md-4 checkbox-list">
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Applicants En Name" >Applicants En Name</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Applicants Ar Name" >Applicants Ar Name</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Email" >Email</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Phone" >Phone</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="myCheckbox[]" value="Profile Link" >Profile Link</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn green btn-primary" ><i class="fa fa-save"></i></button>
                                                                        <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                          
                                  <?php  
                                    
                                   ?>
                                        
                                        
                                        <div class="portlet-body">
                                             <?php 
                                             
                                             @$jobnum = ($_GET['jobnumber']);
                                             @$approv = ($_GET['approval']);
                                            
                                             if(!isset($jobnum) ){
                                              $users = rapp_get('ORDER BY `id` DESC');
                                             }
                                             if(isset($jobnum) ){
                                            $users = rapp_get("WHERE `jobnumber` = '$jobnum' AND `approval` = '$approv' ORDER BY `id` DESC");
                                             }
                                             
                                            if($users == NULL)
                                                  echo ('');
                                                  
                                            $ucount = @count($users);
                                            if($ucount == 0)
                                                  echo ('');
                                                  
                                            ?>
                                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                <thead>
                                                    <tr>
                                                        <?php
                                                      @$myboxes = $_POST['myCheckbox'];
                                                      if(!empty($myboxes))
                                                      {
                                                              $test = array_unique($myboxes);
                                                              foreach ($test as $param_namea => $val) {
                                                                echo '<th>'.$val.'</th>' ;
                                                               } 
                                                      } else  {
                                                        ?>
                                                        <th> Position </th>
                                                        <th> Applicant En Name </th>
                                                        <th> IDnumber </th>
                                                        <th> Rno </th>
                                                        <th> Status </th>
                                                        <th> Action </th>
                                                        <?php } ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                     <?php
                                                  for($i = 0 ; $i < $ucount; $i++)
                                                  {
                                                      $user = $users[$i];
                                                      $jobnumber= $user->jobnumber ;
                                                      $userst = jobsen_get_by_jobnumber("$jobnumber");
                                                      $idnumber= $user->idnumber ;
                                                      $reducation = reducation_get_by_idnumber("$idnumber");
                                                      $rid =   rid_get_by_idnumber("$idnumber");
                                                      if( $reducation->cvatt != null)
                                                          $cv = " <a href='file/$reducation->cvatt' target='_blank' class='primary-link'>CV Link</a>";
                                                          else {
                                                          $cv = " NO CV ";
                                                                }
                                                      
                                                      $smsmail = '
                                         <div id="sms_modal'.$user->id.'" class="modal fade" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title">Send Message to '.$user->efullname.'</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                         <div class="row">
                                                            <div class="col-md-12">
                                                                <form action="" method="post" class="form-horizontal">
                                                                    <div class="form-group">
                                                                       <label class="col-md-3">The Message</label>
                                                                        <div class="col-md-8 checkbox-list">
                                                                           <label><textarea type="checkbox" name="smsormail" rows="5" cols="50"></textarea></label>
                                                                           
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="sendsms" value="'.$user->mobile.'" >Send SMS to '.$user->mobile.'</label>
                                                                           <label><input type="checkbox" class="icheck" data-checkbox="icheckbox_flat-blue" name="sendmail" value="'.$user->email.'" >Send MAIL to '.$user->email.'</label>
                                                                           
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn green btn-primary" ><i class="fa fa-save"></i></button>
                                                                        <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ' ;
                                                      if($user->approval == "Candidate"){
                                                          $approvalc = "<span class='label label-sm label-success'>$user->approval</span>" ;
                                                      }
                                                      if($user->approval == "Excluded"){
                                                          $approvalc = "<span class='label label-sm label-danger'>$user->approval</span>" ;
                                                      }
                                                      if($user->approval == ""){
                                                          $approvalc = "<span class='label label-sm label-warning'>new</span>" ;
                                                      }
                                                       
                                                       $profile= '<a class="btn blue-steel tooltips"  data-original-title="View Profile" href="userprofilehr.php?idnumber='.$user->idnumber.'" ><i class="fa fa-user blue-steel"></i> Profile</a>
                                                       
                                                       <a class="btn btn-success" title="Send Message" href="#sms_modal'.$user->id.'" data-toggle="modal" ><i class="fa fa-envelope-o blue-steel"></i> Message </a>
                                                       ';
                                                       
                                                       @$myboxes = $_POST['myCheckbox'];
                                                     //  $test = array_unique($myboxes);
                                                        $user = $users[$i];
                                                       
                                                      if(!empty($myboxes))
                                                      {   
                                                            echo  "<tr>"  ; 
                                                           foreach ($test as $param_namea => $param_val) 
                                                             {
                                                               if ($param_val == 'Position'){
                                                               $val = $userst->jobname ;
                                                               }elseif($param_val == 'Applicants En Name'){
                                                                   $val = $user->efullname ;
                                                               }elseif($param_val == 'Applicants Ar Name'){
                                                                   $val = $user->afullname ;
                                                               }elseif($param_val == 'ID Number'){
                                                                   $val = $user->idnumber ;
                                                               }elseif($param_val == 'Reference Number'){
                                                                   $val = $user->rno ;
                                                               }elseif($param_val == 'Status'){
                                                                   $val = $approvalc ;
                                                               }elseif($param_val == 'Email'){
                                                                   $val = $user->email ;
                                                               }elseif($param_val == 'Phone'){
                                                                   $val = $user->mobile ;
                                                               }elseif($param_val == 'CV Link'){
                                                                   $val = $cv ;
                                                               }elseif($param_val == 'Profile Link'){
                                                                   $val = $profile.$smsmail ;
                                                               }elseif($param_val == 'Nationality'){
                                                                   $val = $rid->nationality ;
                                                               }
                                                               else{
                                                                   $val = "" ;
                                                               }  
                                                               echo "<td>".$val."</td>" ;
                                                             }   
                                                          echo  "</tr>" ;   
                                                      }else{     
                                                      
                                                       echo  "<tr>   
                                                              <td> $userst->jobname   </td>
                                                              <td> $user->efullname   </td>
                                                              <td> $user->idnumber   </td>
                                                              <td> $user->rno   </td>
                                                              <td> $approvalc  </td>
                                                              <td> $profile 
                                                              
                                                              
                                                              "; ?>
                                                              
                                                              <?php echo $smsmail ; ?>
                                                             <?php echo "
                                                             
                                                             
                                                              </td>
                                                             </tr>"
                                                             
                                                              ; 
                                                      }
                                                  }
                                                  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                  
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                  <!--  <div class="portlet box green">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-globe"></i>Buttons </div>
                                            <div class="tools"> </div>
                                        </div>
                                        <div class="portlet-body">
                                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                                <thead>
                                                    <tr>
                                                        <th> Rendering engine </th>
                                                        <th> Browser </th>
                                                        <th> Platform(s) </th>
                                                        <th> Engine version </th>
                                                        <th> CSS grade </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>-->
                                    <!-- END EXAMPLE TABLE PORTLET-->
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
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <script src="require/js/applicantslist.js" type="text/javascript"></script>
        
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