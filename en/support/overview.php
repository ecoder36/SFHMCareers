


<?php

@require_once('log/logsession.php');

if($_SESSION['user_info'] != false && $_SESSION['user_info']->isadmin != 3 )
{

@require_once('require/api/db.php');
@require_once('require/api/requestsAPI.php');
@require_once('require/api/recordsAPI.php');
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
                                    <form class="form-horizontal form-row-seperated" action="#">
                                        <div class="portlet">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-shopping-cart1"></i>Requests Tables</div>
                                            
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tabbable-bordered">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a href="#tab_general" data-toggle="tab" aria-expanded="true"> New 
                                            <?php $usersco = request_get('WHERE `status` = "new" ');
                                                           
                                            if(@count($usersco) == 0)
                                                  echo ('');
                                                  else
                                                  echo ('<span class="badge badge-success">'.@count($usersco).'</span>');
                                                  
                                                  ?>
                                                            
                                                            </a>
                                                        </li>
                                                       
                                                        <li class="">
                                                            <a href="#tab_history" data-toggle="tab" aria-expanded="false"> Completed </a>
                                                        </li>
                                                         
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab_general">
                                                            
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
                                             $users = request_get('WHERE `status` != "closed" ORDER BY `status` ASC, `id` DESC');
                                            if($users == NULL)
                                              //  die ('problem');
                                                  echo ('');
                                            $ucount = @count($users);
                                            if($ucount == 0)
                                                  echo ('');
                                            ?>
                                                                    <table class="table table-striped table-hover table-bordered dt-responsive" id="sample_1">
                                                                       <thead>
                                                                            <tr>
                                                                                <th >Id            </th>
                                                                                <th >Site            </th>
                                                                                <th >Type             </th>
                                                                                <th >Name     </th>
                                                                                <th >Problem     </th>
                                                                                <th >User     </th>
                                                                                <th >Date    </th>
                                                                                <th >Status     </th>
                                                                                <th >Action     </th>
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
                                               $useren = users_get_by_id($user->ename);
                                               $userdn = users_get_by_id($user->doneby);
                                              date_default_timezone_set("Asia/Riyadh");
                                              
                                               // $date1 = substr($user->date,-19);
                                                 $date2 = substr($user->date,0,10);
                                              $datenow = Date('d-m-Y') ;
                                            
                                               
                                                   
                                                $bd = substr($user->date,0,10); 
                                                $nd = Date('d-m-Y') ;
                                                $datetime1 = new DateTime($bd);
                                                $datetime2 = new DateTime($nd);
                                                $interval55 = $datetime1->diff($datetime2);
                                                $date3 = $interval55->format('%R%a');  
                                                
                                              if(($user->status == 'new') && ($date3 > '4')){$username=$useren->uname ; $tr = '<tr class="danger">'; $cstatus = "&nbsp&nbsp&nbsp<span class='label label-lg label-danger'> <i class='fa fa-clock-o'> </i> $date3 days </span><span class='label label-success'>New " ; }
                                              elseif(($user->status == 'new') && ($date3 <= '4')){$username=$useren->uname ;$tr = '<tr>'; $cstatus = "&nbsp&nbsp&nbsp<span class='label label-success'>new " ;}
                                              else{$tr = '<tr>';}
                                              
                                              if($user->status == 'received'){$username=$userdn->uname ;$cstatus = "&nbsp&nbsp&nbsp<span class='label label-info'>Received " ;}
                                              if($user->status == 'pending'){$username=$userdn->uname ;$cstatus = "&nbsp&nbsp&nbsp<span class='label label-warning'>Pending " ;}
                                              if($user->status == 'closed'){$username=$userdn->uname ;$cstatus = "&nbsp&nbsp&nbsp<span class='label label-danger'>Closed" ;}
                                              
                        
                                
                                
                                              if($userid->status == 'received'){$receiver = "<span class='pull-right font-green'> <i title='recevied by' class='fa fa-wrench tooltips'></i><span class=''> $userid->uname </span></span> " ;}
                                              if($useridp->status == 'pending'){$receiver = "<span class='pull-right font-green'> <i title='recevied by' class='fa fa-wrench tooltips'></i><span class=''> $useridp->uname </span></span> " ;}
                                              if($useridc->status == 'closed'){$receiver = "<span class='pull-right font-green'> <i title='recevied by' class='fa fa-wrench tooltips'></i><span class=''> $useridc->uname </span></span> " ;}
                                          
                                         //    if(strtotime($date1) <=  strtotime($datenow) && strtotime($datenow)  <= strtotime($date2)){
                                                  ?>
                                                                          
                                                                        <?php echo "$tr" ; ?>
                                                                                <td> <?php echo $user->id ?> </td>
                                                                                <td> <?php echo $user->site ?> </td>
                                                                                <td> <?php echo $user->ptype ?> </td>
                                                                                <td class="center"> <?php echo $user->name ?> </td>
                                                                                <td> <?php echo $user->problem ?> </td>
                                                                                <td> <?php echo $username ?> </td>
                                                                                <td ><?php echo substr($user->date,0,10) ?>   </td>
                                                                                <td ><?php echo $cstatus ?> </td>
                                                                                <td ><a href="ticket.php?id=<?php echo $user->id ?>" class="btn btn-sm btn-default btn-editable"><i class="fa fa-share"></i> View</a>    </td>
                                                                            </tr>
                                                                            <?php  } ?>
                                                                            
                                                                            
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                   </div>
                                                                </div>
                                                                
                                                                
                                                                
                                                  
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="tab-pane" id="tab_history">
                                                            <div class="table-container">
                                                                <div class="portlet light  box blue-madison">
                                                                    <div class="portlet-title">
                                                                        
                                                                        <div class="tools">
                                                                        </div>
                                                                    </div>
                                                                    <div class="portlet-body">
                                                        <?php  
                                                        if($_SESSION['user_info']->isadmin == 1){
                                                         $userscl = request_get('WHERE `status` = "closed" ORDER BY `status` ASC, `id` DESC');
                                                        }
                                                         if($_SESSION['user_info']->isadmin == 2){
                                                            $suser =  $_SESSION['user_info']->id ;
                                                         $userscl = request_get("WHERE `status` = 'closed' AND `doneby` = $suser ORDER BY `status` ASC, `id` DESC");
                                                         }
                                                        if($userscl == NULL)
                                                          //  die ('problem');
                                                              echo ('');
                                                        $ucountcl = @count($userscl);
                                                        if($ucountcl == 0)
                                                              echo ('');
                                                        ?>
                                                                        <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_2">
                                                                           <thead>
                                                                            <tr>
                                                                                <th >Id            </th>
                                                                                <th >Site            </th>
                                                                                <th >Type             </th>
                                                                                <th >Name     </th>
                                                                                <th >Problem     </th>
                                                                                <th >User     </th>
                                                                                <th >Date    </th>
                                                                                <th >Status     </th>
                                                                                <th >Action     </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                <?php
                                                                           for($i = 0 ; $i < $ucountcl; $i++)
                                          { $cuser = $userscl[$i];
                                          $cuserdn = users_get_by_id($cuser->doneby);
                                          ?>
                                                                       
                                                                          
                                                                            <tr>
                                                                                <td> <?php echo $cuser->id ?> </td>
                                                                                <td> <?php echo $cuser->site ?> </td>
                                                                                <td> <?php echo $cuser->ptype ?> </td>
                                                                                <td class="center"> <?php echo $cuser->name ?> </td>
                                                                                <td> <?php echo $cuser->problem ?> </td>
                                                                                <td> <?php echo $cuserdn->uname ?> </td>
                                                                                <td ><?php echo substr($cuser->date,0,10) ?>   </td>
                                                                                <td ><span class='label label-sm label-danger'> Closed </span> </td>
                                                                                <td ><a href="ticket.php?id=<?php echo $cuser->id ?>" class="btn btn-sm btn-default btn-editable"><i class="fa fa-share"></i> View</a>    </td>
                                                                            </tr>
                                                                            <?php  } ?>
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
if($_SESSION['user_info'] == false ){
	header("Location: login.php?error=r");
}
if(@$_SESSION['user_info']->isadmin == 3){
	header("Location: form.php");
}
?>

