<?php

if(isset($_COOKIE['IP']) == TRUE && isset($_COOKIE['IP2']) == FALSE){
$resultado = Somar($soma1,$soma1);
ExistenteIp($resultado);
}elseif(isset($_COOKIE['IP2'])== TRUE && isset($_COOKIE['IP3']) == FALSE){
	$resultado = Somar1($soma1,$soma1,$soma1);
	ExistenteIp($resultado);
}elseif(isset($_COOKIE['IP3'])== TRUE && isset($_COOKIE['IP4']) == FALSE){
	$resultado = Somar2($soma1,$soma1,$soma1,$soma1);
	ExistenteIp($resultado);
}else{
	SetarIp();
}
?>