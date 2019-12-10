<?php
include_once '../classes/autoload.php';

if (isset($_POST['nome']) && $_POST['nome'] != "" 
        && isset($_POST['email']) && $_POST['email'] != ""
        && isset($_POST['telefone']) && $_POST['telefone'] != ""
        && isset($_POST['endereco']) && $_POST['endereco'] != ""
        && isset($_POST['login']) && $_POST['login'] != ""
		&& isset($_POST['senha']) && $_POST['senha'] != "") {

    $usuario = new Usuario();
    $usuario->setId($_POST['id']);
    $usuario->setNome($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $usuario->setTelefone($_POST['telefone']);
    $usuario->setEndereco($_POST['endereco']);
    $usuario->setLogin($_POST['login']);
	$usuario->setSenha($_POST['senha']);

    $usuarioDao = new UsuarioDao();
    $usuarioDao->update($usuario);
}
?>

<html>    
<body> 
    
    <section class="conteiner">
		<img src="sucesso.png">
        <h2> Sucesso ao editar!</h2>
		<button><a href="listar-users.php">Voltar</a></button>
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