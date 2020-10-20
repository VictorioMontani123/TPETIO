<?php

class ClientesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=clientes;charset=utf8', 'root', '');
    }
         
     function GetAll(){
          $sentencia = $this->db->prepare("SELECT * FROM clientes order by nombre");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }
   

    
      function Insert($id,$nombre,$apellido,$direccion,$email,$telefono,$cuit){
      
          $sentencia = $this->db->prepare("INSERT INTO clientes(tipo, nombre, direccion, descripcion, valor, fecha) VALUES(?,?,?,?,?,?)");
          $sentencia->execute([$id,$nombre,$apellido,$direccion,$email,$telefono,$cuit]);
      return;

      }
     
      
}

?>