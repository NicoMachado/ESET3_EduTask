<?php
// ControladorGenerico.php

class Generic extends Controllers {
    protected $conexion;
    protected $tabla;

    public function __construct($conexion, $tabla) {
        $this->conexion = $conexion;
        $this->tabla = $tabla;
    }

    public function listarRegistros() {
        $query = "SELECT * FROM {$this->tabla}";
        $resultado = mysqli_query($this->conexion, $query);
        $registros = [];

        while ($fila = mysqli_fetch_assoc($resultado)) {
            $registros[] = $fila;
        }

        return $registros;
    }

    public function obtenerRegistroPorId($id) {
        $id = mysqli_real_escape_string($this->conexion, $id);
        $query = "SELECT * FROM {$this->tabla} WHERE id = '$id'";
        $resultado = mysqli_query($this->conexion, $query);
        return mysqli_fetch_assoc($resultado);
    }

    public function crearRegistro($datos) {
        // $datos es un array asociativo con los datos a insertar
        $columnas = implode(", ", array_keys($datos));
        $valores = "'" . implode("', '", array_values($datos)) . "'";
        $query = "INSERT INTO {$this->tabla} ($columnas) VALUES ($valores)";
        return mysqli_query($this->conexion, $query);
    }

    public function actualizarRegistro($id, $datos) {
        // $datos es un array asociativo con los datos a actualizar
        $sets = [];
        foreach ($datos as $campo => $valor) {
            $sets[] = "$campo = '$valor'";
        }
        $sets = implode(", ", $sets);
        $query = "UPDATE {$this->tabla} SET $sets WHERE id = '$id'";
        return mysqli_query($this->conexion, $query);
    }

    public function eliminarRegistro($id) {
        $id = mysqli_real_escape_string($this->conexion, $id);
        $query = "DELETE FROM {$this->tabla} WHERE id = '$id'";
        return mysqli_query($this->conexion, $query);
    }
}
