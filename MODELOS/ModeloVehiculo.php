<?php

    class ModeloVehiculo{
        private $marca, $modelo, $año, $precio, $descripcion;
        
        function __contruct(){ }
        
        public function crear( $marca, $modelo, $año, $precio, $descripcion ){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->año = $año;
            $this->precio = $precio;
            
            return true;
        }
    
    }

?>
