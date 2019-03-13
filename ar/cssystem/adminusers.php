
<?php

require_once('log/logsession.php');

if($_SESSION['user_info_2'] != false && $_SESSION['user_info_2']->isadmin == 1 )
{
    
    
require_once('require/api/db.php');
require_once('require/api/usersAPI.php');

if(isset($_GET['del']) && isset($_GET['idstatus']))
{
//die($_GET['del']);
           // $_del = (int)$_GET['del'];
           $_del = (int)$_GET['del'];
           
            if($_del == 0)
                die('Bad Access 2');

             $_idstatus = $_GET['idstatus'];
             $result = eid_update($_del,$_idstatus);
             tinyf_db_close();
             if($result){
                      header("Location: ?ddel=d");
                   //die('Success');
             }
             else {
                      header("Location: ?nddel=d");
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
            $user = users_get_info($_POST['name'],$_POST['uname']);
       //     echo $_id;
            if ($user != NULL)
              {
                        $rcount = count($user);
                           for($i = 0 ; $i < $rcount; $i++)
                          {
                             $res = $user [$i] ;
                                    if (($res->id != $_id))
                                    {
                                        header("Location: ?beforeupdategetinfo=".$_POST['name']."&".$res->name."&".$res->isadmin."");
                                         die();
                                    }
                          }
                     tinyf_db_close();
              }
          {
                                        $pperm = $_POST['perm'] ;
                         //echo $pperm ; die();
                            $admin = "مسؤول" ;
                          $usr = "مستخدم" ;
                          $admin1 = "1" ;
                          $usr3 = "2" ;
                          
                            if($pperm == $admin){ $perm = $admin1 ; } 
                            else if($pperm == $usr)  { $perm = $usr3 ; }
                          
                            echo trim($_POST['password']) ;
                        $result = users_update($_id,$_POST['name'],$_POST['uname'],trim($_POST['password']),$perm);
                        tinyf_db_close();
                        //u_db_close();
                        $un = $_POST['name'];
                        if($result)
                             {
                              header("Location: ?userupdate=$un&perm=$pperm");
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

                            if(!isset($_POST['name']) || (!isset($_POST['uname'])) || (!isset($_POST['password']))  )
                            {
                                die('Problem');
                            }
                            $user = users_get_info($_POST['name'],$_POST['uname']);
                            if ($user != NULL)

                              {
                                        $rcount =@count($user);
                                           for($i = 0 ; $i < $rcount; $i++)
                                          {
                                             $res = $user [$i];
                                          }
                                      tinyf_db_close();
                                      header("Location:?beforeaddgetinfo=".$_POST['name']."&".$res->name."");
                                      die();
                            }
                          $pperm = $_POST['perm'] ;
                    
                   // echo $pperm ; die();
                            if($pperm == "مسؤول"){ $perm = "1" ;  }
                            if($pperm == "مستخدم") {  $perm = "2" ; }

                          $result = users_add($_POST['name'],$_POST['uname'],$_POST['password'],$perm);
                          tinyf_db_close();
                          if($result)
                              {
                                  header("Location:?added=".$_POST['name']."");
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
        <title> إدارة المستخدمين </title>
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
        <?php $enlink = "../../en/cssystem/adminusers.php" ?>
        <?php $acadminusers ="active" ?>
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
                               <?php  //require_once ("require/themepanel.php") ; ?>
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
                                <span>المستخدميين</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <?php
                    if(isset($_GET['userupdate'])){echo ' <div class="alert alert-success ">
                    <button class="close" data-close="alert"></button><strong> تم تحديث صلاحيات '.$_GET['userupdate'].' إلى '.$_GET['perm'].' بنجاح  </strong></div>';}

                     if(isset($_GET['added'])){echo ' <div class="alert alert-success ">
                      <button class="close" data-close="alert"></button><strong> تم إضافة المستخم '.$_GET['added'].' بنجاح </strong></div>';}

                      if(isset($_GET['ddel'])){echo ' <div class="alert alert-success ">
                       <button class="close" data-close="alert"></button><strong> تم تحديث حالة المستخدم بنجاح </strong></div>';}
                       
                          if(isset($_GET['nddel'])){echo ' <div class="alert alert-danger ">
                       <button class="close" data-close="alert"></button><strong> لم يتم تحديث حالة المستخدم     </strong></div>';}

                     if(isset($_GET['error'])){echo ' <div class="alert alert-danger ">
                     <button class="close" data-close="alert"></button><strong>خطأ يوجد بيانات لم يتم إكمالها  </strong> </div>';}

                      if(isset($_GET['beforeaddgetinfo'])){echo ' <div class="alert alert-danger ">
                      <button class="close" data-close="alert"></button><strong> خطأ لا يمكن إضافة المستخدم لأنه موجود في قاعدة البيانات </strong></div>';}

                      if(isset($_GET['beforeupdategetinfo'])){echo ' <div class="alert alert-danger ">
                      <button class="close" data-close="alert"></button><strong> خطأ لا يمكن تسجيل هذا الاسم لأنه موجود مسبقا في قاعدة البيانات </strong></div>';}

                     ?>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject bold uppercase">المستخدميين</span>
                                            </div>
                                            <div class="tools"> </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-toolbar">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="btn-group">
                                                            <button id="sample_editable_1_new" class="btn yellow"> إضافة مستخدم جديد
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                         <?php
                                                     
            
                                                        $users = users_get('ORDER BY `eid` ASC ' );
                                                        if($users == NULL)
                                                          //  die ('problem');
                                                              echo ('');
                                                        $ucount = @count($users);
            
                                                        if($ucount == 0)
                                                      //      die ('No users');
                                                              echo ('');
            
                                                        ?>
                                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                                                    <thead>
                                                        <tr>
                                                            <th >الرقم              </th>
                                                            <th >الاسم الكامل            </th>
                                                            <th >اسم المستخدم             </th>
                                                            <th >كلمة المرور     </th>
                                                            <th >الصلاحية     </th>
                                                            <th >التعديل        </th>
                                                            <th >           </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
            
                                                       <?php
                                                      for($i = 0 ; $i < $ucount; $i++)
                                                      {
                                                          $user = $users[$i];
                                                         
                                                           if ($user->isadmin == '2' ){ $per = 'مستخدم' ;}
                                                           if ($user->isadmin == '1' ){ $per = 'مسؤول' ;}
                                                           if ($user->eid == '1'){ $statusu = "<a class=\"delete1\" href=\"?del=$user->id&5945&idstatus=2\" onclick=\"return confirm('هل انت متأكد من إيقاف المستخدم  ($user->name) ?')\"> إيقاف </a>" ; $tr = '<tr>' ;}
                                                           if ($user->eid == '2'){ $statusu = "<a class=\"label label-sm label-success delete1\" href=\"?del=$user->id&5945&idstatus=1\" onclick=\"return confirm(' هل أنت متأكد من تفعيل المستخدم ($user->name) ?')\"> تفعيل </a>" ; $tr = '<tr class="danger">' ;}
                                                     echo  "$tr
                                                              <td> $user->id   </td>
                                                              <td> $user->name   </td>
                                                              <td class=\"center\" > $user->uname   </td>
                                                              <td>  </td>
                                                              
                                                              <td> $per   </td>
                                                              <td> <a class=\"edit\" href=\"javascript:;\"> تعديل </a> </td>
                                                              <td> $statusu </td>
                                                      </tr>";
                                                      }
                                                      ?>
            
                                                    <!--    
                                                        <tr>
                                                            <td> 99998 </td>
                                                            <td> Alex Nilson </td>
                                                            <td> 1234 </td>
            
                                                            <td class="center"> power user </td>
                                                            <td>
                                                                <a class="edit" href="javascript:;"> Edit </a>
                                                            </td>
                                                            <td>
                                                                <a class="delete" href="javascript:;"> Delete </a>
                                                            </td>
                                                        </tr>-->
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
       <script src="require/js/adminuser.js" type="text/javascript"></script>
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