<?php



@require_once('require/api/db.php');
@require_once('require/api/formAPI.php');

$url = 'http://myeasysite.eb2a.com/tourism/link.php?' ;
$link1= "name=".$_POST["name"]."&visa=".$_POST["visa"]."&visa2=".$_POST["visa2"]."&nair=".$_POST["nair"]."&iair=".$_POST["iair"]."&cur=".$_POST["cur"]."&cur1=".$_POST["cur1"]."&cur2=".$_POST["cur2"]."&drv=".$_POST["drv"]."&drv1=".$_POST["drv1"]."&drv2=".$_POST["drv2"]."&rent1=".$_POST["rent1"]."&rent2=".$_POST["rent2"]."&t1=".$_POST["t1"]."&t2=".$_POST["t2"]."&t3=".$_POST["t3"]."&t4=".$_POST["t4"]."&t5=".$_POST["t5"]."&time=".$_POST["time"]."&sh1=".$_POST["sh1"]."&sh2=".$_POST["sh2"]."&sh3=".$_POST["sh3"]."&sh4=".$_POST["sh4"]."&r1=".$_POST["r1"]."&r2=".$_POST["r2"]."&r3=".$_POST["r3"]."&r4=".$_POST["r4"]."&book=".$_POST["book"]."&pname=".$_POST["pname"]."&snap=".$_POST["snap"]."&com=".$_POST["com"]."&com2=".$_POST["com2"]."" ;
$link= "
        name=".$_POST["name"]."
        &visa=".$_POST["visa"]."
        &visa2=".$_POST["visa2"]."
        &nair=".$_POST["nair"]."
        &iair=".$_POST["iair"]."
        &cur=".$_POST["cur"]."
        &cur1=".$_POST["cur1"]."
        &cur2=".$_POST["cur2"]."
        &drv=".$_POST["drv"]."
        &drv1=".$_POST["drv1"]."
        &drv2=".$_POST["drv2"]."
        &rent1=".$_POST["rent1"]."
        &rent2=".$_POST["rent2"]."
        &t1=".$_POST["t1"]."
        &t2=".$_POST["t2"]."
        &t3=".$_POST["t3"]."
        &t4=".$_POST["t4"]."
        &t5=".$_POST["t5"]."
        &time=".$_POST["time"]."
        &sh1=".$_POST["sh1"]."
        &sh2=".$_POST["sh2"]."
        &sh3=".$_POST["sh3"]."
        &sh4=".$_POST["sh4"]."
        &r1=".$_POST["r1"]."
        &r2=".$_POST["r2"]."
        &r3=".$_POST["r3"]."
        &r4=".$_POST["r4"]."
        &book=".$_POST["book"]."
        &pname=".$_POST["pname"]."
        &snap=".$_POST["snap"]."
        &com=".$_POST["com"]."
        &com2=".$_POST["com2"]."
        " ;
		      
if(isset($_POST['savedone'])){
   
  /* $user = form_get_by_idnumber(@$_POST['idnumber']);
   if ($user->idnumber == $_POST['idnumber'] )
      {                        
        @$error.=" <br />  يوجد لك ملف هنا ";  
      }
if(@$error) {
		$result='<div class="alert alert-danger"><strong>  ملاحظة :  </strong>'.$error.'</div>';
		} else */

    	{
             @$result = form_add($_POST['name'],$_POST['pname'],$_POST['snap'],$link1);
             tinyf_db_close();
             if($result)
                 {
                     $link2= "name=".$_POST["name"]."
                     &com=".$_POST["com"]."";
                     $l=trim($link2);
                     // header("Location: inventorytable.php?done=123");
                    echo "<script type='text/javascript'>
           window.location = \"link.php?$link1&done=123\"
      </script>";
      die();
                     // header("Location: link.php?$link2&done=123");
                 }
             else{
             header("Location: ?error=1");
             }      
    	}
}    	
	        	
	        	

?>



<!DOCTYPE html>
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>سائح تيوب </title>
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
        <!-- END PAGE LEVEL PLUGINS -->
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
 <?php $form="active" ?>
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
                            <h1>النموذج 
                                <small>سائح تيوب </small>
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
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <?php
                                        
                                        if   (isset($_GET['error'] )  )  {echo '<div class="alert alert-danger ">
                                        <button class="close" data-close="alert"></button><strong> يجب تعبئة البيانات  </strong>  </div>';}
                                        
                                         if   (isset($_GET['done'] )  )  {echo '<div class="alert alert-success ">
                                        <button class="close" data-close="alert"></button><strong>SUCCESS! </strong> Added successfully </div>';}
                                    ?>
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class=" icon-layers font-green"></i>
                                                <span class="caption-subject font-green sbold uppercase">معلومات سياحية </span>
                                            </div>
                                            <div class="actions">
                                                <form class="btn" method="post" >
                                                          <input type="hidden" name="name" class="form-control" value="<?php echo $_POST["name"] ; ?>" />
                                                          <input type="hidden" name="visa" class="form-control" value="<?php echo $_POST["visa"] ; ?>" />
                                                          <input type="hidden" name="visa2" class="form-control" value="<?php echo $_POST["visa2"] ; ?>" />
                                                          <input type="hidden" name="nair" class="form-control" value="<?php echo $_POST["nair"] ; ?>" />
                                                          <input type="hidden" name="iair" class="form-control" value="<?php echo $_POST["iair"] ; ?>" />
                                                          <input type="hidden" name="cur" class="form-control" value="<?php echo $_POST["cur"] ; ?>" />
                                                          <input type="hidden" name="cur1" class="form-control" value="<?php echo $_POST["cur1"] ; ?>" />
                                                          <input type="hidden" name="cur2" class="form-control" value="<?php echo $_POST["cur2"] ; ?>" />
                                                          <input type="hidden" name="drv" class="form-control" value="<?php echo $_POST["drv"] ; ?>" />
                                                          <input type="hidden" name="drv1" class="form-control" value="<?php echo $_POST["drv1"] ; ?>" />
                                                          <input type="hidden" name="drv2" class="form-control" value="<?php echo $_POST["drv2"] ; ?>" />
                                                          <input type="hidden" name="rent1" class="form-control" value="<?php echo $_POST["rent1"] ; ?>" />
                                                          <input type="hidden" name="rent2" class="form-control" value="<?php echo $_POST["rent2"] ; ?>" />
                                                          <input type="hidden" name="t1" class="form-control" value="<?php echo $_POST["t1"] ; ?>" />
                                                          <input type="hidden" name="t2" class="form-control" value="<?php echo $_POST["t2"] ; ?>" />
                                                          <input type="hidden" name="t3" class="form-control" value="<?php echo $_POST["t3"] ; ?>" />
                                                          <input type="hidden" name="t4" class="form-control" value="<?php echo $_POST["t4"] ; ?>" />
                                                          <input type="hidden" name="t5" class="form-control" value="<?php echo $_POST["t5"] ; ?>" />
                                                          <input type="hidden" name="time" class="form-control" value="<?php echo $_POST["time"] ; ?>" />
                                                          <input type="hidden" name="sh1" class="form-control" value="<?php echo $_POST["sh1"] ; ?>" />
                                                          <input type="hidden" name="sh2" class="form-control" value="<?php echo $_POST["sh2"] ; ?>" />
                                                          <input type="hidden" name="sh3" class="form-control" value="<?php echo $_POST["sh3"] ; ?>" />
                                                          <input type="hidden" name="sh4" class="form-control" value="<?php echo $_POST["sh4"] ; ?>" />
                                                          <input type="hidden" name="r1" class="form-control" value="<?php echo $_POST["r1"] ; ?>" />
                                                          <input type="hidden" name="r2" class="form-control" value="<?php echo $_POST["r2"] ; ?>" />
                                                          <input type="hidden" name="r3" class="form-control" value="<?php echo $_POST["r3"] ; ?>" />
                                                          <input type="hidden" name="r4" class="form-control" value="<?php echo $_POST["r4"] ; ?>" />
                                                          <input type="hidden" name="book" class="form-control" value="<?php echo $_POST["book"] ; ?>" />
                                                          <input type="hidden" name="pname" class="form-control" value="<?php echo $_POST["pname"] ; ?>" />
                                                          <input type="hidden" name="snap" class="form-control" value="<?php echo $_POST["snap"] ; ?>" />
                                                          <input type="hidden" name="com" class="form-control" value="<?php echo $_POST["com"] ; ?>" />
                                                          <input type="hidden" name="com2" class="form-control" value="<?php echo $_POST["com2"] ; ?>" />
                                                          <input type="hidden" name="savedone" class="form-control" value="<?php echo $_POST["savedone"] ; ?>" />
                                                          <button type="submit" class="btn btn-circle btn-sm green" > <i class="fa fa-pencil"></i> إرسال  </button>
                                                </form>
                                               
                                                 
                                      <!--         <a class="btn btn-circle red-sunglo"   href='http://myeasysite.eb2a.com/tourism/link.php?<?php // echo $link ; ?>' target='_blank' >
                                                                <i class="fa fa-pencil"></i> رابط الصورة  </a> -->
                                                <a class="btn btn-circle btn-icon-only btn-default" data-toggle="modal" href="#edite_modal">
                                                    <i class="icon-wrench"></i>
                                                </a>
                                                 <!--<a class="btn btn-circle btn-icon-only btn-default fullscreen" > </a>-->
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <!-- BEGIN FORM-->
                                            <!--<form action="#" class="form-horizontal" id="form_sample_1v">-->
                                                <div class="form-group form-md-line-input text-center">  
                                                    <div class="profile-pic ">
                                                      <canvas style="display:none;border:1px solid #d3d3d3;" id="myCan" width="1080" height="1920">Your browser does not support the HTML5 canvas tag.</canvas>
                                                      <img id="screama" width="1080" height="1920" src="info.jpg" class="a" alt="The Scream">
                                                    </div> 
                                                </div>
                                                   <style type="text/css">
                                                      @font-face{
                                                      font-family:'Regulara1';
                                                      src: url('UniversNextArabic-Regular.ttf'); /* here you go, IE */
                                                    }                                                 
                                                    @font-face {
                                                      font-family: 'Regulara2';
                                                      src:  url('UniversNextArabic-Regular.ttf') ;
                                                      font-weight: normal;
                                                      font-style: normal;
                                                    }
                                                   </style>
                                                   <span style="font-family: 'Regulara1';">&nbsp;</span>
                                                   <span style="font-family: 'Regulara2';">&nbsp;</span>
                                                    <script> 
                                                    
                                                     
                                                
                                                    window.onload = function() {
                                                                var c = document.getElementById("myCan");
                                                                var ctx = c.getContext("2d");
                                                                var img = document.getElementById("screama");
                                           
                                                        ctx.drawImage(img, 0, 0);
                                                         
                                                        //ctx.font="30px";
                                                       //  ctx.fillStyle = "red" ;
                                                      //  ctx.fillRect(400, 62,93,30);
                                                        ctx.fillStyle ="#000";
                                                        
                                                      //  ctx.font="AF_Al-HadaSimplified";
                                                       ctx.font= "50px Regulara1"; 
                                                      ctx.fillStyle ="#262692";
                                                        ctx.fillText('<?php echo $_POST["name"] ; ?>',729,129,350);
                                                         ctx.font="30px Regulara2";
                                                        ctx.fillStyle = '#F0ECEC';
                                                       ctx.fillRect(40, 1157,203,30);
                                                        ctx.fillStyle ="white";
                                                        ctx.fillText('<?php echo $_POST["visa"] ; ?>',1050,280,220);
                                                         ctx.fillText('<?php echo $_POST["visa2"] ; ?>',1050,330,220);
                                                        ctx.fill();
                                                         ctx.fillStyle ="white";
                                                        ctx.fillText('<?php echo $_POST["nair"] ; ?>',680,290,490);
                                                        ctx.fillText('<?php echo $_POST["iair"] ; ?>',440,350,300);
                                                        ctx.fillText('<?php echo $_POST["cur"] ; ?>',960,480,195);
                                                        ctx.font="25px";
                                                        ctx.fillText('<?php echo $_POST["cur1"] ; ?>',1050,515,260);
                                                        ctx.fillText('<?php echo $_POST["cur2"] ; ?>',1050,545,260);
                                                          ctx.fillStyle ="#4F4D4D";
                                                        ctx.fillText('<?php echo $_POST["drv"] ; ?>',1070,645,300);
                                                        ctx.fillStyle ="white";
                                                        ctx.fillText('<?php echo $_POST["drv1"] ; ?>',1050,685,280);
                                                        ctx.fillText('<?php echo $_POST["drv2"] ; ?>',1050,715,280);
                                                        ctx.fillStyle ="#165C4E";
                                                        ctx.font="bold 25px";
                                                        ctx.fillText('<?php echo $_POST["rent1"] ; ?>',895,800,780);
                                                        ctx.fillText('<?php echo $_POST["rent2"] ; ?>',895,850,780);
                                                        ctx.beginPath();
                                                        ctx.fillStyle ="#5C1616";
                                                        ctx.font="45px";
                                                        ctx.textAlign = 'center';
                                                        ctx.fillText('<?php echo $_POST["t1"] ; ?>',700,1035,600);
                                                        ctx.fillText('<?php echo $_POST["t2"] ; ?>',700,1095,600);
                                                        ctx.fillText('<?php echo $_POST["t3"] ; ?>',700,1155,600);
                                                        ctx.fillText('<?php echo $_POST["t4"] ; ?>',700,1215,600);
                                                        ctx.fillText('<?php echo $_POST["t5"] ; ?>',700,1275,600);
                                                        ctx.font="bold 25px";
                                                         ctx.textAlign = 'center';
                                                        ctx.fillStyle ="#5F2727";
                                                        ctx.fillText('<?php echo $_POST["time"] ; ?>',130,1190,200);
                                                        ctx.font="25px";
                                                        ctx.fillStyle ="#301111";
                                                        ctx.textAlign = 'center';
                                                        ctx.fillText('<?php echo $_POST["pname"] ; ?>',140,1407,200);
                                                        ctx.fillText('<?php echo $_POST["snap"] ; ?>',130,1443,160);
                                                        ctx.textAlign = 'right';
                                                        ctx.font="bold 25px";
                                                        ctx.fillStyle ="#5C1616";
                                                        ctx.fillText('<?php echo $_POST["sh1"] ; ?>',910,1500,300);
                                                        ctx.fillText('<?php echo $_POST["sh2"] ; ?>',910,1550,300);
                                                        ctx.fillText('<?php echo $_POST["sh3"] ; ?>',910,1600,300);
                                                        ctx.fillText('<?php echo $_POST["sh4"] ; ?>',910,1650,300);
                                                        ctx.fillText('<?php echo $_POST["r1"] ; ?>',450,1585,400);
                                                        ctx.fillText('<?php echo $_POST["r2"] ; ?>',450,1635,400);
                                                        ctx.fillText('<?php echo $_POST["r3"] ; ?>',450,1685,350);
                                                        ctx.fillText('<?php echo $_POST["r4"] ; ?>',450,1735,300);
                                                         ctx.fillStyle ="#9D3636";
                                                        ctx.fillText('<?php echo $_POST["book"] ; ?>',790,1810,750);
                                                        ctx.fillStyle ="red";
                                                        ctx.translate(50,50);
                                                        ctx.rotate(36 * Math.PI / 180);
                                                        ctx.textAlign = 'left';
                                                        ctx.fillText('<?php echo $_POST["com"] ; ?>',267,278,100);
                                                        
                                                        ctx.fillText('<?php echo $_POST["com2"] ; ?>',267,302,100);
                                                        img.src = ctx.canvas.toDataURL();
                                                            console.log(img.src);
                                                }
                                                        
                                                </script>
                                                    
                                                    
                                                    <br>
                                                    
                                                    
                                                    <div id="edite_modal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">نموذج المعلومات السياحية</h4>
                </div>
                <div class="modal-body">
                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data" id="form_sample_11">
                        <div class="form-body">

                            <div class="row">
                                <div class="col-md-4">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="name" value="<?php echo $_POST["name"] ; ?>" placeholder="معلومات سياحية عن " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="visa" value="<?php echo $_POST["visa"] ; ?>" placeholder="إجراءات التأشيرة " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="visa2" value="<?php echo $_POST["visa2"] ; ?>" placeholder=" إجراءات التأشيرة 2 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="nair" value="<?php echo $_POST["nair"] ; ?>" placeholder=" أفضل الخطوط الدولية " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="iair" value="<?php echo $_POST["iair"] ; ?>" placeholder="أفضل الخطوط الداخلية">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="cur" value="<?php echo $_POST["cur"] ; ?>" placeholder=" العملة " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="cur1" value="<?php echo $_POST["cur1"] ; ?>" placeholder="  صرف العملة 1" >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="cur2" value="<?php echo $_POST["cur2"] ; ?>" placeholder="صرف العملة 2  ">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="com" value="<?php echo $_POST["com"] ; ?>" placeholder=" أفضل شركة اتصالات " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="com2" value="<?php echo $_POST["com2"] ; ?>" placeholder=" أفضل شركة اتصالات " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="drv" value="<?php echo $_POST["drv"] ; ?>" placeholder=" نظام القيادة من الجهة " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="drv1" value="<?php echo $_POST["drv1"] ; ?>" placeholder="  أفضل وسيلة مواصلات 1  " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="drv2" value="<?php echo $_POST["drv2"] ; ?>" placeholder="أفضل وسيلة مواصلات 2    ">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="rent1" value="<?php echo $_POST["rent1"] ; ?>" placeholder=" أفضل منطقة للسكن 1 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="rent2" value="<?php echo $_POST["rent2"] ; ?>" placeholder="  أفضل منطقة للسكن 2  " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                           <div class="row">
                               <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="t1" value="<?php echo $_POST["t1"] ; ?>" placeholder="  نشاط سياحي 1 ">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-md-3">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="t2" value="<?php echo $_POST["t2"] ; ?>" placeholder=" نشاط سياحي 2 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="t3" value="<?php echo $_POST["t3"] ; ?>" placeholder="  نشاط سياحي 3 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="t4" value="<?php echo $_POST["t4"] ; ?>" placeholder="  نشاط سياحي 4 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="t5" value="<?php echo $_POST["t5"] ; ?>" placeholder=" نشاط سياحي 5  ">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="time" value="<?php echo $_POST["time"] ; ?>" placeholder=" أفضل وقت للسفر من ... إلى ... " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="sh1" value="<?php echo $_POST["sh1"] ; ?>" placeholder=" تسوق 1 ">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-md-3">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="sh2" value="<?php echo $_POST["sh2"] ; ?>" placeholder="   تسوق 2 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="sh3" value="<?php echo $_POST["sh3"] ; ?>" placeholder=" تسوق 3 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="sh4" value="<?php echo $_POST["sh4"] ; ?>" placeholder=" تسوق 4 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                             <div class="row">
                               <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="r1" value="<?php echo $_POST["r1"] ; ?>" placeholder=" مطاعم 1 ">
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-md-3">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="r2" value="<?php echo $_POST["r2"] ; ?>" placeholder="  مطاعم 2 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="r3" value="<?php echo $_POST["r3"] ; ?>" placeholder=" مطاعم 3 " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="r4" value="<?php echo $_POST["r4"] ; ?>" placeholder=" مطاعم 4  " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-4">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="book" value="<?php echo $_POST["book"] ; ?>" placeholder="  أفضل مواقع الحجز " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="pname" value="<?php echo $_POST["pname"] ; ?>" placeholder=" إسم معد التقرير " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group form-md-line-input">
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" name="snap" value="<?php echo $_POST["snap"] ; ?>" placeholder="  سناب   " >
                                            <div class="form-control-focus"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                               
                               
                            
                     <input type="hidden" name="idnumber" class="form-control" value="<?php  ?>" />
                      <input type="hidden" name="id" class="form-control" value="<?php   ?>" />
                        
                        
                            <div class="modal-footer">
                                <button type="submit" class="btn green btn-primary" >حفظ التغييرات </button>
                                <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">إلغاء </button>
                            </div>
                                 
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- END experiences ADD FORM -->
                                                    
                                                    
                                                    
                                                
                                               
                                            <!--</form>-->
                                            <!-- END FORM-->
                                        </div>
                                    </div>
                                    <!-- END VALIDATION STATES-->
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
             
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <!-- BEGIN INNER FOOTER -->
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
        <script src="help/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="help/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="help/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/form.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="help/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="help/scripts/demo.min.js" type="text/javascript"></script>
        <script src="help/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>