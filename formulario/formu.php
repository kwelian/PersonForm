<?php

class Persona{
    public $nombres = '';
    public $apellidos ='';
    public $fecha_nacimiento='';
    public $documento = '';
    public $tipo_documento = '';
    public $telefono = '';
    public $direccion = '';
    public $ciudad = '';
    public $email = '';


    public function __construct($nombres, $apellidos, $fecha_nacimiento, $documento, $tipo_documento,
                                $telefono, $direccion, $ciudad, $email) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->fecha_nacimiento = $fecha_nacimiento;
        $this->documento= $documento;
        $this->tipo_documento = $tipo_documento;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->ciudad = $ciudad;
        $this->email = $email;
    }
    
    public function getDataUsers(){
        // return $this->nombres. ' ' .$this->apellidos;
        $array = array($this->nombres, $this->apellidos,$this->fecha_nacimiento,$this->documento,$this->tipo_documento,
        $this->telefono,$this->direccion,$this->ciudad,$this->email);
        $longitud = count($array);
        for($i =0; $i <$longitud; $i++){
            echo $array[$i];
            echo "<br>";
        }
    }
}

