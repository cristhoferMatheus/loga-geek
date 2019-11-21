<?php

class ProdutoDao extends Db implements InterfaceDao {

    private $table = 'produtos';

    public function insert($produto) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (nome, categoria, descricao, unidades, img, preco) VALUES (:nome, :categoria, :descricao, :unidades, :img, :preco)");

        $stmt->bindValue(':nome', $produto->getNome());
        $stmt->bindValue(':categoria', $produto->getCategoria());
        $stmt->bindValue(':descricao', $produto->getDescricao());
        $stmt->bindValue(':unidades', $produto->getUnidades());
        $stmt->bindValue(':img', $produto->getImg());
        $stmt->bindValue(':preco', $produto->getPreco());

        $a = $stmt->execute();
		return $a;
		
    }
    
    public function update($produto) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET nome=:nome, categoria = :categoria, descricao = :descricao, unidades = :unidades, img = :img, preco = :preco WHERE id = :id;");

        $stmt->bindValue(':id', $produto->getId());
        $stmt->bindValue(':nome', $produto->getNome());
        $stmt->bindValue(':categoria', $produto->getCategoria());
        $stmt->bindValue(':descricao', $produto->getDescricao());
        $stmt->bindValue(':unidades', $produto->getUnidades());
        $stmt->bindValue(':img', $produto->getImg());
        $stmt->bindValue(':preco', $produto->getPreco());

        return $stmt->execute();
    }    

    public function delete($produto) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $produto->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $produtos = array();

        while ($linha = $stmt->fetch()) {

            $produto = new Produto();
			$produto->setId($linha['id']);
            $produto->setNome($linha['nome']);
            $produto->setCategoria($linha['categoria']);
            $produto->setDescricao($linha['descricao']);
            $produto->setUnidades($linha['unidades']);
            $produto->setImg($linha['img']);
            $produto->setPreco($linha['preco']);

            $produtos[] = $produto;
        }
        return $produtos;
    }

    public function selectById($produto) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $produto->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $produto = new Produto();
		$produto->setId($linha['id']);
        $produto->setNome($linha['nome']);
        $produto->setCategoria($linha['categoria']);
        $produto->setDescricao($linha['descricao']);
        $produto->setUnidades($linha['unidades']);
        $produto->setImg($linha['img']);
        $produto->setPreco($linha['preco']);
        
        return $produto;
    }
}
