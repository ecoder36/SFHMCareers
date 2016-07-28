<?php	
	$No = '361' ;

  $Y = (int)($No / '360');
  $M = (int)(($No - ((int)($No / 360) * 360)) / 30);
  $D = $No - (($Y * 360) + ($M * 30));
$D2YMD = $Y . " years " . $M . " months " . $D . " days" ;

echo $D2YMD ;