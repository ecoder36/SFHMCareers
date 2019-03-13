<?php
require_once('adminlogsession.php');
if($_SESSION['admin_info'] != false)
  $_SESSION['admin_info'] = false;
    header('Location: ../adminlogin.php');

?>
