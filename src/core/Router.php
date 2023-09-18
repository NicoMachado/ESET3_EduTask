<?php

/**
 *La clase Router trabaja con la url amigable seteada en .htaccess, 
 *guarda un arreglo con la url
 *Metodo: start() -> extrae de la url el controlador el metodo y los parametros
 */

// namespace Inet\Olimpiada2023Necochea;

class Router
{
  private static $routes = [];

  function __construct()
  {
    // code...
  }

  public static function setRoutes(string $route, string $controller, string $method, array $params)
  {
    static::$routes = ['url' => $route, 'controller' => $controller, 'method' => $method, 'params' => $params];
  }

  public static function getRoutes()
  {
    return static::$routes;
  }

  public static function start()
  {
    //si la URL HTTP-REQUEST-GET se encuentra vacia establece la URI para la el controlador home y su método index
    $stringUrl = (!empty($_GET['url'])) ? $_GET['url'] : 'home/index';
    $arrayAux = explode("/", $stringUrl);
    $controller = $arrayAux[0];
    $params = "";
    // si el método se encuentra vacio se coloca el index
    if (!empty($arrayAux[1])) {
      $method = $arrayAux[1];
    } else {
      $method = 'index';
    }
    //crea un vector con todos los parametros
    if (!empty($arrayAux[2])) {
      for ($i = 2; $i < count($arrayAux); $i++) {
        $params .= $arrayAux[$i] . ',';
      }
      $params = trim($params, ','); //cortar la ultima ,
      $params = explode(",", $params);
    } else {
      settype($params, "array");
    }

    if ($_GET != NULL) {
      self::setRoutes($_GET['url'], $controller, $method, $params);
    } else {
      self::setRoutes(HOME_URL, $controller, $method, $params);
    }
    self::loadController();
  }

  //este metodo establece la convencion para los controladores controllers/nombreController.php
  public static function loadController()
  {
    $routes = self::getRoutes();
    if ($routes) {
      $controllerFile = CONTROLLERS_PATH . $routes['controller'] . "Controller.php";
      if (file_exists($controllerFile)) {
        try {
          require_once($controllerFile);
          $controller = new $routes['controller']();
          if (method_exists($controller, $routes['method'])) {
            $controller->{$routes['method']}($routes['params']);
          } else {
            require_once(VIEWS_PATH . "error404View.php");
          }
        } catch (\Throwable $th) {
          require_once(VIEWS_PATH . "error404View.php");
        }
      } else {
        require_once(VIEWS_PATH . "error404View.php");
      }
    }
    return false;
  }

  public static function getAction($route)
  {
    if (array_key_exists($route, static::$routes)) {
      return static::$routes[$route];
    } else {
      return false;
      throw new Exception("La ruta no existe");
    }
  }
}
