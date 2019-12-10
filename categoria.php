<?php
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

<body><p>
<button><a href="cate.php?categoria=acessorio">acessórios</a></button><p>
<button><a href="cate.php?categoria=roupa">roupas</a></button><p>
<button><a href="cate.php?categoria=livro">livros</a></button><p>
<button><a href="cate.php?categoria=action">action figure</a></button>
</body>