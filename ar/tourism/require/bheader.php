    <link rel="icon" href="https://pbs.twimg.com/profile_images/719837844928405505/6776GTdP.jpg">
    
     <!--<body class="page-container-bg-solid page-header-menu-fixed">-->
          <body class="page-container-bg-solid page-boxed">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container"> <!--<div class="container-fluid">-->
                    <!-- BEGIN LOGO -->
                    
                      <!--<div class="pull-right"><br><img width="50" height="50" src="http://www.s-taif.com/upload/pageBrand/114.jpg" alt="logo" class="logo-default"> </div>-->
                      <div class="pull-right"><br><img width="70" height="70" src="https://pbs.twimg.com/profile_images/719837844928405505/6776GTdP.jpg" alt="logo" class="logo-default"> </div>
                    <div class="page-logo">
                            <br><font style="font-family : Verdana;font-size: 600%;  font-size: 3.0vh; " class="logo-default theme-font"><b> سائح تيوب </b></font>
                        <!--<a href="index.html">
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
                <div class="container"> <!--<div class="container-fluid">-->
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
                           <?php //if(@$_SESSION['user_info'] == false ){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$form ; ?> ">
                                <a href="form.php"> النموذج
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$view ; ?> ">
                                <a href="view.php">  لوحة التحكم
                                    <span class="arrow"></span>
                                </a>
                            </li>
                        
                            <?php //} ?>
                            
                             
                            
                            
                           <!-- <li class="menu-dropdown classic-menu-dropdown ">
                                <a href="javascript:;">
                                    <i class="icon-briefcase"></i> Pages
                                    <span class="arrow"></span>
                                </a>
                               
                            </li>-->
                        </ul>
                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->