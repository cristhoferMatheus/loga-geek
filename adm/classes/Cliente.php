<?php

class Cliente {
    private $id;
    private $nome;
    private $Snome;
    private $email;
    private $cpf;
    private $cidade;
    private $estado;
    private $login;
    private $senha;
	  
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getSnome() {
        return $this->Snome;
    }

    function getEmail() {
        return $this->email;
    }

    function getCpf() {
        return $this->cpf;
    }
	
	function getCidade() {
        return $this->cidade;
    }
	
	function getEstado() {
        return $this->estado;
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

    function setSnome($Snome) {
        $this->Snome = $Snome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }
	
	function setCidade($cidade) {
        $this->cidade = $cidade;
    }
	
	function setEstado($estado) {
        $this->estado = $estado;
    }

	function setLogin($login) {
        $this->login = $login;
    }
	
	function setSenha($senha) {
        $this->senha = $senha;
    }

}