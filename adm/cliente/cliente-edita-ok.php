<?php
include_once '../classes/autoload.php';

if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['Snome']) && $_POST['Snome'] != ""
        && isset($_POST['email']) && $_POST['email'] != ""
		&& isset($_POST['cpf']) && $_POST['cpf'] != ""
        && isset($_POST['cidade']) && $_POST['cidade'] != ""
		&& isset($_POST['estado']) && $_POST['estado'] != ""
        && isset($_POST['login']) && $_POST['login'] != ""
        && isset($_POST['senha']) && $_POST['senha'] != "") {

    $cliente = new Cliente();
    $cliente->setNome($_POST['nome']);
    $cliente->setSnome($_POST['Snome']);
    $cliente->setEmail($_POST['email']);
    $cliente->setCpf($_POST['cpf']);
	$cliente->setCidade($_POST['cidade']); 
	$cliente->setEstado($_POST['estado']); 
	$cliente->setLogin($_POST['login']); 
	$cliente->setSenha($_POST['senha']); 

    $clienteDao = new ClienteDao();
    $clienteDao->update($cliente);
}
?>

<html>    
<body> 
    
    <section class="conteiner">
		<img src="sucesso.png">
        <h2> Sucesso ao editar!</h2>
		<button><a href="listar-cliente.php">Voltar</a></button>
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