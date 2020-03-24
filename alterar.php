<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crie sua conta</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img\deku.png">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form name="cadastrar" action="alterando.php" method="post" id="signup-form" class="signup-form">
                    <h2>Altera</h2>
                    <p class="desc">Altere sua contar <span>“Shonen Kick”</span></p>
                    <div class="form-group">
                        <input type="text" class="form-input" name="usuario" id="usuario" placeholder="usuário"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="email" id="email" placeholder="email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="senha" id="senha" placeholder="senha"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="Alterar"/>
                        <a class="nav-link" style="color:white;"href="index.html" align="right"><b>Voltar<b></a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>