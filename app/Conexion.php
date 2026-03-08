<?php
namespace App;

use PDO;
use PDOException;

class Conexion {
    private static $instancias = [];

    private function __construct() {}

    public static function obtenerInstancia($tipo = 'negocio') {
        if (!isset(self::$instancias[$tipo])) {
            try {
                $prefijo = strtoupper($tipo); // "NEGOCIO" o "SEGURIDAD"
                
                $host = $_ENV["DB_{$prefijo}_HOST"];
                $db   = $_ENV["DB_{$prefijo}_NAME"];
                $user = $_ENV["DB_{$prefijo}_USER"];
                $pass = $_ENV["DB_{$prefijo}_PASS"];

                self::$instancias[$tipo] = new PDO(
                    "mysql:host=$host;dbname=$db;charset=utf8",
                    $user,
                    $pass
                );
                self::$instancias[$tipo]->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error conectando a la base de datos de $tipo: " . $e->getMessage());
            }
        }
        return self::$instancias[$tipo];
    }
}