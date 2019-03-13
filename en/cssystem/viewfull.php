


<?php

@require_once('log/logsession.php');

if($_SESSION['user_info_2'] != false )
{

@require_once('require/api/db.php');
@require_once('require/api/infoAPI.php');
@require_once('require/api/usersAPI.php');

if(empty($_GET['id'])){
      header("Location: form.php?viewerror=errorab");
  //  die ('error');
}


$_id    = (int)$_GET['id'];
if($_SESSION['user_info_2']->isadmin == 1){
     $user   = info_get_by_id(trim($_id)); /* */
     if(isset($_GET['del'])){
         $site = $_GET['site'] ;
     $result = info_delete($_id);
          if($result){
                header("Location: view3.php?sitedel=The data of $site has been deleted successfully!");
            } 
     }
         if(isset($_POST['id'])){
            $uname = $_SESSION['user_info_2']->id ;
             date_default_timezone_set("Asia/Riyadh");
            $udate = date("d/m/Y h:i A");
            
            $result = info_update($_POST['id'],$_POST['ficameras'],$_POST['micameras'],$_POST['fecameras'],$_POST['mecameras'],$_POST['dvr'],$_POST['nvr'],$_POST['pc'],$_POST['controld'],$_POST['screens'],$_POST['switch'],$_POST['ups'],$_POST['note'],$uname,$udate);
            if($result){
                $usite = "The information has been updated successfully!"  ;
                $pid = $_POST['id'] ;
                 header("Location: ?id=$pid&siteupdate=$usite");
            }        
             
         }
    }else{
        $userid =  $_SESSION['user_info_2']->id ;
       $user = info_get_by_ename_id($userid,$_id);
     }
 //$user   = info_get_by_id(trim($_id)); /* */
$useren = users_get_by_id($user->ename);
$username = @$useren->name ;

$uuseren = users_get_by_id($user->uname);
$uusername = @$uuseren->name ;

// img functions
// img delete
if(isset($_GET['imgdel']))
{
//die($_GET['del']);
            $_del = (int)$_GET['imgdel'];
            if($_del == 0)
                die('Bad Access 2');

             $resultd = file_delete($_del);
             tinyf_db_close();
             if($resultd){
                 $file = "file/".$_GET['file'];
                      unlink($file);
                      header("Location: ?imgdelsuccess=del&id=".$_GET['id']."");
                   //die('Success');
             }else {
                      die('Failure delete');
                  }
             // die();
}
// img Add
if(isset($_GET['addpic']))
{
  @$name1 = $_FILES['file']['name']; @$tmp_name = $_FILES['file']['tmp_name']; @$type = $_FILES['file']['type']; @$size = $_FILES['file']['size']; $ext = pathinfo($name1, PATHINFO_EXTENSION);@$error = $_FILES['file']['error']; $uniqid = uniqid(); $file_name = $uniqid.'.'.$ext  ;
                if(move_uploaded_file($tmp_name, "file/".$file_name)){ $file = $file_name; } else {  $file = 'null' ; }
     $LastId = $_GET['id'];
     $result = file_add($LastId,$name1,$file);
        if($resultd){
         header("Location: ?addimg=del&id=".$_GET['id']."");
        }else {
                        header("Location: ?addimgf=del&id=".$_GET['id']."");
                  }
}

?>


<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title><?php echo $user->site ?></title>
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
           <link href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        
          <link href="../assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
          <link href="../assets/pages/css/portfolio.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
<?php $arlink = "../../ar/cssystem/viewfull.php?id=".$_GET['id']."" ?>
        <?php $view2="active" ?>
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
                         <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="view3.php">view</a>
                                <i class="fa fa-circle"></i>
                            </li>
                          
                            <li>
                                <span><?php echo $user->site ?> Requirements</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                     <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                        <div class="portlet">
                                            <div class="portlet-body">
                                                   <?php if(isset($_GET['siteupdate'])){echo ' <div class="alert alert-success ">
                    <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['siteupdate'].'</div>';} ?>
                     

                                                <div class="table-container">
                                                    <div class="portlet box green" style="border:1px solid #caa88e;">
                                                        <div class="portlet-title" style="background-color:#caa88e;">
                                                            <div class="caption">
                                                            <!--    <i class="fa fa-gear"></i>Requirements Table -->
                                                            <?php if($_SESSION['user_info_2']->isadmin == 1){ ?>
                                                                <a class="btn btn-circle btn-icon-only btn-default tooltips" title="Edit" data-toggle="modal" href="#cedit_modal">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>
                                                                <a class="btn btn-circle btn-icon-only btn-default tooltips" title="Delete" href="?id=<?php echo $user->id ?>&del=d&site=<?php echo $user->site ?>" onclick="return confirm('Are you sure to delete informations of (<?php echo $user->site ?>) ?')">
                                                                    <i class="icon-trash"></i>
                                                                </a><?php } ?>
                                                            </div>
                                                            <div class="tools"> </div>
                                                        </div>
                                                        <div class="portlet-body">
                                                        <table class="table table-striped table-hover table-bordered " id="sample_1">
                                                           <thead>
                                                                <tr>
                                                                    <th ></th>
                                                                   
                                                                    <th >Informations</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Region \ City</td><td><?php echo $user->region." \ ".$user->zone ?></td>
                                                                </tr>
                                                                 <tr>   
                                                                  <td class='bold theme-font' >Site</td><td><?php echo $user->site ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Letter Number</td><td><?php echo $user->letternumber ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Letter Date</td><td><?php echo $user->letterdate ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Site Name</td><td><?php echo $user->sitename ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Building Type</td><td><?php echo $user->btype ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Fixed Internal Cameras</td><td><?php echo $user->ficameras ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Moving Internal Cameras</td><td><?php echo $user->micameras ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Fixed External Cameras</td><td><?php echo $user->fecameras ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Moving External Cameras</td><td><?php echo $user->mecameras ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >DVR</td><td><?php echo $user->dvr ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >NVR</td><td><?php echo $user->nvr ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >PC</td><td><?php echo $user->pc ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Workstation</td><td><?php echo $user->controld ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Screens</td><td><?php echo $user->screens ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Switch</td><td><?php echo $user->switch ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >UPS</td><td><?php echo $user->ups ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >Note</td><td><?php echo $user->note ?></td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='bold theme-font' >files</td>
                                                                  <td>
                                                                      <?php
                                                                     $infoid = $user->id;
                                                                     $files = file_get("WHERE `infoid` = $infoid ORDER BY `id` DESC");
                                                                      $ucount1 = @count($files);
                                                                       for($i1 = 0 ; $i1 < $ucount1; $i1++)
                                                                          {
                                                                              $file = $files[$i1];
                                                                      ?>
                                                                              <a href="file/<?php echo $file->fileLink ?>" target="_blank"> <?php echo substr($file->fileName,0,-4) ?>  </a> .
                                                                      <?php  }  ?>
                                                                     
                                                                  </td>
                                                                </tr>
                                                                <tr>   
                                                                  <td class='' >Posted By <?php echo $username ?></td><td>at <?php echo $user->date ?></td>
                                                                </tr>
                                                                <?php if($uusername != NULL){ ?>
                                                                <tr>   
                                                                  <td class='' >Last Update By <?php echo $uusername ?></td><td>at <?php echo $user->udate ?></td>
                                                                </tr>  <?php } else{ } ?>
                                                            </tbody>
                                                        </table>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                        
                                        
                                           <!-- Start View FORM -->
                                    <div id="cedit_modal" class="modal fade" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">update </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="?id=<?php echo $user->id ?>&eregion=e&usite=<?php echo $user->site ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                                             <div class="form-group">
                                                        <label class="control-label col-md-5">Fixed Internal Cameras<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="ficameras" type="text" class="mask_number form-control" value="<?php echo $user->ficameras ?>" />
                                                        </div>
                                                    </div>
                                     
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5">Moving Internal Cameras<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="micameras" type="text" id="mask_number2" class="form-control" value="<?php echo $user->micameras ?>" /> </div>
                                                    </div>
                                               
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5">Fixed External Cameras<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="fecameras" type="text" class="mask_number form-control" value="<?php echo $user->fecameras ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5">Moving External Cameras<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="mecameras" type="text" class="mask_number form-control" value="<?php echo $user->mecameras ?>" /> </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-5">DVR<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="dvr" type="text" class="mask_number form-control" value="<?php echo $user->dvr ?>" /> </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-5">NVR<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="nvr" type="text" class="mask_number form-control" value="<?php echo $user->nvr ?>" /> </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-5">PC<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="pc" type="text" class="mask_number form-control" value="<?php echo $user->pc ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5">Workstation<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="controld" type="text" class="mask_number form-control" value="<?php echo $user->controld ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5">Screens<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="screens" type="text" class="mask_number form-control" value="<?php echo $user->screens ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5">Switch<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="switch" type="text" class="mask_number form-control" value="<?php echo $user->switch ?>" /> </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-5">UPS<span class="required"> * </span></label>
                                                        <div class="col-md-5">
                                                            <input name="ups" type="text" class="mask_number form-control" value="<?php echo $user->ups ?>" /> </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="control-label col-md-5">Note<span class="required">  </span></label>
                                                        <div class="col-md-5">
                                                            <textarea placeholder="note:This textarea has a limit of 225 characters." maxlength="225" type="text" rows="5" name="note" class="form-control" ><?php echo $user->note ?></textarea>
                                                        </div>
                                                    </div>
                                                    <input hidden name="id" value="<?php echo $user->id ?>" />
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-8 col-md-9">
                                                                    <button type="submit" class="btn yellow btn-primary">Submit</button>
                                                                    <button type="button" data-dismiss="modal" class="btn default" aria-hidden="true">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <!-- END View FORM -->
                                    
                                </div>
                                
                                
                                <div class="col-md-12">
                                        <div class="portlet">
                                            <div class="portlet-body">
                                                   <?php if(isset($_GET['siteupdate'])){echo ' <div class="alert alert-success ">
                    <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['siteupdate'].'</div>';} ?>
                     

                                                <div class="table-container">
                                                    <div class="portlet box green" style="border:1px solid #caa88e;">
                                                        <div class="portlet-title" style="background-color:#caa88e;">
                                                            <div class="caption">
                                                                <i class="fa fa-geara"></i>Files
                                                           
                                                            </div>
                                                            <div class="tools"> </div>
                                                        </div>
                                                        <div class="portlet-body">
                                 <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="portfolio-content portfolio-1">
                               
                                <div id="js-grid-juicy-projects" class="cbp">
 
                                                 <?php
                                                                     $infoid = $user->id;
                                                                     $files = file_get("WHERE `infoid` = $infoid ORDER BY `id` DESC");
                                                                      $ucount1 = @count($files);
                                                                       for($i1 = 0 ; $i1 < $ucount1; $i1++)
                                                                          {
                                                                              $file = $files[$i1];
                                                                      ?>       
                                     <div class="cbp-item graphic" >
                                        <div class="cbp-caption" >
                                            <div class="cbp-caption-defaultWrap">
                                                <img src="file/<?php echo $file->fileLink ?>" alt="Image not found" style="width:283px;height:283px;" onerror="this.src='NoImage.jpg';"></div>
                                            <div class="cbp-caption-activeWrap">
                                                <div class="cbp-l-caption-alignCenter">
                                                    <div class="cbp-l-caption-body">
                                                        <a href="?imgdel=<?php echo $file->id ?>&id=<?php echo $user->id ?>&file=<?php echo $file->fileLink ?>&5945" 
                                                         onclick="return confirm('Are you sure to delete (<?php echo $file->fileName ?>) file  ?')"  class="cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">delete</a>
                                                        
                                                        
                                                        
                                                        <a href="file/<?php echo $file->fileLink ?>" class="cbp-lightbox cbp-l-caption-buttonRight btn green uppercase" data-title="Filename<br><?php echo $file->fileName ?>">view larger</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center"><?php echo substr($file->fileName,0,-4) ?></div>
                                        <a href="file/<?php echo $file->fileLink ?>" target="_blank"><div class="cbp-l-grid-projects-desc uppercase text-center uppercase text-center">
                                             <?php echo $file->fileName ?></div></a>
                                    </div>           
                                                                      <?php  }  ?>
                                    
                                </div>
                                <div id="js-loadMore-juicy-projects" class="cbp-l-loadMore-button">
                                    <a class="cbp-l-loadMore-link btn grey-mint btn-outline" title="Edit" data-toggle="modal" href="#attadd_modal">
                                                                    Add More
                                                                </a>
                                                                <!-- Start Add pic FORM -->
                                    <div id="attadd_modal" class="modal fade" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Add Attachment </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="?id=<?php echo $user->id ?>&addpic=e ?>" class="form-horizontal" method="post" enctype="multipart/form-data">   
                                                        <input type="hidden" name="id" class="form-control" value="<?php echo  @$user->id  ; ?>" /> 
                                                                 <div class="form-group">
                                                                    <label class="control-label col-md-4">Attachment</label>
                                                                    <div class="col-md-7">
                                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                            <span class="btn green btn-file">
                                                                                <span class="fileinput-new"> Select file </span>
                                                                                <span class="fileinput-exists"> Change </span>
                                                                                <input type="file" name="file"> </span>
                                                                            <span class="fileinput-filename"> </span> &nbsp;
                                                                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <button type="submit" class="btn green btn-primary">Submit</button>
                                                                    <button type="button" data-dismiss="modal" class="btn default" aria-hidden="true">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                <!-- END Add pic FORM -->                 
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                                
                                
                                
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
        
      
        <!-- BEGIN PAGE LEVEL PLUGINS -->
             <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        
        <script src="../assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/viewfull.js" type="text/javascript"></script>
       
       
        <script src="../assets/pages/scripts/portfolio-1.min.js" type="text/javascript"></script>
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

