<?php
namespace App;

class Router {
    public function run() {
        $url = isset($_GET['url']) ? explode('/', rtrim($_GET['url'], '/')) : ['inicio'];
        $nombreControlador = "App\\Controladores\\" . ucfirst($url[0]) . "Controlador";
        $metodo = $url[1] ?? 'index';

        if (class_exists($nombreControlador)) {
            $controlador = new $nombreControlador();
            if (method_exists($controlador, $metodo)) {
                $controlador->$metodo();
            } else {
                echo "Error: Método no encontrado.";
            }
        } else {
            echo "Error: Controlador no existe.";
        }
    }
}