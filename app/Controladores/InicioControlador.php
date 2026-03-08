<?php
namespace App\Controladores;

class InicioControlador extends ControladorBase {
    public function index() {
        $this->ver('inicio', ['titulo' => 'Hola Mundo MVC']);
    }
}