<?php
include_once 'adm/classes/autoload.php';

if (isset ($_GET['categoria']) && $_GET['categoria'] !==""){
	$produto = new Produto();
	
	$produtoDao = new ProdutoDao();
	$compl = " where categoria = '".$_GET['categoria']."'";
	$lista = $produtoDao->select($compl);
}
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
<?php foreach($lista as $produtos): ?>

<div class="cate">
	
	<p>Nome do produto: <?php echo $produtos->getNome();?></p>
	<p>Unidades: <?php echo $produtos->getUnidades();?></p>
	<p>Descrição: <?php echo $produtos->getDescricao();?></p>
	<p><img src="img/novos/<?php echo $produtos->getImg();?>"></p>
	<p>Preço: <?php echo $produtos->getPreco();?></p>
	
<div>
<hr>
<?php endforeach; ?>

<button><a href="categoria.php">voltar</a></button>
</body>
<footer>
</footer>
</html>