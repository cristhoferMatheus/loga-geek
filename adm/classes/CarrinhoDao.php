<?php

class UsuarioDao extends Db implements InterfaceDao {

    private $table = 'carrinhos';

    public function insert($carrionho) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (nome, img, preco) VALUES (:nome, :img, :preco)");

        $stmt->bindValue(':nome', $carrionho->getNome());
        $stmt->bindValue(':img', $carrionho->getImg());
        $stmt->bindValue(':preco', $carrionho->getPreco());

        return $stmt->execute();
    }
    

    public function delete($carrionho) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $carrionho->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $carrionhos = array();

        while ($linha = $stmt->fetch()) {

            $carrionho = new Carrionho();
			$carrionho->setId($linha['id']);
            $carrionho->setNome($linha['nome']);
            $carrionho->setImg($linha['img']);
            $carrionho->setPreco($linha['preco']);

            $carrionhos[] = $carrionho;
        }
        return $usuarios;
    }

}
