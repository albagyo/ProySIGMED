<?php

class LoginModel
{
    private $db;
    
    public function __construct()
    {
        $this->db = Conexion::conectar();
        
    }

     //iniciar sesion
    public function existeUsuario($correo,$contrasenna){
        $sql = "SELECT * FROM usuario WHERE email = '$correo' AND contrasenna = '$contrasenna'";
        
        $query = $this->db->query($sql);
        $dato = [];
        $respuesta = "";
        $i=0;
            while($row = $query->fetch_assoc()){
                $dato[$i]=$row;
                $i++;
            }
        
        if($dato == []){
            return false;
        }else{
            return true;
        }
    }
            
    
    // obtener id del usuario logueado
    public function obtenerId($correo,$contrasenna){
        $sql = "SELECT * FROM usuario WHERE email = '$correo' AND contrasenna = '$contrasenna'";

        $query = $this->db->query($sql);
        $dato = [];
        $respuesta = "";
        $i=0;
            while($row = $query->fetch_assoc()){
                $dato[$i]=$row;
                $i++;
            }
        
        $respuesta = $dato[0]["id"];

        return $respuesta;
    }

    // obtener tipo de usuario logueado 
    public function obtenerTipo($id){
        $sql = "SELECT id_tipo FROM usuario WHERE id = '$id'";

        $query = $this->db->query($sql);
        $dato = [];
        $respuesta = "";
        $i=0;
            while($row = $query->fetch_assoc()){
                $dato[$i]=$row;
                $i++;
            }
        
        $respuesta = $dato[0]["id_tipo"];

        return $respuesta;
    }




}