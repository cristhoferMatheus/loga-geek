<?php
include_once '../classes/autoload.php';
//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $carrinho = new Carrinho();
    $carrinho->setId($_GET['id']);
    

    $carrinhoDao = new CarrinhoDao();
    $carrinhoDao->delete($carrinho);
    
    header( "Refresh:5; url=carrinho-lista.php", true, 303);
}
?>
<html>
<body>     

    <section id="contato">
        <h2> Sucesso ao deletar!</h2>
     </section>
    
    <footer> 
    </footer>
</body>
</html>