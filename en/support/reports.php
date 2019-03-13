


<?php

@require_once('log/logsession.php');

if($_SESSION['user_info'] != false && $_SESSION['user_info']->isadmin == 1 )
{

@require_once('require/api/db.php');
@require_once('require/api/requestsAPI.php');
@require_once('require/api/recordsAPI.php');
@require_once('require/api/usersAPI.php');




      $dp = @$_GET['date'];
      $d1 = substr($dp,0,10);
      $d2 = substr($dp,13,10);
    
     if(isset($_GET['date'])){
         $sdate = "From $d1 To $d2";
     }else{
         $sdate = "";
         
     }
    
?>


<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Report <?php echo $sdate ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!--<meta http-equiv="refresh" content="500">-->
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

        <?php $reports="active" ?>
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
                        <div class="page-toolbar ">
                            <!--<br><a href="../../ar/careers/jobs.php" class="btn  blue-chambray btn-sm"> عربي
                                </a>-->
                           
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
                                    
                                        <div class="portlet">
                                            <div class="portlet-title">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <form action="" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="control-label col-md-2">Date</label>
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-large defaultrange_modal" >
                                                                        <input required placeholder="Date Ranges" name="date" type="text" class="form-control" value="<?php echo @$_GET['date'] ; ?>">
                                                                        <span class="input-group-btn">
                                                                            <button class="btn default date-range-toggle" type="button">
                                                                                <i class="fa fa-calendar"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn yellow btn-primary" >View <i class="fa fa-save"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portlet-body">
                                                <span class="label">
                                                        
                                                        
                                                    </span>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="table-container">
                                                                        <div class="portlet light  box blue-madison" style="border:1px solid #caa88e;">
                                                                            <div class="portlet-title" style="background-color:#caa88e;">
                                                                                 <div class="caption">
                                                                                    &nbsp By users </div>
                                                                                <div class="tools">
                                                                                </div>
                                                                            </div>
                                                                            <div class="portlet-body">
                                                                                   <?php
                                                                                  
                                                                                       
                                                                                     $ruserscl = request_get("WHERE `status` = 'closed' group by doneby ORDER BY `status` ASC, `id` DESC");
                                                                      
                                                                                    $rucountcl = @count($ruserscl);
                                                                                    ?>
                                                                                <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_3">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th >Name      </th>
                                                                                        <th >Status    </th>
                                                                                        <th >Requests    </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <?php
                                                                           for($i = 0 ; $i < $rucountcl; $i++)
                                                                           { $rcuser = $ruserscl[$i];
                                            if(isset($_GET['date'])){
                                                                    $ruserscl11 = request_get("WHERE ( `rdate` BETWEEN '$d1' AND '$d2' ) AND `status` = 'closed'  AND `doneby` = '$rcuser->doneby' ORDER BY `status` ASC, `id` DESC");
                                                                }else{
                                                                    $ruserscl11 = request_get("WHERE `status` = 'closed'  AND `doneby` = '$rcuser->doneby' ORDER BY `status` ASC, `id` DESC");
                                                                    }
                                                                                             $rucountcl1 = @count($ruserscl11);    
                                                                                              $cuserdn = users_get_by_id($rcuser->doneby);
                                                                                          ?>
                                                                                    <tr>
                                                                                        <td> <?php echo $cuserdn->name ?> </td>
                                                                                        <td ><span class='label label-sm label-danger'> Closed </span> </td>
                                                                                      <td> <?php echo $rucountcl1 ?> </td>
                                                                                    </tr>
                                                                                    <?php  } ?>
                                                                                </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="table-container">
                                                                        <div class="portlet light  box blue-madison" style="border:1px solid #caa88e;">
                                                                            <div class="portlet-title" style="background-color:#caa88e;">
                                                                                 <div class="caption">
                                                                                    &nbspBy sites </div>
                                                                                <div class="tools">
                                                                                </div>
                                                                            </div>
                                                                            <div class="portlet-body">
                                                                                   <?php
                                                                                     $ruserscl = request_get("WHERE `status` = 'closed' group by site ORDER BY `status` ASC, `id` DESC");
                                                                                    $rucountcl = @count($ruserscl);
                                                                                    ?>
                                                                                <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_4">
                                                                                   <thead>
                                                                                    <tr>
                                                                                        <th >Site            </th>
                                                                                        <th >Status             </th>
                                                                                        <th >Requests     </th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <?php
                                                      for($i = 0 ; $i < $rucountcl; $i++)
                                                                      { $rcuser = $ruserscl[$i];
                                                                      if(isset($_GET['date'])){
                                                         $ruserscl1 = request_get("WHERE ( `rdate` BETWEEN '$d1' AND '$d2' ) AND `status` = 'closed'  AND `site` = '$rcuser->site' ORDER BY `status` ASC, `id` DESC");
                                                                      }else{
                                                         $ruserscl1 = request_get("WHERE `status` = 'closed'  AND `site` = '$rcuser->site' ORDER BY `status` ASC, `id` DESC");
                                                                      }
                                                                                             $rucountcl1 = @count($ruserscl1);    
                                                                                              $cuserdn = users_get_by_id($rcuser->doneby);
                                                                                                
                                                                                                
                                                                                                 if($rucountcl1 != "0"){
                                                                                          ?>
                                                                               
                                                                                
                                                                                    <tr>
                                                                                        <td> <?php echo $rcuser->site ?> </td>
                                                                                        <td ><span class='label label-sm label-danger'> Closed </span> </td>
                                                                                      <td> <?php echo $rucountcl1 ?> </td>
                                                                                    </tr>
                                                                                    <?php
                                                                                    
                                                                                                     
                                                                                                 }
                                                                                    
                                                                                    } ?>
                                                                                </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
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
        <script src="require/js/overview.js" type="text/javascript"></script>
        <script src="require/js/date.js" type="text/javascript"></script> 
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
<?php } ?>
<?php
if($_SESSION['user_info'] == false ){
	header("Location: login.php?error=r");
}
if(@$_SESSION['user_info']->isadmin != 1){
	header("Location: form.php");
}
?>

