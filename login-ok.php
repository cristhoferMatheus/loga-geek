<?php
session_start();
include_once 'adm/classes/autoload.php';
include_once 'adm/classes/ClienteDao.php';

if (isset($_POST['senha']) && isset($_POST['login']) 
        && $_POST['senha'] != "" && $_POST['login'] != "") {
   
    $cliente = new Cliente();
    $cliente->setLogin($_POST['login']);
    $cliente->setSenha(md5($_POST['senha']));

    $login = new Login();
    $login = $login->verificaLogin($cliente);
    
    if($login){
        header('Location:index.html');
    } else {
        header('Location:login.php');
    }
    
} else {
    $msg = "preencha  todos os campos";
    echo $msg;
}
?>