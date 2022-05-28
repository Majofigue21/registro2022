<?php
include_once "models/db.class.php";
class Notas extends BaseDeDatos {

    //Crear el metodo constructor
    public function __construct() {
        parent::conectar();
    }

    public function getAll() {
        return $this->executeQuery("Select Idalu, Nombre, Laboratorio1, Laboratorio2, Parcial from alumnos_MariaJose");
    }

    public function save($data){
        return $this->executeInsert("insert into alumnos_MariaJose set nombre='{$data["na1"]}',
        Laboratorio1='{$data["n1"]}', Laboratorio2='{$data["n2"]}', Parcial='{$data["n3"]}'");
    }
}