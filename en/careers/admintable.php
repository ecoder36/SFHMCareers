
<?php

require_once('log/adminlogsession.php');

if($_SESSION['admin_info'] != false  )
{
  

@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');
@require_once('require/api/rappAPI.php');

//if(isset($_GET['jobnumber']))
//if(isset($_POST['date']))
if(isset($_GET['jobnumber']))
{
     $job   =   jobs_get_by_jobnumber(trim($_GET['jobnumber']));
     $_id = $job->id ;
     $_jobnumber = trim($_GET['jobnumber']);
            if($_jobnumber == 0)
                die('Bad Access 2');
                
                if($_GET['required'] == 0){
                    $required = "00" ;
                }else{
                    $required = $_GET['required'] ;
                }
                if($_GET['date'] == ''){
                    $dater = " " ;
                }else{
                    $dater = $_GET['date'] ;
                }
               
     $result = jobs_date_update($_id,$dater,$required);

                                 if($result)
                                 {
                                     
                                     header("Location: ?dates=".$_GET['date']." required ".$_GET['required']."");
                                 }else{ 
                                     die('Update Failure');
                                     }
                                    
                                 die();   
}
?>


<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Admin Jobs </title>
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
        <?php $acadmintable ="active" ?>
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
                            <h1>Jobs
                                <small>Jobs Admin</small>
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
                                <span>Jobs</span>
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
                                              if(isset($_GET['dates'])){echo '<div class="alert alert-success ">
                                    <button class="close" data-close="alert"></button><strong>Success! </strong> It has been updated successfully!</div>';}?>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject bold uppercase">Jobs</span>
                                            </div>
                                            <div class="tools"> </div>
                                        </div>
                                        <div class="portlet-body">
                                             <?php      
                                            
                                            $users = jobs_get('ORDER BY `id` DESC');
                                            if($users == NULL)
                                              //  die ('problem');
                                                  echo ('problem');
                                            $ucount = @count($users);
                                            if($ucount == 0)
                                                  echo ('No users');
                                            ?>
                                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th> Position </th>
                                                        <th> Applicants </th>
                                                        <th> Candidates </th>
                                                        <th> Date </th>
                                                        <th> Required </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                          for($i = 0 ; $i < $ucount; $i++)
                                          {
                                              $user = $users[$i];
                                              $jobnumber= $user->jobnumber ;
                                              $userst = jobsen_get_by_jobnumber("$jobnumber" );
                                                    
                                                date_default_timezone_set("Asia/Riyadh");
                                                $date1 = substr($user->ldate,0,10);
                                                $date2 = substr($user->ldate,-10);
                                                $datenow = Date('d-m-Y') ;

                                            if(strtotime($date1) <=  strtotime($datenow) && strtotime($datenow)  <= strtotime($date2)){
                                            $gdate = "<span class='label label-sm label-success'>$user->ldate</span>" ;
                                            }else{
                                                $gdate =$user->ldate ;
                                            }
                                        
                                            
                                              $appl = rapp_get("WHERE `jobnumber` = '$user->jobnumber' AND `approval` = '' ORDER BY `id` DESC");
                                               $applc = @count($appl);
                                                $cand = rapp_get("WHERE `jobnumber` = '$user->jobnumber' AND `approval` = 'Candidate' ORDER BY `id` DESC");
                                               $can = @count($cand);
                                               
                                               if($applc == '0'){
                                                 $applc1 = "<label class='btn green btn-outline' href=\"applicantslist.php?approval= &jobnumber=$user->jobnumber \" > $applc</label>";
                                               }else{
                                                 $applc1 = "<a class='btn btn-info btn-outline' href=\"applicantslist.php?approval= &jobnumber=$user->jobnumber \" > $applc</a>";
                                               }
                                    echo  "<tr>   
                                                  
                                                  <td> <a class='btn green btn-outline' href=\"viewjob.php?jobnumber=$user->jobnumber \" data-toggle='modal'>$userst->jobname
                                                  <i class='fa fa-share'></i>
                                                  </a></td>
                                                  <td> 
                                                  $applc1
                                                  
                                                    
                                                     </td>
                                                  <td> <a class='btn green btn-outline' href=\"applicantslist.php?approval=Candidate&jobnumber=$user->jobnumber \" > $can
                                                    </a>
                                                     </td>
                                                  <td> $gdate   </td>
                                                  <td> $user->requairedno   </td>
                                                  "
                                                  ?>

                                                  <td>
                                                      
                                                    <span class="label">
                                                        
                                                        
                                                            <a class="btn green btn-outline" href="#daterangepicker_modal<?php echo $user->jobnumber ; ?>" data-toggle="modal"> 
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                    </span>
                                                     
                                                    <div id="daterangepicker_modal<?php echo $user->jobnumber ; ?>" class="modal fade" role="dialog" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                                    <h4 class="modal-title"></h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" class="form-horizontal">
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-2"></label>
                                                                            <div class="col-md-8">
                                                                                <div class="input-group input-large defaultrange_modal" >
                                                                                    <input placeholder="Date Ranges" name="date" type="text" class="form-control" value="<?php echo $user->ldate ; ?>">
                                                                                    <span class="input-group-btn">
                                                                                        <button class="btn default date-range-toggle" type="button">
                                                                                            <i class="fa fa-calendar"></i>
                                                                                        </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="control-label col-md-2"></label>
                                                                            <div class="col-md-7">
                                                                                <input type="text" placeholder="NO." name="required" data-required="1" class="form-control" value="<?php echo $user->requairedno ; ?>" /> </div>
                                                                        </div>
                                                                         <input type="hidden" name="jobnumber" class="form-control" value="<?php echo $user->jobnumber ; ?>" />
                                                                        
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn green btn-primary" ><i class="fa fa-save"></i></button>
                                                                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                                                                            </div>
                                                                                    
                                                                       
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                      
                                                  </td>
                                                  
                                    
                                                <?php
                                                echo"</tr>"; }
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
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/admintable.js" type="text/javascript"></script>
        <script src="require/js/date.js" type="text/javascript"></script>  
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