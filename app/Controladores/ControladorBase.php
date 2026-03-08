<?php
namespace App\Controladores; 

class ControladorBase {
    protected function ver($nombreVista, $datos = []) {
        extract($datos);
        require_once "../app/Vistas/$nombreVista.php";
    }
}