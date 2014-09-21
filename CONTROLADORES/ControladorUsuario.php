<?php
    
    class ControladorUsuario{
     
         private $ModeloUsuario;
         
         function __construct( ){
             
             require_once 'MODELOS/ModeloUsuario.php';
             $this->ModeloUsuario = new ModeloUsuario();
             
         }
         
         public function ejecutar( ){
             
             $accion = $_GET['accion'];
             
             if( $accion == 'crear' )
                 $this->crear();
         }
         
         private function crear(){
         
             $nombre = $_POST['nombre'];
             $direccion = $_POST['direccion'];
             $codigo = $_POST['codigo'];
             $correo = $_POST['correo'];
             
             $resultado = $this->ModeloUsuario->crear( $nombre, $direccion, $codigo, $correo );
             
             if( $resultado ) //objeto creado exitosamente -> mostar vista
                require_once 'VISTAS/VistaTemporal.php';
             else
                 require_once 'VISTAS/VistaTemporal.php';
             
             
         }
         
    }
?>
