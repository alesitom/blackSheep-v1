<?php 
class databaseDB{    
    private $host="localhost";
    private $user="u546248284_alesitomutnphp";
    private $pass="RkYjJhNnM9MwNqZuaw86cjKW8i6dXFX4";
    private $database="u546248284_utnphp";
    public $connection;
    public function __construct(){
        $this->connection = new mysqli($this->host, $this->user, $this->pass,$this->database)
        or die(mysqli_connect_error());
        $this->connection->set_charset("utf8");
    }

public function insert($table, $data){
    $result = $this->connection->query("INSERT INTO $table VALUES ($data)") or die($this->connection->error);
    if($result)
        return true;
        return false;
}




    //BUSCAR LOG IN
public function search($table, $condition){
    $result = $this->connection->query("SELECT * FROM $table WHERE $condition") or die($this->connection->error);
    if($result)
        return $result->fetch_all(MYSQLI_ASSOC);
    return false;
    } 
}