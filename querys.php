<?php
$ip2 = SetarIp2SemCookie();

if($cep == null){
	$cep = 'Sem cep';
}

mysqli_query($conecta,"SELECT * FROM ip");
mysqli_query($conecta,"INSERT INTO ip(endereco,sistema,navegador,pais,cidade,cep,org,isp) values('".$ip2."','".$user_os."','".$user_browser."','".$pais."','".$cidade."','".$cep."','".$org."','".$isp."')");
mysqli_close($conecta);
?>