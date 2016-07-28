
<?php
date_default_timezone_set("Asia/Riyadh");

$datetime1 = new DateTime('2 Jan 2008');
$datetime2 = new DateTime('5 July 2012');
$interval5 = $datetime1->diff($datetime2);
echo $interval5->format('%y years %m months and %d days').'<br>';
$t1=$interval5->format('%y years %m months and %d days');

$datetime1 = new DateTime('26-01-2010');
$datetime2 = new DateTime('13-05-2012');
$interval55 = $datetime1->diff($datetime2);
echo $interval55->format('%y years %m months and %d days');
$t2 = $interval55->format('%y years %m months and %d days');
//echo $interval55 ;
//$t3 = $interval55->diff($interval5);
//echo $t3->format('%y years %m months and %d days');
//echo ( $interval5->format('%y years %m months and %d days') + $interval55->format('%y years %m months and %d days') )->format('%y years %m months and %d days') ;


echo '<br><br>';
$bd = '23-04-1990' ;
$nd = Date('m-d-Y') ;
$datetime1 = new DateTime($bd);
$datetime2 = new DateTime($nd);
$interval55 = $datetime1->diff($datetime2);
echo $interval55->format('%y years %m months and %d days');





echo '<br><br>';

$b1 = '09-08-2016' ;
$b2 = '09-08-2016';
$bn = Date('m-d-Y') ;
echo $b1."<br>";
echo $b2."<br>";
echo $bn."<br>";
if(strtotime($b1) <=  strtotime($bn) && strtotime($bn)  <= strtotime($b2)){
	echo "succes";
}else{
	echo "erroe";
}



?>