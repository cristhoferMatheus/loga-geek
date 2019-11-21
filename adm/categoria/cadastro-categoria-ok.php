<?php
include_once '../classes/autoload.php';

//Verifica se veio tudo preenchido do formulário

if (isset($_POST['action']) && $_POST['action'] != "" 
        && isset($_POST['livros']) && $_POST['livros'] != ""
        && isset($_POST['acessorios']) && $_POST['acessorios'] != ""
		&& isset($_POST['roupas']) && $_POST['roupas'] != "") {

    $categoria = new Categoria();
    $categoria->setAction($_POST['action']);
    $categoria->setLivros($_POST['livros']);
    $categoria->setAcessorios($_POST['acessorios']);
    $categoria->setRoupas($_POST['roupas']); 

    $categoriaDao = new CategoriaDao();
    $b = $categoriaDao->insert($categoria);
	

}
?>

<html>
<body> 

    <section class="conteiner">
		<img src="sucesso.png">
        <h1> Sucesso ao cadastrar!</h1>
		<button><a href="listar-categoria.php">Voltar</a></button>
     </section>
    
    <footer> 
    </footer>
</body>
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