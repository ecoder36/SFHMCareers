
<?php

require_once('log/adminlogsession.php');

if($_SESSION['admin_info'] != false && $_SESSION['admin_info']->isadmin == 1 )
{
    
    
require_once('require/api/db.php');
require_once('require/api/usersAPI.php');

if(isset($_GET['del']))
{
//die($_GET['del']);
            $_del = (int)$_GET['del'];
            if($_del == 0)
                die('Bad Access 2');

             $result = users_delete($_del);
             tinyf_db_close();
             if($result){
                      header("Location: ?ddel=d");
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
                          $admin = "admin" ;
                          $usr = "user" ;
                          $admin1 = "1" ;
                          $usr0 = "0" ;
                          
                            if($pperm == $admin){
                               echo $admin1 ;
                               $perm = $admin1 ;
                            } 
                            if($pperm == $usr) {  echo $usr0 ; $perm = $usr0 ; }
                            echo trim($_POST['password']) ;
                        $result = users_update($_id,$_POST['name'],$_POST['uname'],trim($_POST['password']),$perm);
                        tinyf_db_close();
                        //u_db_close();
                        $un = $_POST['uname'];
                        if($result)
                             {
                              header("Location: ?userupdate=$un");
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
                          $admin = "admin" ;
                          $usr = "user" ;
                          $admin1 = "1" ;
                          $usr0 = "0" ;
                          
                            if($pperm == $admin){
                               echo $admin1 ;
                               $perm = $admin1 ;
                            } 
                            if($pperm == $usr) {  echo $usr0 ; $perm = $usr0 ; }

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

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Admin Users </title>
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
                    <div class="container-fluid">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Admin Users
                                <small>Users</small>
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
                                <span>users</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <?php
                    if(isset($_GET['userupdate'])){echo ' <div class="alert alert-success ">
                    <button class="close" data-close="alert"></button><strong>Success! </strong>The user '.$_GET['userupdate'].' has been updated successfully! </div>';}

                     if(isset($_GET['added'])){echo ' <div class="alert alert-success ">
                      <button class="close" data-close="alert"></button><strong>Success! </strong>The user '.$_GET['added'].' has been Added successfully! </div>';}

                      if(isset($_GET['ddel'])){echo ' <div class="alert alert-success ">
                       <button class="close" data-close="alert"></button><strong>Success! </strong>The user has been deleted successfully! </div>';}

                     if(isset($_GET['error'])){echo ' <div class="alert alert-danger ">
                     <button class="close" data-close="alert"></button><strong>Error! </strong> Please fill In Name , UserName and Password </div>';}

                      if(isset($_GET['beforeaddgetinfo'])){echo ' <div class="alert alert-danger ">
                      <button class="close" data-close="alert"></button><strong>Error! </strong> This Name Or Username exist in the table</div>';}

                      if(isset($_GET['beforeupdategetinfo'])){echo ' <div class="alert alert-danger ">
                      <button class="close" data-close="alert"></button><strong>Error! </strong> This Name Or Username exist in the table</div>';}

                     ?>
                     
                        <form action="" method="post">
<input type="checkbox" name="myCheckbox[]" value="id" />val1<br />
<input type="checkbox" name="myCheckbox[]" value="name" />val2<br />
<input type="checkbox" name="myCheckbox[]" value="uname" />val3<br />
<input type="checkbox" name="myCheckbox[]" value="Permission" />val4<br />
<input type="checkbox" name="myCheckbox[]" value="Edit" />val5
<input type="submit" name="Submit" value="Submit" />
</form>

                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject bold uppercase">Users</span>
                                            </div>
                                            <div class="tools"> </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="table-toolbar">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="btn-group">
                                                            <button id="sample_editable_1_new" class="btn green"> Add New
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                         <?php
                                                        $users = users_get('ORDER BY `id` DESC' );
                                                        if($users == NULL)
                                                          //  die ('problem');
                                                              echo ('');
                                                        $ucount = @count($users);
            
                                                        if($ucount == 0)
                                                      //      die ('No users');
                                                              echo ('');
            
                                                        ?>
                                                <table class="table table-striped table-hover table-bordered" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <?php
                                                              $myboxes = $_POST['myCheckbox'];
                                                      if(!empty($myboxes))
                                                      {
                                                              $test = array_unique($myboxes);
                                                              foreach ($test as $param_namea => $val) {
                                                                echo '<th>'.$val.'</th>' ;
                                                               } 
                                                      }
                                                        ?>
                                                        
                                                     
                                                            
                                                        <!--    <th>Id              </th>
                                                            <th>Name            </th>
                                                            <th>UserName             </th>
                                                            <th>Password     </th>
                                                            <th>Permission     </th>
                                                            <th>Edit        </th>
                                                            <th>Delete           </th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
            
                                                       <?php
                                                       
                                                        
                                                              $test = array_unique($myboxes);
                                                              for($i = 0 ; $i < $ucount; $i++)
                                                                  {
                                                                      $user = $users[$i];
                                                                      
                                                                      
                                                                      
                                                                        $myboxes = $_POST['myCheckbox'];
                                                      if(!empty($myboxes))
                                                      {   
                                                                      
                                                                    echo  "<tr>"  ;   
                                                                    
                                                                    
                                                                   foreach ($test as $param_namea => $val) 
                                                                     {
                                                                       echo "<td>".$user->$val."</td>" ;
                                                                     }   
                                                                     
                                                                     
                                                                     
                                                                  echo  "</tr>" ;   
                                                      }    
                                                                  
                                                                  
                                                                  }
                                                           
                                                      
                                                      
                                                     
                                                      
                                                      
                                                    /*   for($i = 0 ; $i < $ucount; $i++)
                                                      {
                                                          $user = $users[$i];
                                                          if ($user->isadmin == '0' ){ $per = 'user' ;}else{ $per = 'admin' ;}
                                                     echo  "<tr>
                                                              <td> $user->id   </td>
                                                              <td> $user->name   </td>
                                                              <td class=\"center\" > $user->uname   </td>
                                                              <td>  </td>
                                                              
                                                              <td> $per   </td>
                                                              <td> <a class=\"edit\" href=\"javascript:;\"> Edit </a> </td>
                                                              <td> <a class=\"delete1\" href=\"?del=$user->id&5945\" onclick=\"return confirm('Are you sure to delete this row ($user->name) ?')\"> Delete </a> </td>
                                                      </tr>";
                                                      }*/
                                                      
                                                      
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
       <script src="require/js/admintable.js" type="text/javascript"></script>
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
if(@$_SESSION['admin_info']->isadmin == 0){
	header("Location: addjobs.php");
}
?>