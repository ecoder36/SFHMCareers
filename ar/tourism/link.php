 <!--
    http://cheatsheetworld.com/programming/html5-canvas-cheat-sheet/
    -->
<!doctype html>
    
    <html lang="en" dir="rtl">
       <!-- <head>
            <meta charset='utf-8' />
            <title> </title>
        </head>
        
        <body>-->
            
      <head>
        <meta charset="utf-8" />
        <title>سائح تيوب </title>
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
 <?php // $form="active" ?>
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
                                <small>سائح تيوب </small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                                <?php   require_once ("require/themepanel.php") ; ?>
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
                                     if   (isset($_GET['done'] )  )  {echo '<div class="alert alert-success ">
                                        <button class="close" data-close="alert"></button><strong>SUCCESS! </strong> Added successfully </div>';}?>
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form ">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class=" icon-layers font-green"></i>
                                                <span class="caption-subject font-green sbold uppercase">معلومات سياحية </span>
                                            </div>
                                            <div class="actions">
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <!-- BEGIN FORM-->
                                            <!--<form action="#" class="form-horizontal" id="form_sample_1v">-->
                                                <div class="form-group form-md-line-input text-center">  
                                                    <div class="profile-pic ">                              
                                                     <div>
                                                        <canvas style="display:none;border:1px solid #d3d3d3;" id="myCan" width="1080" height="1920">Your browser does not support the HTML5 canvas tag.</canvas>
                                                        <img id="screama" width="1080" height="1920" src="info.jpg" class="a" alt="The Scream">
                                                     </div>    
                                                     <style type="text/css">
                                                          @font-face{
                                                          font-family:'Regulara1';
                                                          src: url('stoor.ttf'); /* here you go, IE */
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
                                                               ctx.font="50px Regulara1";
                                                              ctx.fillStyle ="#262692";
                                                                ctx.fillText('<?php echo trim($_GET["name"]) ; ?>',729,129,350);
                                                                 ctx.font="30px Regulara2";
                                                                ctx.fillStyle = '#F0ECEC';
                                                               ctx.fillRect(40, 1157,203,30);
                                                                ctx.fillStyle ="white";
                                                                ctx.fillText('<?php echo trim($_GET["visa"]) ; ?>',1050,280,220);
                                                                 ctx.fillText('<?php echo trim($_GET["visa2"]) ; ?>',1050,330,220);
                                                                ctx.fill();
                                                                 ctx.fillStyle ="white";
                                                                ctx.fillText('<?php echo trim($_GET["nair"]) ; ?>',680,290,490);
                                                                ctx.fillText('<?php echo trim($_GET["iair"]) ; ?>',440,350,300);
                                                                ctx.fillText('<?php echo trim($_GET["cur"]) ; ?>',960,480,195);
                                                                ctx.font="25px";
                                                                ctx.fillText('<?php echo trim($_GET["cur1"]) ; ?>',1050,515,260);
                                                                ctx.fillText('<?php echo trim($_GET["cur2"]) ; ?>',1050,545,260);
                                                                  ctx.fillStyle ="#4F4D4D";
                                                                ctx.fillText('<?php echo trim($_GET["drv"]) ; ?>',1070,645,300);
                                                                ctx.fillStyle ="white";
                                                                ctx.fillText('<?php echo trim($_GET["drv1"]) ; ?>',1050,685,280);
                                                                ctx.fillText('<?php echo trim($_GET["drv2"]) ; ?>',1050,715,280);
                                                                ctx.fillStyle ="#165C4E";
                                                                ctx.font="bold 25px";
                                                                ctx.fillText('<?php echo trim($_GET["rent1"]) ; ?>',895,800,780);
                                                                ctx.fillText('<?php echo trim($_GET["rent2"]) ; ?>',895,850,780);
                                                                ctx.beginPath();
                                                                ctx.fillStyle ="#5C1616";
                                                                ctx.font="45px";
                                                                ctx.textAlign = 'center';
                                                                ctx.fillText('<?php echo trim($_GET["t1"]) ; ?>',700,1035,600);
                                                                ctx.fillText('<?php echo trim($_GET["t2"]) ; ?>',700,1095,600);
                                                                ctx.fillText('<?php echo trim($_GET["t3"]) ; ?>',700,1155,600);
                                                                ctx.fillText('<?php echo trim($_GET["t4"]) ; ?>',700,1215,600);
                                                                ctx.fillText('<?php echo trim($_GET["t5"]) ; ?>',700,1275,600);
                                                                ctx.font="bold 25px";
                                                                 ctx.textAlign = 'center';
                                                                ctx.fillStyle ="#5F2727";
                                                                ctx.fillText('<?php echo trim($_GET["time"]) ; ?>',130,1190,200);
                                                                ctx.font="25px";
                                                                ctx.fillStyle ="#301111";
                                                                ctx.textAlign = 'center';
                                                                ctx.fillText('<?php echo trim($_GET["pname"]) ; ?>',140,1407,200);
                                                                ctx.fillText('<?php echo trim($_GET["snap"]) ; ?>',130,1443,160);
                                                                ctx.textAlign = 'right';
                                                                ctx.font="bold 25px";
                                                                ctx.fillStyle ="#5C1616";
                                                                ctx.fillText('<?php echo trim($_GET["sh1"]) ; ?>',910,1500,300);
                                                                ctx.fillText('<?php echo trim($_GET["sh2"]) ; ?>',910,1550,300);
                                                                ctx.fillText('<?php echo trim($_GET["sh3"]) ; ?>',910,1600,300);
                                                                ctx.fillText('<?php echo trim($_GET["sh4"]) ; ?>',910,1650,300);
                                                                ctx.fillText('<?php echo trim($_GET["r1"]) ; ?>',450,1585,400);
                                                                ctx.fillText('<?php echo trim($_GET["r2"]) ; ?>',450,1635,400);
                                                                ctx.fillText('<?php echo trim($_GET["r3"]) ; ?>',450,1685,350);
                                                                ctx.fillText('<?php echo trim($_GET["r4"]) ; ?>',450,1735,300);
                                                                 ctx.fillStyle ="#9D3636";
                                                                ctx.fillText('<?php echo trim($_GET["book"]) ; ?>',790,1810,750);
                                                                ctx.fillStyle ="red";
                                                                ctx.translate(50,50);
                                                                ctx.rotate(36 * Math.PI / 180);
                                                                ctx.textAlign = 'left';
                                                                ctx.fillText('<?php echo trim($_GET["com"]) ; ?>',267,278,100);
                                                                ctx.fillText('<?php echo trim($_GET["com2"]) ; ?>',267,302,100);
                                                                img.src = ctx.canvas.toDataURL();
                                                                    console.log(img.src);
                                                        }
                                                                
                                                        </script>
                                                        <br>
                                                        
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
        <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="require/js/form.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
                                                
        </body>
    </html>
    
    <!--
    http://cheatsheetworld.com/programming/html5-canvas-cheat-sheet/
    -->