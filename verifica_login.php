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
   		 <img src="img\deku.png" width="30" height="30" class="d-inline-block align-top" link="index.html">
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

    <ul class="nav justify-content-right" style="background-color:black">
    	<li class="nav-item">
        	<a class="nav-link" style="color:#ff8000;"><b>Seja bem-vindo</b></a>
         </li>
         
   </ul>
    
    
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
   </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <a href="boku.html"> <img class="d-block w-100" src="img\eu1.png" alt="Boku no hero academia" width="1920px" height="1200px">
     
    </div>
    <div class="carousel-item">
       <a href="boruto.html"><img class="d-block w-100" src="img\eu2.png" alt="boruto"width="1920px" height="1200px">
    </div>
   
    <div class="carousel-item">
       <a href="prison.html"><img class="d-block w-100" src="img\eu3.jpg" alt="prison" width="1920px" height="1200px">
    </div>
     
     <div class="carousel-item">
    	 <a href="jojo.html"> <img class="d-block w-100" src="img\eu4.png" alt="jojo bziarre"width="1920px" height="1200px">
    </div>
    
     <div class="carousel-item">
       <a href="shingeki.html"><img class="d-block w-100" src="img\eu5.jpg" alt="attack on titan"width="1920px" height="1200px">
    </div>
    
     <div class="carousel-item">
      <a href="onepunch.html"> <img class="d-block w-100" src="img\eu6.jpg" alt="onepunch"width="1920px" height="1200px">
    </div>
 	
     <div class="carousel-item">
       <a href="over.html"><img class="d-block w-100" src="img\eu7.jpg" alt="overlord"width="1920px" height="1200px">
    </div>
    
     <div class="carousel-item">
     <a href="death.html"><img class="d-block w-100" src="img\eu8.jpg" alt="Death note"width="1920px" height="1200px">
    </div>
       <div class="carousel-item">
       <a href="noragami.html"><img class="d-block w-100" src="img\eu9.png" alt="overlord"width="1920px" height="1200px">
    </div>
           <div class="carousel-item">
       <a href="goku.html"><img class="d-block w-100" src="img\eu10.png" alt="overlord"width="1920px" height="1200px">
    </div>
 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<div class="navabar-inner" style="background-color:orange">
    	<div class="container">
        	<a href="https://twitter.com/"><img src="img\twitter.png" width="45px" height="45px"/></a>
    		<a href="https://www.facebook.com/"><img src="img\face.png" width="45px" height="45px"/></a>
            <a href="https://wwww.instagram.com/"><img src="img\insta.png" width="45px" height="45px"/></a>
    		<a href=""><img src="img\carta.png" width="45px" height="30px"/></a> <b> shonenkick@hotmail.com</b>
            
         </div>
    </div>
<?PHP
require 'funcoes.php';
$login= $_POST[('login')];
$senha= $_POST[('senha')];
$login2 = login($login,$senha);
?>


</body>
</html>

   