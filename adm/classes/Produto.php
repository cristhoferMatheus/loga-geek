<?php

class Produto {
    private $id;
    private $nome;
    private $categoria;
    private $descricao;
    private $unidades;
    private $img;
    private $preco;
	  
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getUnidades() {
        return $this->unidades;
    }
	
	function getImg() {
        return $this->img;
    }
	
	function getPreco() {
        return $this->preco;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setUnidades($unidades) {
        $this->unidades = $unidades;
    }
	
	function setImg($img) {
        $this->img = $img;
    }
	
	function setPreco($preco) {
        $this->preco = $preco;
    }

}