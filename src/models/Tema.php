<?php
class Tema
{
    // //public function __construct()
    // {
    // }
    private $id;
    private $descripcion;

    public function setId(string $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
?>