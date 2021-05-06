<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>MySimpleIp - Histórico</title>
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
<ul>
<?php
if(isset($_COOKIE['IP']) == TRUE){
	echo '<li><span>IP:' . $_COOKIE['IP'].'</span></li></br>';
}else{
	echo '<li><span>Não existe nenhum registro no histórico sobre seu computador</span></li>';
}
if(isset($_COOKIE['IP2'])== TRUE){
	echo '<li><span>IP2:' . $_COOKIE['IP2'].'</span></li></br>';
}
if(isset($_COOKIE['IP3'])== TRUE){
	echo '<li><span>IP3:' . $_COOKIE['IP3'].'</span></li></br>';
}
if (isset($_COOKIE['IP4'])){
	echo '<li><span>IP4:' . $_COOKIE['IP4'].'</span></li></br>';
}
?>
</ul>
</div>
<button>Limpar</button>
<div id="info">
</div>
</body>
</html>