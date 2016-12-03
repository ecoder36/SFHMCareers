<?php $password = "123" ; ?>



<?php
@require_once('require/api/db.php');
@require_once('require/api/formAPI.php');

if(isset($_GET['del']) && (isset($_GET['p'] ) && $_GET['p'] == $password  ) )
{
//die($_GET['del']);
            $_del = (int)$_GET['del'];
            if($_del == 0)
                die('Bad Access 2');

             $result = form_delete($_del);
             tinyf_db_close();
             if($result){
                      header("Location: ?ddel=d&p=$password");
                   //die('Success');
             }
             else {
                      die('Failure delete');
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
        <title> القائمة </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="help/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="help/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="help/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="help/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="help/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="help/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="help/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="help/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="help/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="help/layout3/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="help/layout3/css/themes/default-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="help/layout3/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
                            <h1> 
                                <small> </small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                             
                            <!-- BEGIN THEME PANEL -->
                               <?php // require_once ("require/themepanel.php") ; ?>
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
                                <span>السجل </span>
                            </li>
                            
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <?php
                                        if(isset($_GET['viewerror'])){echo '<div class="alert alert-danger ">
                                        <button class="close" data-close="alert"></button><strong>Error! </strong> Wrong Job Number</div>';}
                                        
                                        if   (isset($_GET['p'] ) && $_GET['p'] != $password  )  {echo '<div class="alert alert-danger ">
                                        <button class="close" data-close="alert"></button><strong> خطأ في كلمة المرور </strong> </div>';}
                                        
                                         if   (isset($_GET['ddel'] )  )  {echo '<div class="alert alert-success ">
                                        <button class="close" data-close="alert"></button><strong> تم الحذف بنجاح </strong> </div>';}
                                    ?>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject bold uppercase"> السجل </span>
                                            </div>
                                            <div class="tools"> </div>
                                        </div>
                                        <div class="portlet-body">
                                             <?php      
                                            
                                            if   (isset($_GET['p'] ) && $_GET['p'] == $password  )  {
                                                
                                            
                                            $users = form_get('ORDER BY `id` DESC');
                                            
                                            $ucount = @count($users);
                                           
                                            ?>
                                            
                                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                <thead>
                                                    <tr>
                                                        <th>  الدولة  </th>
                                                        <th>   إسم معد التقرير  </th>
                                                        <th>  سناب  </th>
                                                        <th>   تاريخ الاعداد </th>
                                                        <th>   الصورة   </th>
                                                        <th>    </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                          for($i = 0 ; $i < $ucount; $i++)
                                          {
                                              $user = $users[$i];
                                              $url = 'https://jobs-testaa.c9users.io/test/tourism/link.php?' ;
                                              $delurl = 'http://myeasysite.eb2a.com/tourism/view.php?' ;
                                              $del = "<a href='$delurl&del=$user->id&5945&p=$password' class='btn btn-circle btn-sm red-sunglo' onclick=\"return confirm('هل أنت متأكد من حذف تقرير ($user->name) ?')\"> حذف </a>";
                                              
                                              if( $user->link != null)
                                                          $att = "<a href='$url&$user->link' class='btn btn-circle btn-sm green'>عرض</a>";
                                                          else {
                                                              $att= "لا يوجد ملف ";
                                                                }
                                         echo  "<tr>   
                                                  <td> $user->name  </td>
                                                  <td> $user->pname </td>
                                                  <td> $user->snap  </td>
                                                  <td> $user->date </td>
                                                  <td> $att </td>
                                                  <td> $del </td>
                                                  "
                                                  ?>
                                                 <!-- <td>
                                                         <a class="btn green btn-outline" href="formdisplay.php?idnumber=<?php // echo $user->idnumber ; ?>"> عرض
                                                                <i class="fa fa-share"></i>
                                                         </a>
                                                  </td> -->
                                                <?php
                                                echo"</tr>"; 
                                            
                                               
                                            
                                            }
                                                  ?>
                                                </tbody>
                                                
                                            </table>
                                            
                                            <?php } else { ?>
                                            <!-- BEGIN FORM-->
                                            <form  action="?hgj=dgfjgh&jhjl=hgjghg" id="form_sample_3" class="form-horizontal">
                                                    <input type="hidden" name="idnumber" class="form-control" value="7853" />    
                                                    <input type="hidden" name="id" class="form-control" value="56 56" /> 
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">كلمة السر 
                                                            <span class="required"> * </span>
                                                        </label>
                                                        <div class="col-md-4">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-lock"></i>
                                                                </span>
                                                                <input type="password" name="p" class="form-control" placeholder="كلمة المرور " > </div>
                                                                <span class="help-block">كلمة السر  </span>
                                                        </div>
                                                    </div>
                                                  
                                                    
                                                      <input type="hidden" name="sdfh" class="form-control" value="aa55862" />    
                                                        <input type="hidden" name="dgh" class="form-control" value="dhgd" />  
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-3 col-md-9">
                                                                <button type="submit" class="btn green" >عرض</button>
                                                            </div>
                                                        </div>
                                                    </div> 
                                            </form> 
                                            <!-- END FORM-->
                                            <?php }end   ?>
                                            
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
        <script src="help/jquery.min.js" type="text/javascript"></script>
        <script src="help/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="help/js.cookie.min.js" type="text/javascript"></script>
        <script src="help/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="help/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="help/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="help/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="help/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        
      
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="help/datatable.js" type="text/javascript"></script>
        <script src="help/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="help/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="help/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/view.js" type="text/javascript"></script>
       
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="help/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="help/scripts/demo.min.js" type="text/javascript"></script>
        <script src="help/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>		