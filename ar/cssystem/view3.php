


<?php

@require_once('log/logsession.php');

if($_SESSION['user_info_2'] != false && $_SESSION['user_info_2']->isadmin != 3 )
{

@require_once('require/api/db.php');
@require_once('require/api/infoAPI.php');
@require_once('require/api/usersAPI.php');

?>


<!DOCTYPE html>

<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> عرض الطلبات </title>
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
<?php $enlink = "../../en/cssystem/view3.php" ?>
        <?php $view3="active" ?>
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
                        
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                     <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal form-row-seperated">
                                        <div class="portlet">
                                           
                                            <div class="portlet-body">
                                               <?php if(isset($_GET['sitedel'])){echo ' <div class="alert alert-success ">
                    <button class="close" data-close="alert"></button><strong>'.$_GET['sitedel'].'</strong></div>';} ?>
                                                            <div class="table-container">
                                                                <div class="portlet box green" style="border:1px solid #caa88e;">
                                                                   <div class="portlet-title" style="background-color:#caa88e;">
                                                                        <div class="caption">
                                                                            <i class="fa fa-gear"></i>  جدول الطلبات</div>
                                                                        <div class="tools"> </div>
                                                                    </div>
                                                                    <div class="portlet-body">
                                                    <?php  
                                                     if($_SESSION['user_info_2']->isadmin == 1){
                                                          $users = info_get('ORDER BY `id` DESC');
                                                        }
                                                         if($_SESSION['user_info_2']->isadmin == 2){
                                                            $suser =  $_SESSION['user_info_2']->id ;
                                                          $users = info_get("WHERE `ename` = $suser ORDER BY `id` DESC");
                                                         }
                                          //   $users = info_get('ORDER BY `id` DESC');
                                            if($users == NULL)
                                              //  die ('problem');
                                                  echo ('');
                                            $ucount = @count($users);
                                            if($ucount == 0)
                                                  echo ('');
                                            ?>
                                                                    <table class="table table-striped table-hover table-bordered " id="sample_1">
                                                                       <thead>
                                                                            <tr>
                                                                                <th >التاريخ و الوقت </th>
                                                                                <th >اسم منشئ الطلب</th>
                                                                                <th >المنطقة </th>
                                                                                <th >المدينة     </th>
                                                                                <th >الموقع    </th>
                                                                                <th >   رقم الخطاب المسند إليه    </th>
                                                                                <th >عرض    </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            
                                <?php
                                          for($i = 0 ; $i < $ucount; $i++)
                                          {
                                              $user = $users[$i];
                                             
                                              
                                          
                                              $useren = users_get_by_id($user->ename);
                                              $username = @$useren->name ;
                                              
                                              $uuseren = users_get_by_id($user->uname);
                                                $uusername = @$uuseren->name ;
                                              date_default_timezone_set("Asia/Riyadh");
                                              
                                               // $date1 = substr($user->date,-19);
                                                 $date2 = substr($user->date,0,10);
                                              $datenow = Date('d-m-Y') ;
                                            
                                               
                                                   
                                                $bd = substr($user->date,0,10); 
                                              
                                         //    if(strtotime($date1) <=  strtotime($datenow) && strtotime($datenow)  <= strtotime($date2)){
                                                  ?>
                                                                          
                                                     <tr>
                                                         <td ><?php echo ($user->date) ?>   </td>
                                                         <td ><?php echo $username ?>   </td>
                                                         <td ><?php echo $user->region ?>   </td>
                                                         <td ><?php echo $user->zone ?>   </td>
                                                         <td ><?php echo $user->site ?>   </td>
                                                         <td ><?php echo $user->letternumber ?>   </td>
                                                         <td ><a data-toggle="modal" href="#cadd_modal<?php echo @$user->id  ?>" class="btn btn-sm btn-default btn-editable"> عرض سريع <i class="fa fa-reply"></i></a>
                                                              <a  href="viewfull.php?id=<?php echo @$user->id  ?>" class="btn btn-sm btn-default btn-editable"> عرض <i class="fa fa-reply"></i></a>
                                             <!-- Start View FORM -->
                                                                <div id="cadd_modal<?php echo @$user->id  ?>" class="modal fade" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                       <div class="portlet light">                          
                                                                        <div class="portlet-title">
                                                                            <div class="caption">
                                                                                <i class="fa fa-bank"></i><?php echo $user->site ?> </div>
                                                                            <div class="tools">
                                                                                 <button type="button" class="btn grey-mint btn-xs" data-dismiss="modal" aria-hidden="true"><i class="fa fa-remove"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="portlet-body">
                                                                            <table class="table table-hover table-light">
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' > المنطقة \ المدينة</td><td><?php echo $user->region." \ ".$user->zone ?></td>
                                                                                    </tr>
                                                                                     <tr>   
                                                                                      <td class='bold theme-font' >اسم الموقع</td><td><?php echo $user->site ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >  رقم الخطاب </td><td><?php echo $user->letternumber ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' > تاريخ الخطاب </td><td><?php echo $user->letterdate ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >   الجهة الطالبة   </td><td><?php echo $user->sitename ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                       <?php if($user->btype == "Governmental"){$btype = "حكومي";}
                                                                                        if($user->btype == "Rented"){ $btype = "مستأجر";} ?>
                                                                                      <td class='bold theme-font' >نوع المبنى</td><td><?php echo $btype ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >الكاميرات الداخلية الثابتة</td><td><?php echo $user->ficameras ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >الكاميرات الداخلية المتحركة</td><td><?php echo $user->micameras ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' > الكاميرات الخارجية الثابتة</td><td><?php echo $user->fecameras ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >الكاميرات الخارجية المتحركة</td><td><?php echo $user->mecameras ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >DVR</td><td><?php echo $user->dvr ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >NVR</td><td><?php echo $user->nvr ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >أجهزة الحاسب</td><td><?php echo $user->pc ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >أجهزة التحكم </td><td><?php echo $user->controld ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >الشاشات</td><td><?php echo $user->screens ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >Switch</td><td><?php echo $user->switch ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >UPS</td><td><?php echo $user->ups ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >ملاحظات </td><td><?php echo $user->note ?></td>
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='bold theme-font' >المرفقات</td>
                                                                                      <td> 
                                                                                         <?php
                                                                                         $infoid = $user->id;
                                                                                         $files = file_get("WHERE `infoid` = $infoid ORDER BY `id` DESC");
                                                                                          $ucount1 = @count($files);
                                                                                           for($i1 = 0 ; $i1 < $ucount1; $i1++)
                                                                                              {
                                                                                                  $file = $files[$i1];
                                                                                                  ?>
                                                                                                  <a href="../../en/cssystem/file/<?php echo $file->fileLink ?>" target="_blank"> <?php echo $file->fileName ?>  </a> .  
                                                                                                  <?php  }  ?>
                                                                                      </td>    
                                                                                    </tr>
                                                                                    <tr>   
                                                                                      <td class='' > <?php echo $username ?>  أنشئ الطلب</td><td> <?php echo $user->date ?></td>
                                                                                    </tr>
                                                                                    <?php if($uusername != NULL){ ?>
                                                                                    <tr>   
                                                                                      <td class='' > آخر تحديث : <?php echo $uusername ?>  حدث الطلب</td><td> <?php echo $user->udate ?></td>
                                                                                    </tr>
                                                                                    <?php } else{ } ?>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                                <!-- END View FORM -->
                                                         </td>
                                                         
                                                          
                                                         
                                                         
                                                     </tr>
                                      
                                                   
                                                     
                                                      <?php  // require_once ("require/js/view3.php") ;  ?>
                                                     
              
                                                                            <?php  } ?>
                                                                            
                                                                            
                                                                            
                                                                        </tbody>
                                                                    </table>
                                                                    
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
      <script>
    
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
      
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/view3.js" type="text/javascript"></script>
               <?php //  require_once ("require/js/view3.php") ;  ?>
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
if(@$_SESSION['user_info_2']->isadmin == 3){
	header("Location: form.php");
}
?>

