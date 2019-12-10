<?php
session_start();
include_once '../classes/autoload.php';

    $carrinho = new Carrinho();
    $carrinho->setIdCliente($_SESSION['cliente']);
    $carrinho->setIdProduto($_GET['id']);
    $carrinho->setNome($_GET['nome']);
    $carrinho->setImg($_GET['img']);
    $carrinho->setPreco($_GET['preco']);
    $carrinho->setStatus(0);

    $carrinhoDao = new CarrinhoDao();
    $b = $carrinhoDao->insert($carrinho);

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="../../css/geek.css">
<script src="../../js/jssor.slider.min.js" type="text/javascript"></script>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body>

<nav class="topnav">
<img class="logo" src="../../img/logos/logo1.png" style="width:270px;height:150px">
 <a class="active" href="../../index.php">Home</a>
 <a href="../../categoria.php">Categorias</a>
 <a href="../../galeria.php">Imagens</a>
  
</nav>
<a href="login.php"><button class="lo">Login</button></a>
<a href="cadastro-cliente.php"><button class="cd">Cadastra-se</button></a>

<input type="text" name="search" placeholder="Search....">

<h2 class="marg">Sucesso ao Comprar</h2>

<button class="center"><a href="../../index.php">Voltar a Comprar</a></button>
