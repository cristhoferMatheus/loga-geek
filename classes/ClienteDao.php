<?php

class ClienteDao extends Db implements InterfaceDao {

    private $table = 'cliente';

    public function insert($cliente) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (nome, Snome, email, cpf, cidade, estado, login, senha) VALUES (:nome, :Snome, :email, :cpf, :cidade, :estado, :login, :senha)");

        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':Snome', $cliente->getSnome());
        $stmt->bindValue(':email', $cliente->getEmail());
        $stmt->bindValue(':cpf', $cliente->getCpf());
        $stmt->bindValue(':cidade', $cliente->getCidade());
        $stmt->bindValue(':estado', $cliente->getEstado());
        $stmt->bindValue(':login', $cliente->getLogin());
        $stmt->bindValue(':senha', $cliente->getSenha());

        $a = $stmt->execute();
		return $a;
		
    }
    
    public function update($cliente) {
        $stmt = $this->conexao->prepare("UPDATE cliente "
                . "SET nome=:nome, Snome = :Snome, email = :email, cpf = :cpf, cidade = :cidade, estado = :estado, login = :login, senha= :senha WHERE id = :id;");

        $stmt->bindValue(':id', $cliente->getId());
        $stmt->bindValue(':nome', $cliente->getNome());
        $stmt->bindValue(':Snome', $cliente->getSnome());
        $stmt->bindValue(':email', $cliente->getEmail());
        $stmt->bindValue(':cpf', $cliente->getCpf());
        $stmt->bindValue(':cidade', $cliente->getCidade());
        $stmt->bindValue(':estado', $cliente->getEstado());        
        $stmt->bindValue(':login', $cliente->getLogin());
        $stmt->bindValue(':senha', $cliente->getSenha());

        return $stmt->execute();
    }    

    public function delete($cliente) {
        $stmt = $this->conexao->prepare("DELETE FROM cliente "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $cliente->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM cliente");
        $stmt->execute();

        $clientes = array();

        while ($linha = $stmt->fetch()) {

            $cliente = new Cliente();
			$cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setSnome($linha['Snome']);
            $cliente->setEmail($linha['email']);
            $cliente->setCpf($linha['cpf']);
            $cliente->setCidade($linha['cidade']);
            $cliente->setEstado($linha['estado']);
            $cliente->setLogin($linha['login']);
            $cliente->setSenha($linha['senha']);

            $clientes[] = $cliente;
        }
        return $clientes;
    }

    public function selectById($cliente) {
        $stmt = $this->conexao->prepare("SELECT * FROM cliente WHERE id = :id");
        
        $stmt->bindValue(':id', $cliente->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $cliente = new Cliente();
		$cliente->setId($linha['id']);
        $cliente->setNome($linha['nome']);
        $cliente->setSnome($linha['Snome']);
        $cliente->setEmail($linha['email']);
        $cliente->setCpf($linha['cpf']);
        $cliente->setCidade($linha['cidade']);
        $cliente->setEstado($linha['estado']);
        $cliente->setLogin($linha['login']);
        $cliente->setSenha($linha['senha']);
        
        return $cliente;
    }
}
