<?php

class Categoria {
    private $id;
    private $action;
    private $livros;
    private $acessorios;
    private $roupas;
	  
    function getId() {
        return $this->id;
    }

    function getAction() {
        return $this->action;
    }

    function getLivros() {
        return $this->livros;
    }

    function getAcessorios() {
        return $this->acessorios;
    }

    function getRoupas() {
        return $this->roupas;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setAction($action) {
        $this->action = $action;
    }

    function setLivros($livros) {
        $this->livros = $livros;
    }

    function setAcessorios($acessorios) {
        $this->acessorios = $acessorios;
    }

    function setRoupas($roupas) {
        $this->roupas = $roupas;
    }
	

}