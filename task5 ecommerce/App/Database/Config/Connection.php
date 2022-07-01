<?php
namespace App\Database\Config;

use mysqli;

class Connection {

    private $ServerName ='localhost';
    private $UserName = 'root';
    private $Password = '';
    private $DatabaseName = 'ecommerce';
    public $connection;

    public function __construct (){

        $this->connection= new mysqli($this->ServerName, $this->UserName, $this->Password,$this->DatabaseName);

        // if ($this->connection->connect_error) {
        //     die ("Connection Failed:" . $this->connection->connect_error);
        // }
        // die ("Connection Done.");
    }  public function __destruct (){
        $this->connection->close(); 
    }
    
}
// new Connection;


?>