<?php


$timestamp = time();

date_default_timezone_set("Asia/Riyadh");
    $date = date("d/m/Y D h:i A");

echo  $timestamp ."<br>";
echo  $_SERVER["REMOTE_ADDR"] ."<br>";
echo  getenv("REMOTE_ADDR")."<br>" ;
echo $_SERVER['SERVER_NAME'] ."<br>";
echo  $date ."<br>";
echo gethostname()."<br>";

//echo $_SERVER['HTTP_USER_AGENT'] ."<br>";
//echo get_current_user() ."<br>";

//echo getenv("username")."<br>"; // e.g. root or www-data
echo  gethostbyaddr($_SERVER['REMOTE_ADDR'])."<br>";


//$obj = new COM("wscript.network");
//echo $obj->username;

//exec('wmic COMPUTERSYSTEM Get UserName', $user);
//print_r($user);
     

//$user = shell_exec('wmic /node: <yourcomputername> COMPUTERSYSTEM Get UserName');
//print_r($user);

$user = shell_exec('wmic COMPUTERSYSTEM Get UserName');
echo $user."<br>";

$user2 = shell_exec('WMIC "workstation_name" COMPUTERSYSTEM GET USERNAME');
echo $user2."<br>";

?>
