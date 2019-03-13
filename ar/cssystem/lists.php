
<?php require_once ('log/logsession.php'); 

if($_SESSION['user_info_2'] != false && $_SESSION['user_info_2']->isadmin == 1 )
{
?>
<?php

@require_once('require/api/db.php');
@require_once('require/api/regionAPI.php');

if(isset($_GET['del']))
{
//die($_GET['del']);
            $_del = (int)$_GET['del'];
            $dc = $_GET['dc'] ;
            if($_del == 0)
                die('Access Problem 2');

             $result = region_delete($_del);
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
            $user = region_get_by_region_city($_POST['eregion'],$_POST['ecity']);
       //     echo $_id;
            if ($user != NULL)
              {
                        $rcount = count($user);
                           for($i = 0 ; $i < $rcount; $i++)
                          {
                             $res = $user [$i] ;
                                    if (($res->id != $_id))
                                    {
                                        header("Location: ?beforeupdategetinfo=".$_POST['ecity']."&old=".$res->ecity."");
                                         die();
                                    }
                          }
                     tinyf_db_close();
              }
          {   
                        $result = region_update($_id,$_POST['eregion'],$_POST['ecity']);
                        tinyf_db_close();
                        //u_db_close();
                        $un = $_POST['ecity'];
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
                            if(!isset($_GET['id']) || (!isset($_POST['eregion'])) || (!isset($_GET['ecity']))  )
                            {
                                die('Problem23');
                            }
                            $user = region_get_by_region_city($_POST['eregion'],$_POST['ecity']);
                            if ($user != NULL)
                            {
                                        $rcount =@count($user);
                                           for($i = 0 ; $i < $rcount; $i++)
                                          {
                                             $resu = $user [$i];
                                          }
                                      tinyf_db_close();
                                      header("Location:?beforeaddgetinfo=".$_POST['ecity']."&old=".$resu->ecity."");
                                      die();
                            }
                      

                          $result = region_add($_POST['eregion'],$_POST['ecity']);
                          tinyf_db_close();
                          if($result)
                              {
                                  header("Location:?added=".$_POST['ecity']."");
                              }
                          else
                          header("Location:?error=er");
          }
          die();
}

?>


<!DOCTYPE html>


<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> المدن </title>
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
<?php $enlink = "../../en/cssystem/lists.php" ?>
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
                            <h1 class="font-blue-dark"> <i class="icon-user"></i> <?php echo $_SESSION['user_info_2']->name ?>
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
                       <button class="close" data-close="alert"></button><strong>تم حذف مدينة '.$_GET['ddel'].' بنجاح </strong></div>';}
                       if(isset($_GET['contentupdate'])){echo ' <div class="alert alert-success ">
                       <button class="close" data-close="alert"></button><strong> تم تحديث '.$_GET['contentupdate'].' بنجاح </strong></div>';}
                        if(isset($_GET['added'])){echo ' <div class="alert alert-success ">
                       <button class="close" data-close="alert"></button><strong> تم إضافة مدينة'.$_GET['added'].' بنجاح </strong></div>';}
                         if(isset($_GET['beforeaddgetinfo'])){echo '<div class="alert alert-danger">
                        <button class="close" data-close="alert"></button><strong> لا يمكن إضافة مدينة '.$_GET['beforeaddgetinfo'].' لأنها موجودة في قاعدة البيانات </strong></div>';}
                        if(isset($_GET['beforeupdategetinfo'])){echo '<div class="alert alert-danger">
                        <button class="close" data-close="alert"></button><strong> خطأ : مدينة '.$_GET['beforeupdategetinfo'].' موجودة في قاعدة البيانات </strong></div>';}
                     ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-yellow">
                                                <i class="icon-settings font-yellow"></i>
                                                <span class="caption-subject bold uppercase">المناطق و المدن</span>
                                            </div>
                                            <div class="tools"> </div>
                                        </div>
                                        
                                        <div class="portlet-body">
                                            <div class="table-toolbar">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="btn-group">
                                                             <a class="btn yellow" data-toggle="modal" href="#sadd_modal"><i class="fa fa-plus"></i> إضافة مدينة جديدة </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <?php
                                                        $users = region_get('ORDER BY `id` DESC' );
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
                                                        <th style="display:none;" class="all">الرقم</th>
                                                        <th class="min-phone-l">المنطقة</th>
                                                        <th class="min-phone-l">المدينة</th>
                                                        <th class="none">تعديل</th>
                                                        <th class="none">حذف</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php for($i = 0 ; $i < $ucount; $i++)
                                                      {
                                                          
                                                          $user = $users[$i]; ?>
                                                    <tr>
                                                        <td style="display:none;"><?php echo $user->id ?></td>
                                                        <td><?php echo $user->eregion ?></td>
                                                        <td><?php echo $user->ecity ?></td>
                                                        <td> <a class="edit" href="javascript:;"> تعديل </a> </td>
                                                    <td> <a class="delete1" href="?del=<?php echo $user->id ?>&dc=<?php echo $user->ecity ?>&5945" onclick="return confirm('هل أنت متأكد من حذف مدينة  (<?php echo $user->ecity ?>) ?')"> حذف </a> </td>
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
                                                    <h4 class="modal-title">إضافة مدينة جديدة </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="?id=&eregion=e&ecity=c" class="form-horizontal" method="post" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">المنطقة</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="eregion" value="" />
                                                                 <span class="help-block"><P> </P>  </span>
                                                            </div>
                                                        </div> 
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">المدينة</label>
                                                            <div class="col-md-6">
                                                                <input type="text" class="form-control" name="ecity" value="" />
                                                                 <span class="help-block"><P> </P>  </span>
                                                            </div>
                                                        </div> 
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-8 col-md-9">
                                                                    <button type="submit" class="btn yellow btn-primary">حفظ</button>
                                                                    <button type="button" data-dismiss="modal" class="btn default" aria-hidden="true">إلغاء</button>
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
if($_SESSION['user_info_2'] == false ){
	header("Location: login.php?error=r");
}
if(@$_SESSION['user_info_2']->isadmin != 1){
	header("Location: overview.php");
}
?>