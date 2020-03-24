<html>
<head>
 <title>Deletando</title>
</head>
<body>
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "animes"; 
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
$db = mysqli_select_db($conexao,$banco);

	
	$usuario=$_POST["usuario"];
	$sql = mysqli_query($conexao,"DELETE * FROM usuarios WHERE usuario =$usuario");
	
	echo "Excluido com sucesso";

	


?>
</body>
</html> 