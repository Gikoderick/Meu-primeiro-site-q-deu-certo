<?PHP
//$login   = mysql_escape_string ($_POST['login'   ]); testar o uso do mysqli
//$senha = mysql_escape_string ($_POST['senha']);
$email   = $_POST[('email')];
$senha   = $_POST[('senha')];


//Chama o objeto conexao principal
require  'conexao.php';

//Passa as variáveis por parâmetro para classe login (função)
$verifica= login($email,$senha);

?>