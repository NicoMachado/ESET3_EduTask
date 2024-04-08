<?php

//var_dump(dirname(__DIR__));
define('HOME_URL', "http://localhost/tecno-task/");
define("LOAD_PATH", "src/core/");
define("SYS_PATH", "src/core/lib/");
define("MODELS_PATH", "src/models/");
define("VIEWS_PATH", "src/views/");
define("CONTROLLERS_PATH", "src/controllers/");
define("HELPERS_PATH", "src/helpers/");
define("ASSETS_PATH", "assets/");
define("CSS_PATH", "css/");

const APP_NAME = 'tecno-task-v1.0.0';

//datos de conexion a base de Datos MYSQL
const DBM_MYSQL = 'mysql'; //'mysql'
const DBM_NAME = 'tecn3_db';
//const DBM_HOST = '192.168.0.251';
const DBM_HOST = 'localhost:8306';
const DBM_USER = 'tecn3_admin';
const DBM_PASSWORD = '';
const DBM_CHARSET = 'charset-utf8';



//Apis registradas
// const APP = 'http://localhost/inet/framework/';
// const REGISTER_KEY_APP = 'MH9inmL0Ef2yRVFCvEYS';

//
// //delimitadores decimal y millar Ej 24.251,00
// const SPD=',';
// const SPM='.';
//
// //simbolo de moneda
// const S = '$';
//
// //zona horaria
// date_default_timezone_set("America/Argentina/Buenos_Aires");