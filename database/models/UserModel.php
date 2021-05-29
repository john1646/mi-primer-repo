<?php
class UserModel{

    public function __construct()
    {
        //creo el objeto de conexion
        $dbConnection = new DbConnection();
        //obtengo la conexion
        $this->db = $dbConnection->connect();
     
    }

    public function insert(){

    }
    public function getUser(){

    }
    public function getUsers(){

    }
}