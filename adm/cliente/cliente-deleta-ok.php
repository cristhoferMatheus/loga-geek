<?php
include_once '../classes/autoload.php';
//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $cliente = new Cliente();
    $cliente->setId($_GET['id']);
    

    $clienteDao = new clienteDao();
    $clienteDao->delete($cliente);
    
    header( "Refresh:5; url=cliente-lista.php", true, 303);
}
?>
<html>
<body>     

    <section class="conteiner">
		<img src="sucesso.png">
        <h2> Sucesso ao deletar!</h2>
		<button><a href="listar-cliente.php">Voltar</a></button>
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