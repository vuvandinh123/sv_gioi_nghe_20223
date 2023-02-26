<?php

class Database 
{
    private $host="localhost";
    private $dbname='hs_gioi';
    private $username='root';
    private $password='06012003';
    private $conn;
    public function __construct()
    {
        $this->conn=new mysqli($this->host,$this->username,$this->password,$this->dbname);
        if($this->conn->connect_error){
           die("kết nối không thành công! ").$this->conn->connect_error."\n";
        }
    }
    public function query($sql){
        return $this->conn->query($sql);
    }
    public function close(){
        $this->conn->close();
    }
}

?>
