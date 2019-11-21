<?php

class UsuarioDao extends Db implements InterfaceDao {

    private $table = 'usuarios';

    public function insert($usuario) {
        $stmt = $this->conexao->prepare("INSERT INTO usuarios (nome, email, telefone, endereco, login, senha) VALUES (:nome, :email,  :telefone, :endereco,:login, :senha)");

        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':telefone', $usuario->getTelefone());
        $stmt->bindValue(':endereco', $usuario->getEndereco());
        $stmt->bindValue(':login', $usuario->getLogin());
        $stmt->bindValue(':senha', $usuario->getSenha());

        return $stmt->execute();
    }
    
    public function update($usuario) {
        $stmt = $this->conexao->prepare("UPDATE usuarios "
                . "SET nome=:nome, senha = :senha, email = :email, telefone = :telefone, endereco = :endereco, login = :login WHERE id = :id;");

        $stmt->bindValue(':id', $usuario->getId());
        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':login', $usuario->getLogin());
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':telefone', $usuario->getTelefone());
        $stmt->bindValue(':endereco', $usuario->getEndereco());

        return $stmt->execute();
    }    

    public function delete($usuario) {
        $stmt = $this->conexao->prepare("DELETE FROM usuarios "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $usuario->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios");
        $stmt->execute();

        $usuarios = array();

        while ($linha = $stmt->fetch()) {

            $usuario = new Usuario();
			$usuario->setId($linha['id']);
            $usuario->setNome($linha['nome']);
            $usuario->setLogin($linha['login']);
            $usuario->setSenha($linha['senha']);
            $usuario->setEmail($linha['email']);
            $usuario->setTelefone($linha['telefone']);
            $usuario->setEndereco($linha['endereco']);

            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

    public function selectById($usuario) {
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios WHERE id = :id");
        
        $stmt->bindValue(':id', $usuario->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $usuario = new Usuario();
		$usuario->setId($linha['id']);
        $usuario->setNome($linha['nome']);
        $usuario->setEmail($linha['email']);
        $usuario->setTelefone($linha['telefone']);
        $usuario->setTelefone($linha['endereco']);
        $usuario->setLogin($linha['login']);
        $usuario->setSenha($linha['senha']);
        
        return $usuario;
    }
}
