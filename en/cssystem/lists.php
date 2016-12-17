
<?php require_once ('log/logsession.php'); 

if($_SESSION['user_info'] != false && $_SESSION['user_info']->isadmin == 1 )
{
?>
<?php

@require_once('require/api/db.php');
@require_once('require/api/listsAPI.php');

if(isset($_GET['del']))
{
//die($_GET['del']);
            $_del = (int)$_GET['del'];
            $dc = $_GET['dc'] ;
            if($_del == 0)
                die('Access Problem 2');

             $result = list_delete($_del);
             tinyf_db_close();
             if($result){
                      header("Location: ?ddel=$dc");
                   //die('Success');
             }
             else {
                      die('Failure delete');
                  }

              die();
}

if(isset($_GET['id'])) 
{
          //die($_GET['id']);

          $_id = (int)$_GET['id'];

        //  if($_id != 0)
            //die($_POST['ext']);
            //  die('Bad Access 2');
 if($_id != 0)
{
            $user = list_get_by_content($_POST['content']);
       //     echo $_id;
            if ($user != NULL)
              {
                        $rcount = count($user);
                           for($i = 0 ; $i < $rcount; $i++)
                          {
                             $res = $user [$i] ;
                                    if (($res->id != $_id))
                                    {
                                        header("Location: ?beforeupdategetinfo=".$_POST['content']."&old=".$res->content."");
                                         die();
                                    }
                          }
                     tinyf_db_close();
              }
          {   
                        $result = list_update($_id,$_POST['content']);
                        tinyf_db_close();
                        //u_db_close();
                        $un = $_POST['content'];
                        if($result)
                             {
                              header("Location: ?contentupdate=$un");
                            }
                        else {
                           //  header("Location: mfProfile.php?id=$_id");
                            die('Update Failure ');
                         }
                         die();
          }
    }
          if($_id == 0)
          {
                            if(!isset($_GET['id']) || (!isset($_POST['content'])) || (!isset($_GET['tname']))  )
                            {
                                die('Problem2');
                            }
                            $user = list_get_by_content($_POST['content']);
                            if ($user != NULL)
                            {
                                        $rcount =@count($user);
                                           for($i = 0 ; $i < $rcount; $i++)
                                          {
                                             $resu = $user [$i];
                                          }
                                      tinyf_db_close();
                                      header("Location:?beforeaddgetinfo=".$_POST['content']."&old=".$resu->content."");
                                      die();
                            }
                      
                          

                          $result = list_add($_POST['tname'],(ltrim($_POST['content'])));
                          tinyf_db_close();
                          if($result)
                              {
                                  header("Location:?added=".$_POST['content']."");
                              }
                          else
                          header("Location:?error=er");
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
        <title>Lists</title>
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
 <?php $lists="active" ?>
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
                        <div class="page-toolbar">
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
                              <?php 
                              if(isset($_GET['ddel'])){echo ' <div class="alert alert-success ">
                       <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['ddel'].' has been deleted successfully! </div>';}
                       if(isset($_GET['contentupdate'])){echo ' <div class="alert alert-success ">
                       <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['contentupdate'].' has been updated successfully! </div>';}
                        if(isset($_GET['added'])){echo ' <div class="alert alert-success ">
                       <button class="close" data-close="alert"></button><strong>Success! </strong>'.$_GET['added'].' has been Added successfully! </div>';}
                         if(isset($_GET['beforeaddgetinfo'])){echo '<div class="alert alert-danger">
                        <button class="close" data-close="alert"></button><strong>Error Added failure! </strong>  '.$_GET['beforeaddgetinfo'].' is on the table </div>';}
                        if(isset($_GET['beforeupdategetinfo'])){echo '<div class="alert alert-danger">
                        <button class="close" data-close="alert"></button><strong>Error Update failure! </strong> '.$_GET['beforeupdategetinfo'].' is on the table </div>';}
                     ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-green">
                                                <i class="icon-settings font-green"></i>
                                                <span class="caption-subject bold uppercase">Sites</span>
                                            </div>
                                            <div class="tools"> </div>
                                        </div>
                                        
                                        <div class="portlet-body">
                                            <div class="table-toolbar">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="btn-group">
                                                             <a class="btn green" data-toggle="modal" href="#sadd_modal"><i class="fa fa-plus"></i> Add New </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <?php
                                                        $users = list_get('WHERE `tname` = "site" ORDER BY `id` DESC' );
                                                        if($users == NULL)
                                                          //  die ('problem');
                                                              echo ('');
                                                        $ucount = @count($users);
                                                        if($ucount == 0)
                                                      //      die ('No users');
                                                              echo ('');
            
                                                        ?>
                                            <table class="table table-striped table-bordered table-hover" width="100%" id="sample_editable_1">
                                                <thead>
                                                    <tr>
                                                        <th style="display:none;" class="all">Id</th>
                                                        <th class="min-phone-l">Site</th>
                                                        <th class="none">Edit</th>
                                                        <th class="none">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php for($i = 0 ; $i < $ucount; $i++)
                                                      {
                                                          
                                                          $user = $users[$i]; ?>
                                                    <tr>
                                                        <td style="display:none;"><?php echo $user->id ?></td>
                                                        <td><?php echo $user->content ?></td>
                                                        <td> <a class="edit" href="javascript:;"> Edit </a> </td>
                                                    <td> <a class="delete1" href="?del=<?php echo $user->id ?>&dc=<?php echo $user->content ?>&5945" onclick="return confirm('Are you sure to delete the (<?php echo $user->content ?>) ?')"> Delete </a> </td>
                                                    </tr>
                                                <?php }  ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Start Site EDIT FORM -->
                                    <div id="sadd_modal" class="modal fade" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Add New Site </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="?id=&tname=site" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Site</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="content" value="" />
                                                                 <span class="help-block"><P> </P>  </span>
                                                            </div>
                                                        </div> 
                                                        <input type="hidden" name="tname" class="form-control" value="site" /> 
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-8 col-md-9">
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
                                    <!-- END Site EDIT FORM -->
                                    <!-- END EXAMPLE TABLE PORTLET-->
                                </div>
                                <div class="col-md-6">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-green">
                                                <i class="icon-settings font-green"></i>
                                                <span class="caption-subject bold uppercase">Problems Types</span>
                                            </div>
                                            <div class="tools"> </div>
                                        </div>
                                        <div class="portlet-body">
                                           <div class="table-toolbar">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="btn-group">
                                                             <a class="btn green" data-toggle="modal" href="#cadd_modal"><i class="fa fa-plus"></i> Add New </a>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <?php
                                                        $users = list_get('WHERE `tname` = "ptype" ORDER BY `id` DESC' );
                                                        if($users == NULL)
                                                          //  die ('problem');
                                                              echo ('');
                                                        $ucount = @count($users);
                                                        if($ucount == 0)
                                                      //      die ('No users');
                                                              echo ('');
            
                                                        ?>
                                            <table class="table table-striped table-bordered table-hover" width="100%" id="sample_editable_11">
                                                <thead>
                                                    <tr>
                                                        <th style="display:none;" class="all">Id</th>
                                                        <th class="min-phone-l">Type</th>
                                                        <th class="none">Edit</th>
                                                        <th class="none">Delete</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                   <?php for($i = 0 ; $i < $ucount; $i++)
                                                      {
                                                          
                                                          $user = $users[$i]; ?>
                                                    <tr>
                                                        <td style="display:none;"><?php $j = $i + 1 ; echo $user->id ?></td>
                                                        <td><?php echo $user->content ?></td>
                                                        <td> <a class="edit" href="javascript:;"> Edit </a> </td>
                                                    <td> <a class="delete1" href="?del=<?php echo $user->id ?>&dc=<?php echo $user->content ?>&5945" onclick="return confirm('Are you sure to delete the (<?php echo $user->content ?>) ?')"> Delete </a> </td>
                                                    </tr>
                                                <?php }  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                     <!-- Start Type EDIT FORM -->
                                    <div id="cadd_modal" class="modal fade" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Add New Type </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="?id=&tname=ptype" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Type</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="content" value="" />
                                                                 <span class="help-block"><P> </P>  </span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="tname" class="form-control" value="ptype" /> 
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-8 col-md-9">
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
                                    <!-- END Type EDIT FORM -->
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
        <!-- <script src="../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>-->
        <script src="require/js/lists.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>

<?php  }
if($_SESSION['user_info'] == false ){
	header("Location: login.php?error=r");
}
if(@$_SESSION['user_info']->isadmin != 1){
	header("Location: overview.php");
}
?>