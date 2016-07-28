<?php
@require_once('require/api/db.php');
@require_once('require/api/addjobsAPI.php');

//if(isset($_GET['jobnumber']))
//if(isset($_POST['date']))
if(isset($_GET['jobnumber']))
{
    
     $_jobnumber = trim($_GET['jobnumber']);
            if($_jobnumber == 0)
                die('Bad Access 2');
                
                if($_GET['required'] == 0){
                    $required = "00" ;
                }else{
                    $required = $_GET['required'] ;
                }
               
     $result = jobs_date_update($_jobnumber,$_GET['date'],$required);

                                 if($result)
                                 {
                                     
                                     header("Location: ?dates=".$_GET['date']." required ".$_GET['required']."");
                                 }else{ 
                                     die('Update Failure');
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
        <title>Jobs Admin</title>
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
                            <h1>Rowreorder Extension
                                <small>rowreorder extension demos</small>
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
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">More</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Datatables</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="m-heading-1 border-green m-bordered">
                                <h3>DataTables Rowreorder Extension</h3>
                                <p> RowReorder adds the ability for rows in a DataTable to be reordered through user interaction with the table (click and drag / touch and drag). </p>
                                <p> For more info please check out
                                    <a class="btn red btn-outline" href="http://datatables.net/extensions/rowreorder" target="_blank">the official documentation</a>
                                </p>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <?php
                                              if(isset($_GET['viewerror'])){echo '<div class="alert alert-danger ">
                                    <button class="close" data-close="alert"></button><strong>Error! </strong> Wrong Job Number</div>';}?>
                                     <?php
                                              if(isset($_GET['dates'])){echo '<div class="alert alert-success ">
                                    <button class="close" data-close="alert"></button><strong>Success! </strong> It has been updated successfully!</div>';}?>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                    <div class="portlet light ">
                                        <div class="portlet-title">
                                            <div class="caption font-dark">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject bold uppercase">Row Reordering</span>
                                            </div>
                                            <div class="tools"> </div>
                                        </div>
                                        <div class="portlet-body">
                                            <?php      
                                            
                                            $users = jobs_get('ORDER BY `id` DESC');
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
                                                        <th> Job Number </th>
                                                        <th> Job Name </th>
                                                        <th> Date </th>
                                                        <th> Required </th>
                                                        <th> Action </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php
                                          for($i = 0 ; $i < $ucount; $i++)
                                          {
                                              $user = $users[$i];
                                              $jobnumber= $user->jobnumber ;
                                              $userst = jobsen_get_by_jobnumber("$jobnumber" );
                                              
                                              
                                    echo  "<tr>   
                                                  <td> $user->jobnumber   </td>
                                                  <td> $userst->jobname   </td>
                                                  <td> $user->ldate   </td>
                                                  <td> $user->requairedno   </td>
                                                  "
                                                  ?>
                                                  
                                                  
                                                  <td>
                                                      
                                                    <div class="form-group last">
                                                        <div class="col-md-4">
                                                         <a class="btn green btn-outline" href="viewjob.php?jobnumber=<?php echo $user->jobnumber ; ?>" data-toggle="modal"> View
                                                                <i class="fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a class="btn green btn-outline" href="#daterangepicker_modal<?php echo $user->jobnumber ; ?>" data-toggle="modal"> Edit
                                                                <i class="fa fa-share"></i>
                                                            </a>
                                                        </div>
                                                    </div> 
                                                     
                                            <div id="daterangepicker_modal<?php echo $user->jobnumber ; ?>" class="modal fade" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                            <h4 class="modal-title">Daterange Picker in Modal</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="" class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-4">Default Date Ranges</label>
                                                                    <div class="col-md-8">
                                                                        <div class="input-group input-large defaultrange_modal" >
                                                                            <input name="date" type="text" class="form-control" value="<?php echo $user->ldate ; ?>">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn default date-range-toggle" type="button">
                                                                                    <i class="fa fa-calendar"></i>
                                                                                </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-4">Position Name en</label>
                                                                    <div class="col-md-7">
                                                                         <input type="hidden" name="jobnumber" class="form-control" value="<?php echo $user->jobnumber ; ?>" />
                                                                        <input type="text" name="required" data-required="1" class="form-control" value="<?php echo $user->requairedno ; ?>" /> </div>
                                                                </div>
                                                     <!--   <div class="modal-footer">
                                                            <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                            <button type="submit" class="btn green btn-primary" data-dismiss="modal">Save changes</button>
                                                        </div>-->
                                                                            
                                                                    <div class="form-actions">
                                                                        <div class="row">
                                                                            <div class="col-md-offset-3 col-md-9">
                                                                                <button type="submit" class="btn green">Submit</button>
                                                                                <button type="button" data-dismiss="modal" class="btn default">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                            </form>
                                                        </div>
                                                        
                                                    </div>

                                                </div>
                                            </div>
                                                      
                                                  </td>
                                                  
                                    
                                                <?php
                                                echo"</tr>  
                                        ";
                                                  
                                              
                                                  
                                          }
                                                  ?>
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
        <!-- END CORE PLUGINS-->
        
        
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script>
        
        
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
 
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/table-datatables-rowreorder.min.js" type="text/javascript"></script>
        <script src="require/js/date.js" type="text/javascript"></script>  
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 
 