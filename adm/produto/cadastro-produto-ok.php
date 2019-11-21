<?php
include_once '../classes/autoload.php';

//Verifica se veio tudo preenchido do formulário

if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['categoria']) && $_POST['categoria'] != ""
        && isset($_POST['descricao']) && $_POST['descricao'] != ""
		&& isset($_POST['unidades']) && $_POST['unidades'] != ""
        && isset($_POST['img']) && $_POST['img'] != ""
        && isset($_POST['preco']) && $_POST['preco'] != "") {

    $produto = new Produto();
    $produto->setNome($_POST['nome']);
    $produto->setCategoria($_POST['categoria']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setUnidades($_POST['unidades']);
	$produto->setImg($_POST['img']); 
	$produto->setPreco($_POST['preco']); 

    $produtoDao = new ProdutoDao();
    $b = $produtoDao->insert($produto);
	
	//if($b){
	//	echo "foi";
	//} else{
	//	echo "não";
	//}
}
?>

<html>
<body> 

    <section class="conteiner">
		<img src="sucesso.png">
        <h2> Sucesso ao cadastrar!</h2>
		<button><a href="listar-produtos.php">Voltar</a></button>
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