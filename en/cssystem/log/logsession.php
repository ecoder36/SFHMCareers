<?php
@session_start();

    if(@$_SESSION['user_info'] != false ){
            @$ids          =  $_SESSION['user_info']->id;
            @$name             =  $_SESSION['user_info']->name;
           
    }
    if(!@isset($_SESSION['user_info']))
        @$_SESSION['user_info'] = false ;
        
?>
