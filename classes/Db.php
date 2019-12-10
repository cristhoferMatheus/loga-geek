<?php
class Db {
    private $user = "root";
    private $pwd = "";
    private $host = "localhost";
    private $db = "mvc";
    
    protected $conexao;
	 
	function __construct(){ 
	
	try{
		$this->conexao = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->pwd);
	}
	catch(PDOException $e){
		echo "Algo deu erro";
	}
	}
}
