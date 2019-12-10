﻿<?php
include_once 'adm/classes/autoload.php';

    $produtoDao = new ProdutoDao();
    $lista = $produtoDao->select();
 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="css/geek.css">
<script src="js/jssor.slider.min.js" type="text/javascript"></script>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />



<nav class="topnav">
<img class="logo" src="img/logos/logo1.png" style="width:270px;height:150px">
 <a class="active" href="index.php">Home</a>
 <a href="categoria.php">Categorias</a>
 <a href="galeria.php">Imagens</a>
  
</nav>
<a href="login.php"><button class="lo">Login</button></a>
<a href="cadastro-cliente.php"><button class="cd">Cadastra-se</button></a>

<input type="text" name="search" placeholder="Search....">
</head>

<body>

<div class="carrinho">
<a href="adm/carrinho/listar-carrinho.php"><img class="img" src="img/icones/carro.png"/></a>
</div>

<section>    

    <script type="text/javascript" src="js/geek.js"></script>
	
   <h2 class="marg">Destaques</h2>
	
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1000px;height:390px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1000px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/roupas/camisa1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/acessorios/bone2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/roupas/camisa4.jpg" />
            </div>
			<div>
            <img data-u="image" src="img/action/ac.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/acessorios/bone6.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/roupas/camisa3.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/acessorios/bone1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/action/ac4.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/acessorios/bone.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/roupas/moleton.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/action/ac2.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:35px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:5px;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:35px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:5px;left:-5px;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
	
</section>
<section>
	<h2>Novos Produtos:</h2>

  <div class="grid-container">
  
 <?php foreach($lista as $produtos): ?>
  
  <div class="grid-item">
	<img src="img/novos/<?php echo $produtos->getImg(); ?>">
	
	<p><?php echo $produtos->getPreco(); ?></p>
		
	<a href="view_produt.php?id=<?php echo $produtos->getId(); ?>">detalhes</a><p>
	
	<a href="adm/carrinho/carrinho.php?id=<?php echo $produtos->getId(); ?>&preco=<?php echo $produtos->getPreco(); ?>&nome=<?php echo $produtos->getNome(); ?>&img=<?php echo $produtos->getImg(); ?>" >Comprar</a><p>
	
  </div>  
   
 <?php endforeach; ?>
  	<hr>

	<section>
	<div class="anun"><img src="img/indice.jpg"></div>
	</section>

</body>
</html>