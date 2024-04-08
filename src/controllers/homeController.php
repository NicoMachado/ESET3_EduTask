<?php

/**
 *
 */
class Home extends Controllers
{

    private $name;
    private $mysql;

    public function __construct()
    {
        $this->name = 'homeController';
        $this->mysql = new MySQL_connect();
    }

    public function getName()
    {
        return $this->name;
    }

    public function index()
    {
        // $model = $this->mysql->selectData('Persona', 6);
        //$model = $this->mysql->selectAllData('Tema');

        // if (!isset($model['error'])) {
        //     $persona = new Persona();
        //     $persona->Nombre = $model['Nombre'];
        //     $persona->Apellido = $model['Apellido'];
        //     $persona->Direccion = $model['Direccion'];
        //     $persona->Ciudad = $model['Ciudad'];
        //     $persona->Pais = $model['Pais'];
        //     $persona->setEmail($model['Email']);
        //     $persona->FechaNacimiento = $model['FechaNacimiento'];

        require_once(VIEWS_PATH . "homeView.php");
    }

    public function api()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Allow: GET, POST, OPTIONS, PUT, DELETE");
        header('Content-Type: application/json');

        $http_method = $_SERVER['REQUEST_METHOD'];

        switch ($http_method) {
            case "GET":
                
                $model = $this->mysql->selectAllData('Tema');
                $response['data'] = $model;
                $response['http-method'] = $http_method;

                //$model['http-method'] = $http_method;

                $this->responseJSON($response);
                break;
            case "POST":
        }
    }

    public function responseJSON(array $response)
    {
        if (isset($response['error'])) {
            http_response_code(404);
        } else {
            http_response_code(200);
        }
        echo json_encode($response);
    }
}
