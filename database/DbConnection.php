<?php
class DbConnection{

   private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $Db = "cesde";

    public function connect(){
        $dbconection = new mysqli($this->host, $this->username, $this->password, $this->Db);
        return $dbconection;
    }
}
