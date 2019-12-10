<?php

class Carrinho {
    private $id;
    private $idCliente;
    private $idProduto;
    private $preco;
    private $nome;
    private $img;
    private $status;

	  
    function getId() {
        return $this->id;
    }

    function getIdCliente() {
        return $this->idCliente;
    }
	
	function getIdProduto() {
        return $this->idProduto;
    }
	
	function getPreco() {
        return $this->preco;
    }
	
	function getNome() {
        return $this->nome;
    }
	
	function getImg() {
        return $this->img;
    }
	
	function getStatus() {
        return $this->status;
    }

	function setId($id) {
        $this->id = $id;
    }

	function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }
	
	function setIdProduto($idProduto) {
        $this->idProduto = $idProduto;
    }
	
	function setPreco($preco) {
        $this->preco = $preco;
    }
	
	function setNome($nome) {
        $this->nome = $nome;
    }
	
	function setImg($img) {
        $this->img = $img;
    }
	
	function setStatus($status) {
        $this->status = $status;
    }
	

}