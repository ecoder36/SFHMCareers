
<!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout3/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
        <!--<link href="../assets/layouts/layout3/css/themes/default-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />-->
        <link href="require/default.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout3/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
    <link rel="icon" href="require/logo.png">
    
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
                                                       
                                                       
    <body style="font-family: 'Regulara2';" class="page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="pull-right"><br><img width="50" height="50" src="require/logo.png" alt="logo" class="logo-default"> </div>
                   <div class="" style="margin-top: 20px;">
                       <font style="font-family : 'Regulara2';font-size: 600%;  font-size: 3.0vh; " class="logo-default theme-font"><b>طلبات أنظمة المراقبة التلفزيونية بمباني الأمن العام </b></font>
                       <!-- <a href="index.html">
                            <img src="../assets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
                        </a>-->
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">

                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">
                    
                    <!-- BEGIN MEGA MENU -->
                    <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                    <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                    <div class="hor-menu">
                        <ul class="nav navbar-nav">
                           <!-- <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="javascript:;"> Dashboard
                                    <span class="arrow"></span>
                                </a>
                                
                            </li>-->
                            
                             
                             
                           <?php if(@$_SESSION['user_info_2'] != false){ ?>
                          
                           
                            <?php if(@$_SESSION['user_info_2']->isadmin == 1 || 2 ){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$newreq ; ?>">
                                <a href="form.php"> طلب جديد
                                    <span class="arrow"></span>
                                </a>
                            </li>
                             <li class="menu-dropdown mega-menu-dropdown <?php  echo @$view3 ; ?>">
                                <a href="view3.php"> عرض الطلبات
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <!--<li class="menu-dropdown mega-menu-dropdown <?php  //echo @$view ; ?>">
                                <a href="overview.php"> View
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown <?php  //echo @$view2 ; ?>">
                                <a href="view2.php"> View2
                                    <span class="arrow"></span>
                                </a>
                            </li>-->
                            <?php } ?>
                            <?php if(@$_SESSION['user_info_2']->isadmin ==  1){ ?>
                             <li class="menu-dropdown mega-menu-dropdown <?php  echo @$lists ; ?>">
                                <a href="lists.php"> قائمة المدن
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acadminusers ; ?> ">
                                <a href="adminusers.php"> إدارة المستخدمين
                                    <span class="arrow"></span>
                                </a>
                            </li>
                             <?php } ?>
                             <?php if(@$_SESSION['user_info_2']->isadmin == 1 || 2){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acchangepassa ; ?> ">
                                <a href="changepassa.php?id=<?php echo @$_SESSION['user_info_2']->id ; ?>&idnumber=<?php echo @$_SESSION['user_info_2']->uname ;?>"> تغيير كلمة المرور
                                    <span class="arrow"></span>
                                </a>
                            </li>
                             <li class="menu-dropdown mega-menu-dropdown  ">
                                <a href="log/logout.php"> تسجيل الخروج
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php } ?>
                           
                           <?php if(@$_SESSION['user_info_2'] == false){ ?>
                          
                             <li class="menu-dropdown mega-menu-dropdown <?php  echo @$aclogin ; ?>">
                                <a href="login.php"> تسجيل الدخول
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                            
              
                           <!-- <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="javascript:;">
                                    <i class="icon-briefcase"></i> Pages
                                    <span class="arrow"></span>
                                </a>
                               
                            </li>-->
                           
                            
                        </ul>
                       
                    </div>
                    <a href="<?php  echo @$enlink ; ?>" class="font-blue-chambray pull-right" style="margin-top:15px;">
                                    English
                                </a>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->