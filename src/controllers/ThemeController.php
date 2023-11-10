<?php
    class theme extends Controllers
    {
        private $name;
        private $mysql;
        public function __construct()
        {
            $this-> $namw = 'TemeControllers';
            $this-> mysql = new MYSQL_connect();
        }
        public function getName(){
            return $this-> $name;
        }
        public function index()
        {        
            $model = $this->mysql->selectAllData('tema');
            if (!isset($model['error']))
            {
                $tema = new Tema();
                $tema->id = $model['id'];
                $tema->descripcion =$model['descripcion'];
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