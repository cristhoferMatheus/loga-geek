<?php
session_start();
include_once 'classes/autoload.php';
include_once 'classes/UsuarioDao.php';

if (isset($_POST['senha']) && isset($_POST['login']) 
        && $_POST['senha'] != "" && $_POST['login'] != "") {
    
	
	$usuario = new Usuario();
    $usuario->setLogin($_POST['login']);
    $usuario->setSenha(md5($_POST['senha']));

    $login = new Login();
    $login = $login->verificaLogin($usuario);
    
    if($login){
        header('Location:adm/index.html');
    } else {
        header('Location:adm/login.php');
    }
    
} else {
    $msg = "Preencha todos os campos";
    echo $msg;
}
?>