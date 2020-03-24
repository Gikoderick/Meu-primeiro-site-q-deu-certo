
<?PHP
########################
### Código by Eu kkk ####
//Esta página será o objeto principal do site

//Função CONEXAO, irá conectar ao banco
$servidor="localhost";
$usuario="root";
$senha="";
$banco="animes";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
$db = mysqli_select_db($conexao, $banco);
  ?>

   