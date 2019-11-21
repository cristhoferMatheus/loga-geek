<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $telefone;
    private $endereco;
    private $login;
    private $senha;
	  
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }
	
	function getEmail() {
        return $this->email;
    }
	
	function getTelefone() {
        return $this->telefone;
    }
	
	function getEndereco() {
        return $this->endereco;
    }
	
	function getLogin() {
        return $this->login;
    }
	
	function getSenha() {
        return $this->senha;
    }

	function setId($id) {
        $this->id = $id;
    }

	function setNome($nome) {
        $this->nome = $nome;
    }
	
	function setEmail($email) {
        $this->email = $email;
    }
	
	function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
	
	function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
	
	function setLogin($login) {
        $this->login = $login;
    }
	
	function setSenha($senha) {
        $this->senha = $senha;
    }

}