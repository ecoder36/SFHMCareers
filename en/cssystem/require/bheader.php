    <link rel="icon" href="require/111.png">
    <body class="page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="pull-right"><br><img width="50" height="50" src="require/111.png" alt="logo" class="logo-default"> </div>
                   <div class="page-logo">
                         <br>
                       <font style="font-family : Verdana;font-size: 600%;  font-size: 3.0vh; " class="logo-default theme-font"><b>SUPPORTSystem</b></font>
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
                            
                             
                             
                           <?php if(@$_SESSION['user_info'] != false){ ?>
                          
                           
                            <?php if(@$_SESSION['user_info']->isadmin == 1 || 2 || 3){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$newreq ; ?>">
                                <a href="form.php"> New Request
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(@$_SESSION['user_info']->isadmin ==  1 || 2 && @$_SESSION['user_info']->isadmin != 3){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$view ; ?>">
                                <a href="overview.php"> View
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(@$_SESSION['user_info']->isadmin ==  1){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$reports ; ?>">
                                <a href="reports.php"> Reports
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$lists ; ?>">
                                <a href="lists.php"> Lists
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acadminusers ; ?> ">
                                <a href="adminusers.php"> Admin Users
                                    <span class="arrow"></span>
                                </a>
                            </li>
                             <?php } ?>
                             <?php if(@$_SESSION['user_info']->isadmin == 1 || 2 || 3){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acchangepassa ; ?> ">
                                <a href="changepassa.php?id=<?php echo @$_SESSION['user_info']->id ; ?>&idnumber=<?php echo @$_SESSION['user_info']->uname ;?>"> Change Password
                                    <span class="arrow"></span>
                                </a>
                            </li>
                             <li class="menu-dropdown mega-menu-dropdown  ">
                                <a href="log/logout.php"> Logout
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php } ?>
                           
                           <?php if(@$_SESSION['user_info'] == false){ ?>
                          
                             <li class="menu-dropdown mega-menu-dropdown <?php  echo @$aclogin ; ?> ">
                                <a href="login.php"> Login
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
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->