<?php

class Carrinho {
    private $id;
    private $nome;
    private $img;
    private $preco;
	  
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
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

    function setImg($img) {
        $this->img = $img;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

}