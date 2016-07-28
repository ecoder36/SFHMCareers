<?php
@session_start();

    if(@$_SESSION['user_info'] != false ){
            @$ename           =  $_SESSION['user_info']->efullname;
            @$rno             =  $_SESSION['user_info']->rno;
            @$ids             =  $_SESSION['user_info']->id;
            @$idnumbers       =  $_SESSION['user_info']->idnumber;
    }
    if(!@isset($_SESSION['user_info']))
        @$_SESSION['user_info'] = false ;
        
?>
