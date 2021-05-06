<?php
$soma1 = 1;
$soma2 = 2;
$soma3 = 3;
$soma4 = 4;

function Somar($a, $b){
	return $a= $b + $b;
}

function Somar1($a, $b){
	return $a = $b + $b + $b;
}

function Somar2 ($a, $b){
	return $a = $b + $b + $b + $b;
}

function SetarIp2SemCookie(){
	$ip = $_SERVER['REMOTE_ADDR'];
	return $ip;
}

function SetarIp(){
$ip = $_SERVER['REMOTE_ADDR'];
setcookie('IP',''.$ip);
return $ip;
}

function ExistenteIp($a){
$ip = $_SERVER['REMOTE_ADDR'];
setcookie('IP'.$a,''.$ip);
}
?>