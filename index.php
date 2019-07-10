<?php require_once 'models/Conexionssl.php';


$sql= new Conexionssl('35.195.97.252','fjimenezjob','Francisco1231998','nombresClase');
$sql->leerTabla();
?>
<!-- QUERIA METER EL ARRAY EN LA BASE DE DATOS PERO NO ME HA DADO TIEMPO, QUERIA QUE LEYERA LA TABLA DE NOMBRES!!!! 

la tabla (nombres) tiene id_nombre que es el auto increment y nombre que es donde queria guardar los nombres :( -->

$nombres = [

'toni',
'jorge',
 'julia', 
'jose', 
'mateo', 
'jaume',
 'petro',
'alejandro', 
 'fran',
  'adrian', 
 'lolo', 
 'cristian',
 'jordi',
  'david',
  'luis',
  'alex'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Randomize</title>

</head>
<body>

    <?php

        while (!empty($nombres)) {

            $primerRand = rand(1, count($nombres)) - 1;

            $primerNombre = $nombres[ $primerRand ];

            unset($nombres[$primerRand]);

            $nombres = array_values($nombres);
            
            $segundoRand = rand(1, count($nombres)) - 1;

            $segundoNombre = $nombres[$segundoRand];

            unset($nombres[$segundoRand]);

            $nombres = array_values($nombres);

            echo($primerNombre . ' ------ ' . $segundoNombre . '<br>');
        }
    ?>

</body>
</html>