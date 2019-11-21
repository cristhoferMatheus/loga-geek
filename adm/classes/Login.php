<?php
session_start();

class Login extends Db {
    static function checkAuth(){        
        if(!isset($_SESSION['login'])){
            header("Location:login.php");
        }
    }    
    
    function verificaLogin($cliente){        
           
        $stmt = $this->conexao->prepare("SELECT * FROM cliente "
                . "WHERE login = :login AND senha = :senha");
 
     
        $stmt->bindValue(':login', $cliente->getLogin());
		$stmt->bindValue(':senha', $cliente->getSenha());
        $stmt->execute();
    
        $linha = $stmt->fetch();
        
        if($linha){
            $cliente = new Cliente();
            $cliente->setLogin($linha['login']);
			$cliente->setSenha($linha['senha']);
            $cliente->setId($linha['id']);
            
            $_SESSION['login'] = $cliente;
            
            return $cliente;
        }else {
            return false;
        }

    }
}

