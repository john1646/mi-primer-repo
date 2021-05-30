<?php
include '/opt/lampp/htdocs/cesde/database/DbConnection.php';
class PropiedadesModel{

    private $db = NULL;
    public function __construct()
    {
        //creo el objeto de conexion
        $dbConnection = new DbConnection();
        //obtengo la conexion
        $this->db = $dbConnection->connect();
        
       
    }
    public function insert($fullname, $email, $direccion, $tel, $images)
    {
        
        if ($this->db->connect_errno) {
            echo "Fallo la conexion a Base de datos";
            exit();
        } 
        else {
            
            $sql = "INSERT INTO propiedades (fullname, email, direccion, tel, images) VALUES ('{$fullname}','{$email}','{$direccion}','{$tel}','{$images}')";
            if ($this->db->query($sql) === true) {
                echo "- Propiedad creada con exito";
            } else {
                echo "Error al crear la Propiedad: ";
                echo "<pre>";
                print_r($this->db);
                echo "</pre>";
            }
            
            $this->db->close();
           
        }
    }
    public function getPropiedades(){
        if ($this->db->connect_errno) {
            echo "Fallo la conexion a Base de datos";
            exit();
        } 
        else {
            
            $sql = "SELECT * FROM propiedades";
            $propiedades = $this->db->query($sql);
            $this->db->close();
            return $propiedades;
        }   
    }

    public function getPropiedad($code){
        $sql = "SELECT * FROM propiedades WHERE code={$code}";
        $propiedades = $this->db->query($sql)->fetch_assoc();
        return $propiedades;

    }

    public function updatePropiedades($code,$fullname,$email,$direccion,$tel,$images){
        $sql = "UPDATE propiedades SET fullname='{$fullname}', email='{$email}', direccion='{$direccion}', tel='{$tel}', images='{$images}' WHERE code='{$code}'";
        $this->db->query($sql);
        $this->db->close();
    }

    public function deletePropiedades($code,$fullname,$email,$direccion,$tel,$images){

    }
}