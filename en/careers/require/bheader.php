    <link rel="icon" href="http://www.s-taif.com/upload/pageBrand/114.jpg">
    <body class="page-container-bg-solid page-header-menu-fixed">
<!-- BEGIN HEADER -->
<div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container-fluid">
                    <!-- BEGIN LOGO -->
                    <div class="pull-right"><br><img width="50" height="50" src="http://www.s-taif.com/upload/pageBrand/114.jpg" alt="logo" class="logo-default"> </div>
                   <div class="page-logo">
                         <br>
                       <font style="font-family : Verdana;font-size: 600%;  font-size: 3.0vh; " class="logo-default theme-font"><b>SFHMCareers</b></font>
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
                <div class="container-fluid">
                    
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
                           <?php if(@$_SESSION['user_info'] == false  && @$_SESSION['admin_info'] == false){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acjobs ; ?> ">
                                <a href="jobs.php"> Jobs
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            
                             <li class="menu-dropdown mega-menu-dropdown <?php  echo @$aclogin ; ?> ">
                                <a href="login.php"> Login
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                             <?php if(@$_SESSION['user_info'] != false && @$_SESSION['admin_info'] == false){ ?>
                             
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acuprofile ; ?> ">
                                <a href="userprofile.php?idnumber=<?php echo @$_SESSION['user_info']->idnumber ;?>"> My CV
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acchangepass ; ?> ">
                                <a href="changepass.php?id=<?php echo @$_SESSION['user_info']->id ; ?>&idnumber=<?php echo @$_SESSION['user_info']->idnumber ;?>"> Change Password
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown  ">
                                <a href="log/logout.php"> Logout
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                             <?php if(@$_SESSION['admin_info'] != false && @$_SESSION['user_info'] == false ){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acadmintable ; ?> ">
                                <a href="admintable.php"> Admin Table
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acapplicantslist ; ?> ">
                                <a href="applicantslist.php"> Applicants List
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acaddjobs ; ?> ">
                                <a href="addjobs.php"> Add New Job
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acchangepassa ; ?> ">
                                <a href="changepassa.php?id=<?php echo @$_SESSION['admin_info']->id ; ?>&idnumber=<?php echo @$_SESSION['admin_info']->uname ;?>"> Change Password
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php if(@$_SESSION['admin_info']->isadmin == 1 ){ ?>
                             <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acadminusers ; ?> ">
                                <a href="adminusers.php"> Admin Users
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                             <li class="menu-dropdown mega-menu-dropdown  ">
                                <a href="log/adminlogout.php"> Logout
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(@$_SESSION['user_info'] == false  && @$_SESSION['admin_info'] == false ){ ?>
                            <li class="menu-dropdown mega-menu-dropdown <?php  echo @$acadminlogin ; ?> ">
                                <a href="adminlogin.php"> Admin Login
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if(@$_SESSION['user_info'] == true  && @$_SESSION['admin_info'] == true ){ ?>
                            <li class="menu-dropdown mega-menu-dropdown  ">
                                <a href="log/logout.php"> user Logout
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <li class="menu-dropdown mega-menu-dropdown  ">
                                <a href="log/adminlogout.php"> admin Logout
                                    <span class="arrow"></span>
                                </a>
                            </li>
                            <?php } ?>
                           <!-- <li class="menu-dropdown classic-menu-dropdown active">
                                <a href="javascript:;"> Layouts
                                    <span class="arrow"></span>
                                </a>
                                <ul class="dropdown-menu pull-left">
                                    <li class=" ">
                                        <a href="layout_mega_menu_light.html" class="nav-link  "> Light Mega Menu </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_top_bar_light.html" class="nav-link  "> Light Top Bar Dropdowns </a>
                                    </li>
                                    <li class=" active">
                                        <a href="layout_fluid_page.html" class="nav-link  active"> Fluid Page </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_top_bar_fixed.html" class="nav-link  "> Fixed Top Bar </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_mega_menu_fixed.html" class="nav-link  "> Fixed Mega Menu </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_disabled_menu.html" class="nav-link  "> Disabled Menu Links </a>
                                    </li>
                                    <li class=" ">
                                        <a href="layout_blank_page.html" class="nav-link  "> Blank Page </a>
                                    </li>
                                </ul>
                            </li> -->
                            
                            
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