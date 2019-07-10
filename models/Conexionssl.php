<?php 
class Conexionssl{

    public $conexion;

        public function __construct($servidor,$usuario,$password,$bd){

            $this->conexion = \mysqli_init();


            $this->conexion -> real_connect($servidor,$usuario,$password,
            $bd, 3306, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

            
        }

// METODO INSERTAR TITULO
public function leerTabla(){

    $query = 'SELECT * FROM nombre';

    $leer = $this->conexion->query($nombre);

    foreach ($leer as $valor){
  
            echo($valor['nombre']);
            
            echo('<hr>');
                   
    }


}


// FIn de la clase
}
?>