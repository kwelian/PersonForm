<?php

include_once './formu.php';

$nombres = 'Elian Camilo';
$apellidos ='España Pinillo';
$fecha_nacimiento='24/03/2002';
$documento = '1004574792';
$tipo_documento = 'CC';
$telefono = '3213106438';
$direccion = 'Calla 55 Sur No.104-49';
$ciudad = 'Bogota';
$email = 'espanaKmilo@gmail.com';

$userBasics = new Persona($nombres,$apellidos,$fecha_nacimiento,$documento, $tipo_documento,$telefono,$direccion,$ciudad,$email);

echo $userBasics ->getDataUsers();