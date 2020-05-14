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
   	 
    public function insert(string $name, int $age, float $weigth, float $height, string $plan){
        $query = "INSERT INTO usuario (nome, idade, peso, altura, plano) VALUES("."'" 
        .$name."'"."," 
        .(string)$age.","
        .(string)$weigth.","
        .(string)$height.","."'"
        .$plan."'".")";

        if ($this->openConnection())
        {
            $q = $this->db->exec($query);
            $this->CloseConnection();
        }
    }
    
    public function delete(string $name)
    {
        $query = "DELETE FROM usuario WHERE nome="."'".$name."'";
        if ($this->openConnection())
        {
            $q = $this->db->exec($query);
            $this->CloseConnection();
        }
    }

    public function select(string $name)
    {
        $query = "SELECT * FROM usuario WHERE nome='".$name."'";
        if ($this->openConnection())
        {
            foreach ($this->db->query($query) as $row) {
                return $row;
            }
            $this->CloseConnection();
        }
        return null;
    }

    /*
    public void Update()
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