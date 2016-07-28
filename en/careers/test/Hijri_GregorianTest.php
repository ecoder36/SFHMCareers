<?php 
date_default_timezone_set("Asia/Riyadh");
include "Hijri_GregorianConvert.php"; 

$DateConv=new Hijri_GregorianConvert; 


echo "<br>"; 



$format="YYYY/MM/DD"; 
$date="1437/09/26"; 
echo "src: $date<br>"; 
$result=$DateConv->HijriToGregorian($date,$format); 
$resultr=date('d-m-Y D',strtotime($result . "-1 days"));

echo "Hijri to Gregorian Result: ".$resultr."<br> gre to hijri:<br>"; 


/*
$format="YYYY/MM/DD"; 
$date="1988/07/24"; 
echo "src: $date<br>"; 

echo $DateConv->GregorianToHijri($date,$format); */

$format="YYYY/MM/DD"; 
$date2="2016/07/01"; 
echo "src: $date2<br>";
$resulta = $DateConv->GregorianToHijri($date2,$format);
$resultga = date('Y/m/d',strtotime($resulta . "+1 days"));
echo $resultga ; 



?> 