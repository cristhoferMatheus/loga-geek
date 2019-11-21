<?php
include_once '../classes/autoload.php';

if (isset($_POST['action']) && $_POST['action'] != "" 
        && isset($_POST['livros']) && $_POST['livros'] != ""
        && isset($_POST['acessorios']) && $_POST['acessorios'] != ""
        && isset($_POST['roupas']) && $_POST['roupas'] != "") {

    $categoria = new Categoria();
    $categoria->setId($_POST['id']);
    $categoria->setAction($_POST['action']);
    $categoria->setLivros($_POST['livros']);
    $categoria->setAcessorios($_POST['acessorios']);
    $categoria->setRoupas($_POST['roupas']);

    $categoriaDao = new CategoriaDao();
    $categoriaDao->update($categoria);
}
?>

<html>    
<body> 
    
    <section class="conteiner">
		<img src="sucesso.png">
        <h2> Sucesso ao editar!</h2>
		<button><a href="listar-categoria.php">Voltar</a></button>
     </section>
    
</body>
    <footer> 
    </footer>
</html>
<style>
.conteiner{
	background-color:#c5a0a0;
	width:50%;
	height:60%;
	text-align:center;
	margin-left:25%;
}

img{
	width:300px;
	height:300px;
}

a{
	text-decoration:none;
}

button{
width:60px;
height:25px;
}
</style>