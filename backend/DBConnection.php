<?php

namespace DBConnection;
use PDO;
	
class Connection{

	private $DNS;
    private $server;
    private $database;
    private $uid;
    private $password;
    private $db;

    function __construct(){
    	$this->initialize();
    }

    private function initialize(){
        $this->server = "localhost";
        $this->database = "academia";
        $this->uid = "root";
        $this->password = "";
        $this->DNS = "mysql:host=".$this->server.";"."dbname=".$this->database;
	}
	

    private function openConnection(){
        try{
            $this->db = new PDO($this->DNS,$this->uid,$this->password);
            return True;
        }catch (PDOException $ex){
			print "Não foi possível se conectar a base de dados: " . $ex->getMessage();
			return False;
        }
    }

    
    private function closeConnection(){
        try
        {
            $this->db = null;
            return true;
        }
        catch (Exception $ex)
        {
            print "Não foi possível fechar a base de dados: " . $ex->getMessage();
            return false;
        }
    }
   	 
    public function insert(string $nome, int $idade){
        $query = "INSERT INTO usuario (nome, idade) VALUES("."'" 
        .$nome."'"."," 
        .(string)$idade.")";

        if ($this->openConnection())
        {
            $q = $this->db->exec($query);
            $this->CloseConnection();
        }
    }
    
    /*
    public void Update()
    {
    }

    public void Delete()
    {
    }

    public List <string> [] Select()
    {
    }

    public int Count()
    {
    }

    public void Backup()
    {
    }

    public void Restore()
    {
    }
    */
}
?>