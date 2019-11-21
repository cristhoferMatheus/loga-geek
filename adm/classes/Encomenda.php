<?php

class Encomenda {
    private $id;
    private $nPed;
    private $nomeS;
    private $estado;
    private $cidade;
    private $endereco;
	  
    function getId() {
        return $this->id;
    }

    function getNPed() {
        return $this->nPed;
    }

    function getNomeS() {
        return $this->nomeS;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }
	
	function getEndereco() {
        return $this->endereco;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setNPed($nPed) {
        $this->nPed = $nPed;
    }

    function setNomeS($nomeS) {
        $this->nomeS = $nomeS;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }
	
	function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

}