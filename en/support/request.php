


<?php
@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');
@require_once('log/logsession.php');


@require_once('require/api/db.php');
@require_once('require/api/requestsAPI.php');
@require_once('require/api/recordsAPI.php');
?>


<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Requests Table </title>
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
        <?php $req="active" ?>
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
                            <h1>
                                <small>requests List</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar ">
                            <br><a href="../../ar/careers/jobs.php" class="btn  blue-chambray btn-sm"> عربي
                                </a>
                           
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
                                     <?php
                                        if(isset($_GET['viewerror'])){echo '<div class="alert alert-danger ">
                                        <button class="close" data-close="alert"></button><strong>Error! </strong> Wrong Job Number</div>';}
                                    ?>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        
                                        <div class="portlet-body">
                                             <?php      
                                            
                                        
                                             $users = request_get('ORDER BY `status` ASC, `id` DESC');
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
                                                        <th> Requests </th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                          for($i = 0 ; $i < $ucount; $i++)
                                          {
                                              $user = $users[$i];
                                             
                                              $rid = $user->id ;
                                              $userid  = record_get_by_ridandr("$rid");
                                              $useridp = record_get_by_ridp("$rid");
                                              $useridc = record_get_by_ridc("$rid");
                                              
                                              date_default_timezone_set("Asia/Riyadh");
                                              
                                               // $date1 = substr($user->date,-19);
                                                 $date2 = substr($user->date,0,10);
                                              $datenow = Date('d-m-Y') ;
                                            
                                               
                                                   
                                                $bd = substr($user->date,0,10); 
                                                $nd = Date('d-m-Y') ;
                                                $datetime1 = new DateTime($bd);
                                                $datetime2 = new DateTime($nd);
                                                $interval55 = $datetime1->diff($datetime2);
                                                $date3 = $interval55->format('%d');  
                                                
                                            if(($user->status == 'new') && ($date3 > '4')){$cstatus = "&nbsp&nbsp&nbsp<span class='label label-lg label-danger'> <i class='fa fa-clock-o'> </i> Since $date3 days </span><span class='label label-success'>New " ;}
                                              if(($user->status == 'new') && ($date3 <= '4')){$cstatus = "&nbsp&nbsp&nbsp<span class='label label-success'>new " ;}
                                              if($user->status == 'received'){$cstatus = "&nbsp&nbsp&nbsp<span class='label label-info'>Received " ;}
                                              if($user->status == 'pending'){$cstatus = "&nbsp&nbsp&nbsp<span class='label label-warning'>Pending " ;}
                                              if($user->status == 'closed'){$cstatus = "&nbsp&nbsp&nbsp<span class='label label-danger'>Closed" ;}
                                              
                                
                                
                                
                                              if($userid->status == 'received'){$receiver = "<span class='pull-right font-green'> <i title='recevied by' class='fa fa-wrench tooltips'></i><span class=''> $userid->uname </span></span> " ;}
                                              if($useridp->status == 'pending'){$receiver = "<span class='pull-right font-green'> <i title='recevied by' class='fa fa-wrench tooltips'></i><span class=''> $useridp->uname </span></span> " ;}
                                              if($useridc->status == 'closed'){$receiver = "<span class='pull-right font-green'> <i title='recevied by' class='fa fa-wrench tooltips'></i><span class=''> $useridc->uname </span></span> " ;}
                                          
                                         //    if(strtotime($date1) <=  strtotime($datenow) && strtotime($datenow)  <= strtotime($date2)){
                                                  if($user->status != 'closed'){
                                             echo  "
                                                
                                                <tr>
                                                      <td><a class='font-blue-hoki' style='text-decoration: none;' href='ticket.php?id=$user->id'>
                                                        <h3> $user->ptype   <span class='pull-right'>  $cstatus </span></span></h3>  
                                                        <p class='text-justify'>
                                                       $user->problem  <br><br>
                                                      <i title='Job Location' class='fa fa-map-marker font-green tooltips'></i> $user->site  
                                                      <abbr title='Date of create this request'><i class='fa fa-calendar-minus-o font-green'></i></abbr> 
                                                      $user->date
                                                    <i title='created by' class='fa fa-fax font-green tooltips'></i> $user->ename  
                                                     $receiver </p>
                                                   </a></td>
                                                  </tr>
                                                  
                                                  
                                                    "; 
                                            
                                                }
                                            
                                            }
                                                  ?>
                                                  
                                                  <tr>
                                                      <td><a class='font-blue-hoki' style='text-decoration: none;' href="ticket.php?id=1">
                                                        <h3> 1 A  some one <small>  <span class='pull-right font-green'> <i class='fa fa-clock-o'></i><span class=''> New </span></span></small></h3>  
                                                        <p class='text-justify'>
                                                        camera not working camera not working camera not worki..  <br><br>
                                                      <i title='Job Location' class='fa fa-map-marker font-green tooltips'></i> makkah  
                                                      <abbr title='Date of create this request'><i class='fa fa-calendar-minus-o font-green'></i></abbr> 
                                                      <?php echo Date('d-m-Y h:i A') ; ?>
                                                    <i title='created by' class='fa fa-fax font-green tooltips'></i> abduallah albogami  
                                                    <span class='pull-right font-green'> <i title='recevied by' class='fa fa-wrench tooltips'></i><span class=''> Person 3 </span></span> </p>
                                                   </a></td>
                                                   
                                                  </tr>
                                                  <tr>
                                                      <td><a class='font-blue-hoki' style='text-decoration: none;' href="ticket.php?id=1">
                                                        <h3>   some one <small>  <span class='pull-right font-blue'> <i class='fa fa-clock-o'></i><span class=''> receved! </span></span></small></h3>  
                                                        <p class='text-justify'>
                                                        camera not working camera not working camera not worki..  <br><br>
                                                      <i title='Job Location' class='fa fa-map-marker font-green tooltips'></i> makkah  
                                                      <abbr title='Date of create this request'><i class='fa fa-calendar-minus-o font-green'></i></abbr> 
                                                      <?php echo Date('d-m-Y h:i A') ; ?>
                                                    <i title='created by' class='fa fa-fax font-green tooltips'></i> abduallah albogami  
                                                    <span class='pull-right font-green'> <i title='recevied by' class='fa fa-wrench tooltips'></i><span class=''> Person 3 </span></span> </p>
                                                   </a></td>
                                                   
                                                  </tr>
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                    </div>
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
        
      
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/request.js" type="text/javascript"></script>
       
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>