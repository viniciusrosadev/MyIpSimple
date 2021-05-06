<?php

$servidor = "amazon";

if($_SERVER['REMOTE_ADDR'] == TRUE){
include_once ("pegarip.php");
if($pais == "Brazil"){
	$pais = "Brasil";
}
}else{
	die("O site está em manutenção no momento.");
}
exec('ping -c 2 127.0.0.1', $saida, $retorno);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>SimplesIP - Facilitando as informações</title>
</head>
<body>
<div id="menu">
<a href="index.php"><span>Início</span></a>   ||   <a href="about.php"><span>Sobre</span></a>   ||   <a href="help.php"><span>Ajuda</span></a>
</div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div class="box">
<span>Seu IP: <?php echo ''.SetarIp2SemCookie()?></span></br>
<span>Seu País: <?php echo ''.$pais?></span></br>
<span>Sua Cidade: <?php echo ''.$cidade?></span></br>
<span>Sua Operadora: <?php echo ''.$org?></span></br>
<span>Seu Ping: <?php $valor = implode($saida); echo ''.$valor;?></span></br>
<a href="historico.php"><span>Histórico de IP's</span>
</div>
<div id="info">
</div>
</body>
</html>