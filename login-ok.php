<?php
session_start();
include_once 'classes/autoload.php';
include_once 'classes/UsuarioDao.php';

if (isset($_POST['senha']) && isset($_POST['login']) 
        && $_POST['senha'] != "" && $_POST['login'] != "") {
    
	
	$usuario = new Usuario();
    $usuario->setLogin($_POST['login']);
    $usuario->setSenha(md5($_POST['senha']));


    $loginUser = new LoginUser();
    $loginUser = $loginUser->verificaLoginUser($usuario);
    
    if($loginUser){
        header('Location:index.html');
    } else {
        header('Location:login.php');
    }
    
} else {
    $msg = "Preencha todos os campos";
    echo $msg;
}
?>