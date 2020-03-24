<?PHP
########################
### Código by Eu kkk ####
//Esta página será o objeto principal do site

//Função CONEXAO, irá conectar ao banco

function conexao($host='localhost', $usuario='root', $senha='', $bd='animes') {
		$conexao = mysqli_connect($host, $usuario, $senha,$bd);
    if (!$conexao) {
        die("Database connection failed: " . mysqli_connect_error());
    }
	
		$db_select = mysqli_select_db($conexao,$bd);
    if (!$db_select) {
        die("Database selection failed: " . mysqli_connect_error());
    }

		return $conexao;
	}
	
function gravar($usuario,$email,$senha){

$conn = $conexao();	

$sql = "INSERT INTO usuarios VALUES($usuario,$email,$senha,NULL)";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);	
	
}



function login($login,$senha){
   $conn = conexao();
   $sql =" SELECT * FROM usuarios Where usuario='$login' AND senha='$senha'";		
   if($sql == true){
   header("Location: verifica_login.php?msg2=Seja bem-vindo(a) $login");		   
   }
   }
  ?>

   