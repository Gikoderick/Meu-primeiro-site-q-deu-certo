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
          
          

			<center> <tr>
				<b><br><br><br><br><br><br><br><br><br> <h3 style="color:orange">Você foi Cadastrado com Sucesso!!<br>
正常に登録されました!!</h3></b>
			<tr></center>
			<div class="form-group"> 
        <a class="nav-link" style="color:orange;"href="index.html" align="right"><b>Voltar<b></a>
			</div>
<?php 
include ("funcoes.php");
$usuario=$_POST["usuario"];
$email=$_POST["email"];
$senha=$_POST["senha"];
$sql2 = mysqli_query ("INSERT INTO usuarios (usuario,email,senha) VALUES ('$usuario','$email','$senha')");
?>



</body>
</html>