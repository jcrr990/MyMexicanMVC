<?
    $opcion = $_GET['opcion'];
    $controlador = false;
    
    if( $opcion == 'usuario' )
    {
        require_once 'CONTROLADORES/ControladorUsuario.php';
        $controlador = new ControladorUsuario;
    }
    else
        if( $opcion == 'vehiculo' )
        {
            require_once 'CONTROLADORES/ControlVehiculo.php'
            $controlador = new ControladorVehiculo();
        }
        
    
    if( $controlador )
        $controlador->ejecutar();
        
?>
