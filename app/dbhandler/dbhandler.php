<?php
class dbhandler{
    
    private $servername = "localhost";
    private $username = "azhar";
    private $password = "Azhard_229";
    private $dbname = "daritutor";
    public $connection;

    public function getConnection() {
        try{
            $this->connection = null;
            $this->connection = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
        }
        
    }

}
?>