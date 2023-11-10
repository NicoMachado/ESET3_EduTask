<?php
    class user extends Controllers
    {
        private $name;
        private $mysql;
        public function __construct()
        {
            $this->name = 'userController';
            $this->mysql = new MySQL_connect();
        }
        public function getName()
        {
            return $this-> $name;
        }
        public function index()
        {
            $model = $this->mysql->selectAllData('usuario');
            if (isset($model['error']))
            {
                $user = new User();
                $user = $model['id'];
                $user = $model['ApeyNom'];
                $user = $model['Contrasenia'];
                $user = $model['Fecha_ul_access'];
                $user = $model['Imagen_perfil'];
            }
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
                $model = $this->mysql->selectData('Tema', 6);

                $model['http-method'] = $http_method;

                $this->responseJSON($model);
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
?>