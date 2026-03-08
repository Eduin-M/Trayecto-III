<?php
namespace App\Modelos;

use App\Conexion;

/**
 * Clase base para todos los modelos del sistema.
 * es asi por los principios solid
 */
abstract class Modelobase {
    
    /**
     * @var \PDO Instancia de la conexión a la base de datos
     */
    protected $db;

    /**
     * Constructor del modelo.
     * * @param string $tipoConexion Define si el modelo usará 'negocio' (por defecto) 
     * o 'seguridad' según el archivo .env
     */
    public function __construct($tipoConexion = 'negocio') {
        $this->db = Conexion::obtenerInstancia($tipoConexion);
    }
    
    /**
     * espacio para validaciones globales de los modelos
     */
}