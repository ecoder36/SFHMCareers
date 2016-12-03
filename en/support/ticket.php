


<?php

require_once('log/adminlogsession.php');

//if($_SESSION['admin_info'] != false  )
//{



@require_once('require/api/db.php');
@require_once('require/api/requestsAPI.php');
@require_once('require/api/recordsAPI.php');

if(empty($_GET['id'])){
    //  header("Location: applicantslist.php?viewerror=errorab");
  //  die ('error');
}

 $rd =       record_get_by_rid(trim($_GET['id'])); /* */
 $rq =       request_get_by_id(trim($_GET['id'])); /* */
 $_id = (int)$_GET['id'];
 
//if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['status'])){
 if(isset($_POST['problem'])){
     $reply = $_POST['problem'] ;
     $ustatus = $rq->status ;
     $themsg = record_add($_id,$uname="testreply",$reply,$ustatus);
      header("Location: ?id=".$rq->id."&reply=done");
 }
    if(isset($_GET['status'])){
                          
                           // $name = trim($_GET['name']);
                            

                            if($_id == 0)
                            
                                die('Bad Access');
                                
                            
                            $ustatus = trim($_GET['status']);
                            
                            
                                
                            $result = rquest_status_update($_id,$ustatus).rquest_doneby_update($_id,$uby="user")
                            .record_add($_id,$uname="test3",$msg,$ustatus);
                           
                            
                            tinyf_db_close();
                            
                            if($result)
                            {
                                header("Location: ?id=".$rq->id."");
                              //  header("Location: ?idnumber=".$idnumberofu."&approval= The Applicant ( $name ) has been updated to (<strong>$approval</strong>) successfully");
                            }else{
                                die('Failure');
                                }
                                
                            }    
                           
                            

?>




<!DOCTYPE html>



<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
        
    <head>
        <meta charset="utf-8" />
        <title>User Profile</title>
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
        <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
</head>
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
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1 class="theme-font">User Profile
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
                           <!-- <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>-->
                          
                            <li>
                                <span>User Profile</span>
                            </li>
                        </ul>
                         <?php
                            if(isset($_GET['upass'])){echo ' <div class="alert alert-success ">
                             <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['upass'].'</div>';}
                        ?>
                         <?php
                            if(isset($_GET['approval'])){echo ' <div class="alert alert-success ">
                             <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['approval'].'</div>';}
                        ?>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN PROFILE SIDEBAR -->
                                    <div class="profile-sidebar">
                                        
                                        
                                            
                                        <!-- PORTLET MAIN -->
                                       <div class="portlet light ">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                                <i class="icon-globe font-green-sharp"></i>
                                                <span class="caption-subject font-green-sharp bold uppercase">Feeds</span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_1_1" class="active" data-toggle="tab"> Info </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_1_2" class="active" data-toggle="tab"> Actions </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <!--BEGIN TABS-->
                                            <div class="tab-content">
                                                 <div class="tab-pane active" id="tab_1_1">
                                                     
                                                     
                                                         
                                                       <div class="portlet light timeline-body-head-actions text-center ">
                                                           <?php
                                                           if($rq->status == 'new'){
                                                               ?>
                                                               <p>
                                                                <a class="btn btn-info" href="?status=received&id=<?php echo $rq->id ?>" aria-label="Skip to main navigation">
                                                                   Receve
                                                                </a> &nbsp &nbsp
                                                                <a class="btn btn-warning" href="?status=pending&id=<?php echo $rq->id ?>" aria-label="Settings">
                                                                  <i class="fa fa-cog" aria-hidden="true"></i> 
                                                                </a>&nbsp &nbsp
                                                                <a class="btn btn-danger" href="?status=closed&id=<?php echo $rq->id ?>" aria-label="Delete">
                                                                  <i class="fa fa-times " aria-hidden="true"> </i>
                                                                </a>
                                                            </p>
                                                            <?php } ?>
                                                           
                                                           <?php  if($rq->status == 'received'){?> 
                                                           <a class="btn btn-warning" href="?status=pending&id=<?php echo $rq->id ?>" aria-label="Settings">
                                                                  <i class="fa fa-cog" aria-hidden="true"></i> 
                                                                </a>&nbsp &nbsp
                                                                <a class="btn btn-danger" href="?status=closed&id=<?php echo $rq->id ?>" aria-label="Delete">
                                                                  <i class="fa fa-times " aria-hidden="true"> </i>
                                                                </a>
                                                           
                                                           <?php } ?>
                                                            
                                                            <?php  if($rq->status == 'pending'){?> 
                                                            <a class="btn btn-info" href="?status=received&id=<?php echo $rq->id ?>" aria-label="Skip to main navigation">
                                                                   Receve
                                                                </a> &nbsp &nbsp
                                                            <a class="btn btn-danger" href="?status=closed&id=<?php echo $rq->id ?>" aria-label="Delete">
                                                                  <i class="fa fa-times " aria-hidden="true"> </i>
                                                                </a>
                                                            <?php } ?>
                                                             
                                                            <?php   if($rq->status == 'closed'){?> 
                                                            
                                                            
                                                            <?php } ?>
                                                           
                                                           
                                                           
                                                                        
                                                          
                                                    </div> 
                                                     
                                                     
                                                      <div class="table-responsive">
                                                          
                                                          
                                                      
                                                            <table class="table table-striped table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th> </th>
                                                                        <th> request info </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            request no.  
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <span class="font-blue-hoki">  <?php echo $rq->id  ?> </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                             site  
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <span class="font-blue-hoki">  <?php echo $rq->site  ?> </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                             type  
                                                                        </td>
                                                                        
                                                                        <td>
                                                                            <span class="font-blue-hoki">  <?php echo $rq->ptype  ?> </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                          caller
                                                                        </td>
                                                                        <td>
                                                                            <span class="font-blue-hoki"><?php echo $rq->name  ?> </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            date 
                                                                        </td>
                                                                        <td>
                                                                            <?php  $date = substr($rq->date,0,10); ?>
                                                                            <span class="font-blue-hoki"> <?php echo $date  ?> </span>
                                                                        </td>
                                                                    </tr>
                                                                     <tr>
                                                                        <td>
                                                                            time 
                                                                        </td>
                                                                        <td>                                                                   <?php  $datet = substr($rq->date,11,20); ?>
                                                                            <span class="font-blue-hoki"> <?php echo $datet  ?> </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            receiver 
                                                                        </td>
                                                                        <td>
                                                                            <span class="font-blue-hoki"> <?php echo $rq->doneby  ?> </span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                             status 
                                                                        </td>
                                                                        <td>
                                                                            
                                                                            <?php  
                                              if($rq->status == 'new'){$rqstatus = " <span class='label label-sm label-success'> New </span> " ;}
                                              if($rq->status == 'received'){$rqstatus = "<span class='label label-sm label-info'> Received </span> " ;}
                                              if($rq->status == 'pending'){$rqstatus = "<span class='label label-sm label-warning'>  Pending </span> " ;}
                                              if($rq->status == 'closed'){$rqstatus = "<span class='label label-sm label-danger'> Closed </span>" ;}
                                              echo $rqstatus ;
                                              
                                               ?>
                                                                             
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                                 
                                                      </div>
                                                <div class="tab-pane" id="tab_1_2">
                                                    <div class="scroller" style="height: 339px;" data-always-visible="1" data-rail-visible="0">
                                                        <ul class="feeds">
                                                            
                                                                
                                                                 <?php
                                                            $idn = $_GET['id'];
                                                             $dmsga = record_get_by_rid("$idn");
                                                             $dmsg = record_get("WHERE `rid` = '$idn' ORDER BY `id` ASC");
                                                                    if($dmsg == NULL)
                                                                          echo ('null');
                                                                    $trcount = @count($dmsg);
                                                                    if($trcount == 0)
                                                                          echo ('0');
                                                                          
                                                                ?>
                                                                 <li>
                                                                <div class="col1">
                                                                    <div class="cont font-blue-hoki">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-success">
                                                                                <i class="icon-docs"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> <?php echo $dmsga->uname ?> Add <span class="label label-sm label-success"> New</span> Request on
                                                                                
                                                                                <br>
                                                                                 <span class="font-grey-salsa"> <?php echo $dmsga->day ?>&nbsp<?php echo substr($dmsga->date,0,10) ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> <?php echo substr($dmsga->date,11,20) ?> </div>
                                                                </div>
                                                            </li>
                                                                
                                                                <?php
                                                                          for($i = 0 ; $i < $trcount; $i++)
                                                                          {
                                                                              $user = $dmsg[$i];
                                                                              if($user->msg != '' && $rq->problem != $user->msg ){
                                                                 ?>
                                                                 <li>
                                                                <div class="col1">
                                                                    <div class="cont font-blue-hoki">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-success">
                                                                                <i class="icon-user-following"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"> <?php echo $user->uname ?> add <i class="fa fa-mail-forward font-green"></i> reply to request
                                                                                on
                                                                                <br>
                                                                                <span class="font-grey-salsa"> <?php echo $user->day ?>&nbsp<?php echo substr($user->date,0,10) ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> <?php echo substr($user->date,11,20) ?> </div>
                                                                </div>
                                                            </li>
                                                            <?php }
                                                            if($user->msg == '' && $user->status == 'received'){
                                                                 ?>
                                                             <li>
                                                                
                                                                    <div class="col1">
                                                                        <div class="cont font-blue-hoki">
                                                                            <div class="cont-col1">
                                                                            <div class="label label-sm label-info">
                                                                                <i class="fa fa-bullhorn"></i>
                                                                            </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> <?php echo $user->uname ?> change request to <span class='label label-sm label-info'> Received </span>&nbsp  on
                                                                               <br>
                                                                                <span class="font-grey-salsa"> <?php echo $user->day ?>&nbsp<?php echo substr($user->date,0,10) ?></span>
                                                                                 </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                   <div class="col2">
                                                                        <div class="date"> <?php echo substr($user->date,11,20) ?> </div>
                                                                    </div>
                                                            </li>
                                                         <?php  }
                                                        if($user->msg == '' && $user->status == 'pending'){
                                                                 ?>
                                                            <li>
                                                                <div class="col1">
                                                                    <div class="cont font-blue-hoki">
                                                                        <div class="cont-col1">
                                                                            <div class="label label-sm label-warning">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cont-col2">
                                                                            <div class="desc"><?php echo $user->uname ?> change request to <span class='label label-sm label-warning'>  Pending </span>on
                                                                            <br>
                                                                                 <span class="font-grey-salsa"> <?php echo $user->day ?>&nbsp<?php echo substr($user->date,0,10) ?></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col2">
                                                                    <div class="date"> <?php echo substr($user->date,11,20) ?> </div>
                                                                </div>
                                                            </li>
                                                         <?php  }if($user->msg == '' && $user->status == 'closed'){
                                                                 ?>
                                                             <li>
                                                                    <div class="col1">
                                                                        <div class="cont font-blue-hoki">
                                                                            <div class="cont-col1">
                                                                            <div class="label label-sm label-danger">
                                                                                <i class="fa fa-bell-o"></i>
                                                                            </div>
                                                                            </div>
                                                                            <div class="cont-col2">
                                                                                <div class="desc"> <?php echo $user->uname ?> change request to <span class='label label-sm label-danger'> Closed </span>  on
                                                                               <br>
                                                                                <span class="font-grey-salsa"> <?php echo $user->day ?>&nbsp<?php echo substr($user->date,0,10) ?></span>
                                                                                 </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col2">
                                                                        <div class="date"> <?php echo substr($user->date,11,20) ?> </div>
                                                                    </div>
                                                            </li>
                                                         <?php  } } ?>
                                                        
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--END TABS-->
                                        </div>
                                    </div>
                                    <!-- END PORTLET-->
                                        <!-- END PORTLET MAIN -->
                                     
                                                
                                                                
                                       
                                    </div>
                                    <!-- END BEGIN PROFILE SIDEBAR -->
                                    <!-- BEGIN PROFILE CONTENT -->
                                    <div class="profile-content">
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="portlet light portlet-fit bg-inverse bordered">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                            <i class="icon-microphone font-green"></i>
                                                            <span class="caption-subject bold font-green uppercase"> Timeline 1</span>
                                                            <span class="caption-helper">default option...</span>
                                                        </div>
                                                    </div>
                                                    <div class="portlet-body">
                                                        <div class="timeline   white-bg white-bg">
                                                            <?php
                                                            $idn = $_GET['id'];
                                                             $dmsg = record_get("WHERE `msg` NOT LIKE '' AND `rid` = '$idn' ORDER BY `id` ASC");
                                                                    if($dmsg == NULL)
                                                                          echo ('null');
                                                                    $trcount = @count($dmsg);
                                                                    if($trcount == 0)
                                                                          echo ('0');
                                                                ?>
                                                                <?php
                                                                          for($i = 0 ; $i < $trcount; $i++)
                                                                          {
                                                                              $user = $dmsg[$i];
                                                                 ?>
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <div class="timeline-icon">
                                                                        <i class="icon-user-following font-green"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <span class="timeline-body-alerttitle font-green">Posted By : <?php echo $user->uname ;?></span>
                                                                            <span class="timeline-body-time font-grey-cascade"><?php echo $user->day ; ?>&nbsp <?php echo $user->date ?></span>
                                                                        </div>
                                                                        <div class="timeline-body-head-actions">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <span class="font-blue-dark"> <?php echo $user->msg ?>
                                                                           
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                            <?php } ?>
                                                            <!-- TIMELINE ITEM -->
                                                            <div class="timeline-item">
                                                                <div class="timeline-badge">
                                                                    <div class="timeline-icon">
                                                                        <i class="fa fa-mail-forward font-green"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-body">
                                                                    <div class="timeline-body-arrow"> </div>
                                                                    <div class="timeline-body-head">
                                                                        <div class="timeline-body-head-caption">
                                                                            <span class="timeline-body-alerttitle font-green">Post Reply</span>
                                                                            
                                                                        </div>
                                                                        <div class="timeline-body-head-actions">
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class="timeline-body-content">
                                                                        <form method="post" class="form-horizontal">
                                                                            <div class="form-body">
                                                                                <div class="form-group">
                                                                                    <div class="col-md-6">
                                                                                        <textarea placeholder="Reply . note:This textarea has a limit of 225 chars." maxlength="225" type="text" rows="5" required name="problem" data-required="1" class="form-control" ></textarea> </div>
                                                                                </div>
                                                                                <div class="form-actions">
                                                                                    <div class="row">
                                                                                        <div class="col-md-offset-0 col-md-9">
                                                                                            <button type="submit" class="btn green">Submit</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END TIMELINE ITEM -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- END PROFILE CONTENT -->
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
        
         <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <script src="../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/trandate.js" type="text/javascript"></script>  
       <!-- <script src="../assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <script src="../assets/pages/scripts/timeline.min.js" type="text/javascript"></script>-->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

    </body>

</html>
