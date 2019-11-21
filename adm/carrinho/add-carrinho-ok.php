<?php
include_once '../classes/autoload.php';

//Verifica se veio tudo preenchido do formulário

if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['img']) && $_POST['img'] != ""
        && isset($_POST['preco']) && $_POST['preco'] != "") {

    $carrinho = new Carrinho();
    $carrinho->setNome($_POST['nome']);
	$carrinho->setImg($_POST['img']); 
	$carrinho->setPreco($_POST['preco']); 

    $carrinhoDao = new CarrinhoDao();
    $b = $carrinhoDao->insert(carrinho);
	
	//if($b){
	//	echo "foi";
	//} else{
	//	echo "não";
	//}
}
?>

<html>
<body> 

    <section id="contato">
        <h2> Sucesso ao cadastrar!</h2>
     </section>
    
    <footer> 
    </footer>
</body>
</html>