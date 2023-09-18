<?php

class Persona
{
    private $Email;
    private $Passw;
    public $Nombre;
    public $Apellido;
    public $Direccion;
    public $Ciudad;
    public $Sexo;
    public $FechaNacimiento;
    public $Provincia;
    public $Pais;
    public $Otros_Datos;

    // function __construct($post)
    // {
    //     $this->Email = $this->validar($post, 'email') ? $this->Email : null;
    // }


    //GETERS y SETERS
    public function setEmail(string $email)
    {
        $this->Email = $email;
    }
    public function getEmail()
    {
        return $this->Email;
    }

    private function validar($post, $key)
    {
        if (isset($post[$key])) {
            if ($key == 'email') {
                $str = trim($post[$key]);
                $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";
                if (preg_match($pattern, $str)) {
                    $this->Email = $str;
                    return true;
                }
            }
        }
        return false;
    }
    public function toArray()
    {
        return get_object_vars($this);
    }
    public function getEdad()
    {
        $fechaActual = new DateTime();
        $fechaNacimiento = new DateTime($this->FechaNacimiento);

        $edad = $fechaActual->diff($fechaNacimiento)->y;

        return $edad;
    }
}

// manejo de tiempo y fechas en php

// Crear una instancia de DateTime con la fecha actual
// $fechaActual = new DateTime();

// // Mostrar la fecha y hora actual
// echo $fechaActual->format('Y-m-d H:i:s');

// // Agregar un intervalo de tiempo (por ejemplo, 1 día)
// $intervalo = new DateInterval('P1D');
// $fechaActual->add($intervalo);

// // Mostrar la fecha y hora después de agregar el intervalo
// echo $fechaActual->format('Y-m-d H:i:s');

// // Crear una fecha específica
// $fechaEspecifica = new DateTime('2023-08-21');

// // Mostrar la fecha específica formateada
// echo $fechaEspecifica->format('Y-m-d');
