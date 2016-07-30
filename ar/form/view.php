

<?php $password = "123" ; ?>



<?php
@require_once('require/api/db.php');
@require_once('require/api/formAPI.php');
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
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout3/css/themes/default-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
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
                    <div class="container-fluid">
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
                                                        <th>  الاسم الرباعي  </th>
                                                        <th>  تاريخ الميلاد  </th>
                                                        <th>  العمر  </th>
                                                        <th>  الجنس  </th>
                                                        <th>  رقم الهوية  </th>
                                                        <th>  رقم هوية الوالد     </th> 
                                                        <th>  مكان السكن </th>
                                                        <th>  رقم الجوال 1 </th>
                                                        <th>  رقم الجوال 2 </th>
                                                        <th>  الصورة   </th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                          for($i = 0 ; $i < $ucount; $i++)
                                          {
                                              $user = $users[$i];
                                              
                                              if( $user->att != null)
                                                          $att = "<a href='file/$user->att' target='_blank' class='primary-link'>رابط</a>";
                                                          else {
                                                              $att= "لا يوجد ملف ";
                                                                }
                                         echo  "<tr>   
                                                  <td> $user->name  </td>
                                                  <td> $user->bdate </td>
                                                  <td> $user->age  </td>
                                                  <td> $user->sex  </td>
                                                  <td> $user->idnumber  </td>
                                                  <td> $user->fidnumber </td>
                                                  <td> $user->city  </td>
                                                  <td> $user->phone1  </td>
                                                  <td> $user->phone2  </td>
                                                  <td> $att </td>
                                                  <td> $user->date </td>
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
                                            <?php } ?>
                                            
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
        <script src="require/js/view.js" type="text/javascript"></script>
       
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>