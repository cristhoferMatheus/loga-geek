<?php

class CategoriaDao extends Db implements InterfaceDao {

    private $table = 'categorias';

    public function insert($categoria) {
        $stmt = $this->conexao->prepare("INSERT INTO categorias (action, livros, acessorios, roupas) VALUES (:action, :livros, :acessorios, :roupas)");

        $stmt->bindValue(':action', $categoria->getAction());
        $stmt->bindValue(':livros', $categoria->getLivros());
        $stmt->bindValue(':acessorios', $categoria->getAcessorios());
        $stmt->bindValue(':roupas', $categoria->getRoupas());

        $a = $stmt->execute();
		return $a;
		
    }


    public function update($categoria) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET action=:action, livros = :livros, acessorios = :acessorios, roupas = :roupas WHERE id = :id;");

        $stmt->bindValue(':id', $categoria->getId());
        $stmt->bindValue(':action', $categoria->getAction());
        $stmt->bindValue(':livros', $categoria->getLivros());
        $stmt->bindValue(':acessorios', $categoria->getAcessorios());
        $stmt->bindValue(':roupas', $categoria->getRoupas());
        return $stmt->execute();
    }    

    public function delete($categoria) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $categoria->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $categorias = array();

        while ($linha = $stmt->fetch()) {

            $categoria = new Categoria();
			$categoria->setId($linha['id']);
            $categoria->setAction($linha['action']);
            $categoria->setLivros($linha['livros']);
            $categoria->setAcessorios($linha['acessorios']);
            $categoria->setRoupas($linha['roupas']);

            $categorias[] = $categoria;
        }
        return $categorias;
    }

    public function selectById($categoria) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $categoria->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $categoria = new Categoria();
		$categoria->setId($linha['id']);
        $categoria->setAction($linha['action']);
        $categoria->setLivros($linha['livros']);
        $categoria->setAcessorios($linha['acessorios']);
        $categoria->setRoupas($linha['roupas']);
        
        return $categoria;
    }
}
