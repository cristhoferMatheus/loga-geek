<?php

class CarrinhoDao extends Db implements InterfaceDao2 {

    private $table = 'carrinho';

    public function insert($carrinho) {
        $stmt = $this->conexao->prepare("INSERT INTO carrinho (idCliente, idProduto, preco, nome, img, status) VALUES (:idCliente, :idProduto, :preco, :nome, :img, :status)");

        $stmt->bindValue(':idCliente', $carrinho->getIdCliente());
        $stmt->bindValue(':idProduto', $carrinho->getIdProduto());
        $stmt->bindValue(':preco', $carrinho->getPreco());
        $stmt->bindValue(':nome', $carrinho->getNome());
        $stmt->bindValue(':img', $carrinho->getImg());
        $stmt->bindValue(':status', $carrinho->getStatus());
       

        $a = $stmt->execute();
		return $a;	
	}
	
	 public function update($carrinho) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET idCliente=:idCliente, idProduto = :idProduto, preco = :preco, nome = :nome, img=:img, status = :status WHERE id = :id;");

        $stmt->bindValue(':id', $carrinho->getId());
        $stmt->bindValue(':idCliente', $carrinho->getIdCliente());
        $stmt->bindValue(':idProduto', $carrinho->getIdProduto());
		$stmt->bindValue(':preco', $carrinho->getPreco());
		$stmt->bindValue(':nome', $carrinho->getNome());
		$stmt->bindValue(':img', $carrinho->getImg());
        $stmt->bindValue(':status', $carrinho->getStatus());
      

        return $stmt->execute();
    }    

    public function delete($carrinho) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $carrinho->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $carrinhos = array();

        while ($linha = $stmt->fetch()) {

            $carrinho = new Carrinho();
			$carrinho->setId($linha['id']);
            $carrinho->setIdCliente($linha['idCliente']);
            $carrinho->setIdProduto($linha['idProduto']);
			$carrinho->setPreco($linha['preco']);
			$carrinho->setNome($linha['nome']);
			$carrinho->setImg($linha['img']);
            $carrinho->setStatus($linha['status']);
          

            $carrinhos[] = $carrinho;
        }
        return $carrinhos;
    }

    
}
