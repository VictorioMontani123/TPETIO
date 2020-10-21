<?php

class ClientesModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=clientes;charset=utf8', 'root', '');
    }
     // traemos todos los clientes de sde la bbdd    
     function GetAll(){
          $sentencia = $this->db->prepare("SELECT * FROM clientes order by nombre");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }
    
      // insertamos un nuevo  cliente en la bbdd
      function Insert($id,$nombre,$apellido,$direccion,$email,$telefono,$cuit){
      
          $sentencia = $this->db->prepare("INSERT INTO clientes(id, nombre, apellido, direccion, email, telefono, cuit) VALUES(?,?,?,?,?,?,?)");
          $sentencia->execute([$id,$nombre,$apellido,$direccion,$email,$telefono,$cuit]);
      return;

      }

   // trae los datos de un cliente   
      function get($id){
        $sentencia = $this->db->prepare("SELECT * FROM clientes WHERE id=?");
        $sentencia->execute([$id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);

    }
     
    // borra un cliente

      function Delete($prop_id){
          $sentencia = $this->db->prepare("DELETE FROM clientes WHERE id=?");
          $sentencia->execute(array($id));
      }
    

      // actualiza los datos de un cliente dado su id
      
    function update($id,$nombre,$apellido,$direccion,$email,$telefono,$cuit){
          $sentencia = $this->db->prepare("UPDATE clientes SET tipo=?, nombre=?, direccion=?,  valor=?, descripcion=?, fecha=?  WHERE id=? ");
          $sentencia->execute([$ombre,$apellido,$direccion,$email,$telefono,$cuit,$id]);
      return;
    }
     
      
}
