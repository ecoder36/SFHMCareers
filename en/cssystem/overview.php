


<?php

@require_once('log/logsession.php');

if($_SESSION['user_info_2'] != false )
{

@require_once('require/api/db.php');
@require_once('require/api/infoAPI.php');
@require_once('require/api/usersAPI.php');

?>


<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>View</title>
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

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
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                         <div class="page-title">
                            <h1 class="font-blue-dark"> <i class="icon-user"></i> <?php echo $_SESSION['user_info_2']->name ?>
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
                                    <form class="form-horizontal form-row-seperated" action="#">
                                        <div class="portlet">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-shopping-cart1"></i>Requirements Table</div>
                                            
                                            </div>
                                            <div class="portlet-body">
                                              
                                                            <div class="table-container">
                                                                <div class="portlet light  box green">
                                                                    <div class="portlet-title">
                                                                        <div class="caption font-dark">
                                                                            <!--<span class="label"><a class="btn btn-circle btn-icon-only btn-default" data-original-title="Select Columns" href="#daterangepicker_modal" data-toggle="modal">
                                                                                    <i class="icon-wrench"></i>
                                                                                </a></span>-->
                                                                        </div>
                                                                        <div class="tools">
                                                                        </div>
                                                                    </div>
                                                                    <div class="portlet-body">
                                                    <?php    
                                                    if($_SESSION['user_info_2']->isadmin == 1){
                                                          $users = info_get('ORDER BY `date` desc, `id` DESC');
                                                        }
                                                         if($_SESSION['user_info_2']->isadmin == 2){
                                                            $suser =  $_SESSION['user_info_2']->id ;
                                                          $users = info_get("WHERE `ename` = $suser ORDER BY `date` DESC, `id` DESC");
                                                         }
                                          //   $users = info_get('ORDER BY `id` DESC');
                                            if($users == NULL)
                                              //  die ('problem');
                                                  echo ('');
                                            $ucount = @count($users);
                                            if($ucount == 0)
                                                  echo ('');
                                            ?>
                                                                    <table class="table table-striped table-hover table-bordered " id="sample_1">
                                                                       <thead>
                                                                            <tr>
                                                                                
                                                                                <th >Date</th>
                                                                                <th >Region            </th>
                                                                                <th >City             </th>
                                                                                <th >Site     </th>
                                                                                <th >Building Type     </th>
                                                                                <th >FiCameras     </th>
                                                                                <th >MiCameras     </th>
                                                                                <th >FeCameras  </th>
                                                                                <th >MeCameras    </th>
                                                                                <th >Workstation    </th>
                                                                                <th >Screens     </th>
                                                                                <th >UPS    </th>
                                                                                 <th >Username     </th>
                                                                                
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                <?php
                                          for($i = 0 ; $i < $ucount; $i++)
                                          {
                                              $user = $users[$i];
                                             
                                              
                                          
                                              $useren = users_get_by_id($user->ename);
                                              $username = $useren->name ;
                                              date_default_timezone_set("Asia/Riyadh");
                                              
                                               // $date1 = substr($user->date,-19);
                                                 $date2 = substr($user->date,0,10);
                                              $datenow = Date('d-m-Y') ;
                                            
                                               
                                                   
                                                $bd = substr($user->date,0,10); 
                                              
                                         //    if(strtotime($date1) <=  strtotime($datenow) && strtotime($datenow)  <= strtotime($date2)){
                                                  ?>
                                                                          
                                                                       
                                                                               <td ><?php echo substr($user->date,0,10) ?>   </td>
                                                                                <td> <?php echo $user->region ?> </td>
                                                                                <td> <?php echo $user->zone ?> </td>
                                                                                <td class="center"> <?php echo $user->site ?> </td>
                                                                                <td> <?php echo $user->btype ?> </td>
                                                                                <td ><?php echo $user->ficameras ?> </td>
                                                                                 <td ><?php echo $user->micameras ?> </td>
                                                                                  <td ><?php echo $user->fecameras ?> </td>
                                                                                 <td ><?php echo $user->mecameras ?> </td>
                                                                                  <td ><?php echo $user->controld ?> </td>
                                                                                 <td ><?php echo $user->screens ?> </td>
                                                                                 <td ><?php echo $user->ups ?> </td>
                                                                                <td> <?php echo $username ?> </td>
                                                                               
                                                                                
                                                                             
                                                                            </tr>
                                                                            <?php  } ?>
                                                                            
                                                                            
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                   </div>
                                                                </div>
                                                            </div>
                                                        </div>      
                                        </div>
                                    </form>
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
if($_SESSION['user_info_2'] == false ){
	header("Location: login.php?error=r");
}

?>

