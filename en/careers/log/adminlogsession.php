<?php
@session_start();

    if(@$_SESSION['admin_info'] != false ){
            $ids             =  $_SESSION['admin_info']->id;
    }
    if(!@isset($_SESSION['admin_info']))
        @$_SESSION['admin_info'] = false ;
        
?>
