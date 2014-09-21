<?php
    class ControladorVehiculo{
        
        private $ModeloVehiculo;
        
        function __construct(){
            
            require_once 'MODELOS/ModeloVehiculo.php';
            $this->ModeloVehiculo = new ModeloVehiculo();
            
        }
        
        public function ejecutar(){
        
            $accion = $_GET['accion'];
            
            if( $accion == 'crear' )
                $this->crear( );
                
        }
        
        private function crear( ){
        
             $marca = $_POST['marca'];
             $modelo = $_POST['modelo'];
             $año = $_POST['año'];
             $precio = $_POST['Precio'];
             $descripcion = $_POST['descripcion'];
             
             $resultado = $this->ModeloVehiculo->crear( $marca, $modelo, $direccion, $año, $precio, $descripcion );
             
             if( $resultado )
                 require_once 'VISTA/VistaTemporal.php';
             else
                 require_once 'VISTA/VistaTemporal.php';
                 
        }
    
    }
?>
