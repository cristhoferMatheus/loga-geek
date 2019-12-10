<?php

class EncomendaDao extends Db implements InterfaceDao {

    private $table = 'encomendas';

    public function insert($encomenda) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (nPed, nomeS, estado, cidade, endereco) VALUES (:nPed, :nomeS, :estado, :cidade, :endereco)");

        $stmt->bindValue(':nPed', $encomenda->getNPed());
        $stmt->bindValue(':nomeS', $encomenda->getNomeS());
        $stmt->bindValue(':estado', $encomenda->getEstado());
        $stmt->bindValue(':cidade', $encomenda->getCidade());
        $stmt->bindValue(':endereco', $encomenda->getEndereco());

        $a = $stmt->execute();
		return $a;
		
    } 
    
    public function update($encomenda) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET nPed=:nPed, nomeS = :nomeS, estado = :estado, cidade = :cidade, endereco = :endereco WHERE id = :id;");

        $stmt->bindValue(':id', $encomenda->getId());
        $stmt->bindValue(':nPed', $encomenda->getNPed());
        $stmt->bindValue(':nomeS', $encomenda->getNomeS());
        $stmt->bindValue(':estado', $encomenda->getEstado());
        $stmt->bindValue(':cidade', $encomenda->getCidade());
        $stmt->bindValue(':endereco', $encomenda->getEndereco());

        return $stmt->execute();
    }    

    public function delete($encomenda) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $encomenda->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $encomendas = array();

        while ($linha = $stmt->fetch()) {

            $encomenda = new Encomenda();
			$encomenda->setId($linha['id']);
            $encomenda->setNPed($linha['nPed']);
            $encomenda->setNomeS($linha['nomeS']);
            $encomenda->setEstado($linha['estado']);
            $encomenda->setCidade($linha['cidade']);
            $encomenda->setEndereco($linha['endereco']);

            $encomendas[] = $encomenda;
        }
        return $encomendas;
    }

    public function selectById($encomenda) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $encomenda->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $encomenda = new Encomenda();
		$encomenda->setId($linha['id']);
        $encomenda->setNPed($linha['nPed']);
        $encomenda->setNomeS($linha['nomeS']);
        $encomenda->setEstado($linha['estado']);
        $encomenda->setCidade($linha['cidade']);
        $encomenda->setEndereco($linha['endereco']);
        
        return $encomenda;
    }
}
