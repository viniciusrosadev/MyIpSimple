<?php

if($servidor == "amazon"){
	$conecta = mysqli_connect('localhost','root','', 'ips');
}else{
	$conecta = mysqli_connect('mysql.hostinger.com.br','','','');
}

if(mysqli_connect_errno()){
	echo 'Erro ao conectar com o banco de dados';
}
?>