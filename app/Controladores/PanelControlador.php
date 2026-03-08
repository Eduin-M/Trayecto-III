<?php
namespace App\Controladores;

use App\Sesion;

class PanelControlador extends ControladorBase {
    public function index() {
        $sesion = new Sesion();
        $nombre = $sesion->get('usuario_nombre');

        if (!$nombre) {
            header('Location: /trayectoiii/auth');
            exit;
        }

        echo "<h1>¡Éxito! Bienvenido al Panel, $nombre</h1>";
        echo "<a href='/trayectoiii/auth/salir'>Cerrar Sesión</a>";
    }
}