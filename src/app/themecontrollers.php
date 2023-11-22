<?php

    class Tema extends Controllers
    {
        private $name;
        private $mysql;

        public function __construct()
        {
            $this->$name = 'themeController';
            $this->$mysql = new MySQL_connect();
        }

        public function getName()
        {
            return $this->$name;
        }
        public function index(){
            $model= $this->mysql->selectAllData('Tema');
            if (!isset($model['error']))
            {
                foreach ($datos as )
            }
        }
    }
?>