<html>
<head>
	<title>Alteração</title>
</head>
<body>



<?php 
include("conexao.php");	
$usuario=$_POST["usuario"];
$email=$_POST["email"];
$senha=$_POST["senha"];



$sql = mysqli_query($conexao, "UPDATE usuarios SET usuario='$usuario' WHERE usuario='$usuario'");
$sql = mysqli_query($conexao, "UPDATE usuarios SET email='$email' WHERE usuario='$usuario'");
$sql = mysqli_query($conexao, "UPDATE usuarios SET senha='$senha' WHERE usuario='$usuario'");
echo "Alterado com sucesso";
?>

</body>
</html>