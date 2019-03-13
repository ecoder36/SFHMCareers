<?php
require_once('logsession.php');
if($_SESSION['user_info_2'] != false)
  $_SESSION['user_info_2'] = false;
    header('Location: ../../home');

?>
