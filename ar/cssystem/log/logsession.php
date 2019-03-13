<?php

@session_name(['user_info_2']);
@session_start();

    if(@$_SESSION['user_info_2'] != false ){
            @$ids          =  $_SESSION['user_info_2']->id;
            @$name             =  $_SESSION['user_info_2']->name;
           
    }
    if(!@isset($_SESSION['user_info_2']))
        @$_SESSION['user_info_2'] = false ;
        
?>
