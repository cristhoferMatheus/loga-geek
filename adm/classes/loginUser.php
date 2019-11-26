<?php
session_start();

class LoginUser extends Db {
    static function checkAuth(){        
        if(!isset($_SESSION['login'])){
            header("Location:login.php");
        }
    }    
    
    function verificaLoginUser($usuario){        
           
        $stmt = $this->conexao->prepare("SELECT * FROM usuarios "
                . "WHERE login = :login AND senha = :senha");
 
     
        $stmt->bindValue(':login', $usuario->getLogin());
		$stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->execute();
    
        $linha = $stmt->fetch();
        
        if($linha){
            $usuario = new Usuario();
            $usuario->setLogin($linha['login']);
			$usuario->setSenha($linha['senha']);
            $usuario->setId($linha['id']);
            
            $_SESSION['login'] = $usuario;
            
            return $usuario;
        }else {
            return false;
        }

    }
}

