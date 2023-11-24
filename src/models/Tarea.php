<?php
class Tarea
{
    // //public function __construct()
    // {
    // }
    private $id;
    private $titulo;
    private $detalle;
    private $fechaEntrega;
    private $tema_id;
    private $profesor_id;
    private $fechaUltimoCambio;
    private $usuario_id;

    public function setId(string $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setDetalle(string $detalle)
    {
        $this->detalle = $detalle;
    }
    public function getDetalle()
    {
        return $this->detalle;
    }

    public function setFechaEntrega(string $fechaEntrega)
    {
        $this->fechaEntrega = $fechaEntrega;
    }
    public function getFechaEntrega()
    {
        return $this->fechaEntrega;
    }

    public function setTema_id(string $tema_id)
    {
        $this->tema_id = $tema_id;
    }
    public function getTema_id()
    {
        return $this->tema_id;
    }

    public function setProfesor_id(string $profesor_id)
    {
        $this->profesor_id = $profesor_id;
    }
    public function getProfesor_id()
    {
        return $this->profesor_id;
    }

    public function setFechaUltimoCambio(string $fechaUltimoCambio)
    {
        $this->fechaUltimoCambio = $fechaUltimoCambio;
    }
    public function getFechaUltimoCambio()
    {
        return $this->fechaUltimoCambio;
    }

    public function setUsuario_id(string $usuario_id)
    {
        $this->usuario_id = $usuario_id;
    }
    public function getUsuario_id()
    {
        return $this->usuario_id;
    }
}
?>