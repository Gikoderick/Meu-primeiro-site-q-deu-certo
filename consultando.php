<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>|Shonen Kick Animes|</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="img\deku.png">
</head>

<body>
	<!-- Imagem e texto -->
		<nav class="navbar navbar-light"  style="background-color:orange">
  		<a class="navbar-brand" href="#">
   		 <img src="img\deku.png" width="30" height="30" class="d-inline-block align-top" alt="">
   		<b>Shonen Kick</b>
  			</a>
            
    <div class="navabar-inner">
    	<div class="container">
        	<a href="https://twitter.com/"><img src="img\twitter.png" width="45px" height="45px"/></a>
    		<a href="https://www.facebook.com/"><img src="img\face.png" width="45px" height="45px"/></a>
            <a href="https://wwww.instagram.com/"><img src="img\insta.png" width="45px" height="45px"/></a>
    		<a href=""><img src="img\carta.png" width="45px" height="30px"/></a> <b> shonenkick@hotmail.com</b>
            
         </div>
    </div>
</nav>

<?php
include ("conexao.php");

	$buscar = $_POST['usuario'];
	
	$sql = mysqli_query($conexao, "SELECT * FROM usuarios WHERE usuario='$buscar'");
	
	$linha = mysqli_fetch_array($sql);
	
	$usuario = $linha["usuario"];
	$email = $linha["email"];
	$senha = $linha["senha"];

	
	echo "<left><b>Usuario</b> - $usuario <br>";
	echo "<b>Email</b> - $email <br>";
	echo "<b>Senha</b> - $senha <br>";
	
	
?>

<br>
<a class="nav-link" style="color:orange"; href="alterar.php" align="center"> Alterar </a>
<p>
<a class="nav-link" style="color:orange"; href="excluir.php" align="center"> Excluir </a>
</body>
</html> 