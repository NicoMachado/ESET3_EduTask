<?php
class Profesor
{
    // //public function __construct()
    // {
    // }
    private $id;
    private $apeynom;
    private $activo;

    public function setId(string $id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setApeynom(string $apeynom)
    {
        $this->apeynom = $apeynom;
    }
    public function getApeynom()
    {
        return $this->apeynom;
    }

    public function setActivo(string $activo)
    {
        $this->activo = $activo;
    }
    public function getActivo()
    {
        return $this->activo;
    }
}
?>