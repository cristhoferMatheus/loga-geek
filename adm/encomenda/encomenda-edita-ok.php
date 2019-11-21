<?php
include_once '../classes/autoload.php';

if (isset($_POST['nPed']) && $_POST['nPed'] != "" 
        && isset($_POST['nomeS']) && $_POST['nomeS'] != ""
        && isset($_POST['estado']) && $_POST['estado'] != ""
        && isset($_POST['cidade']) && $_POST['cidade'] != ""
        && isset($_POST['endereco']) && $_POST['endereco'] != "") {

    $encomenda = new Encomenda();
    $encomenda->setId($_POST['id']);
    $encomenda->setNPed($_POST['nPed']);
    $encomenda->setNomeS($_POST['nomeS']);
    $encomenda->setEstado($_POST['estado']);
    $encomenda->setCidade($_POST['cidade']);
    $encomenda->setEndereco($_POST['endereco']);

    $encomendaDao = new EncomendaDao();
    $encomendaDao->update($encomenda);
}
?>

<html>    
<body> 
    
    <section class="conteiner">
		<img src="sucesso.png">
        <h2> Sucesso ao editar!</h2>
		<button><a href="listar-encomendas.php">Voltar</a></button>
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