<?php

require "conexion.php"; 

class devuelve_productos extends conexion{

    public function dev_prod(){
       

        parent::__construct();
    }
    
    public function get_productos(){
        
        $resultado=$this->conexion_db->query("SELECT * FROM productos");
        $productos=$resultados->fetch_all(MYSQLI_ASSOC);
        return $productos;
    } 
      
        
    }
    

