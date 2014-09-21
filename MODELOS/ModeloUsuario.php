<?php

    class ModeloUsuario{
        //datos privados
        private $nombre, $direccion, $codigo, $correo;
        
        function __construct(){ }
        
        public function crear( $nombre, $direccion, $codigo, $correo ){
            
            $this->nombre = $nombre;
            $this->direccion = $direccion;
            $this->codigo = $codigo;
            $this->correo = &correo;
            
            return true;
        }
    
    }

?>
