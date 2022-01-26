<?php


$documentRoot= getcwd();

//Base PATH
define("BASE_PATH", $documentRoot);

//Base URL -> For Links CSS
$uri = $_SERVER["REQUEST_URI"];

if(isset($uri) && $uri !== null){
    $uri = substr($uri, 1);
    $uri = explode("/", $uri);
    $uri = "http://$_SERVER[HTTP_HOST]". "/".$uri[0];
} else {
    $uri = null;
}

define("BASE_URL", $uri);




//CONTROLLERS
define("CONTROLLERS", BASE_PATH . '/Controller/');

//VIEWS
define("VIEWS", BASE_PATH . '/Views/');

//MODELS
define("MODELS", BASE_PATH . '/Models/');

//RESOURCES
define("RESOURCES", BASE_PATH . '/resources/');

//ASSETS
define("ASSETS", BASE_PATH . '/assets/');



//Global Variable DataBase
define("dbHost", "localhost");
define("dbName", "mvc_basics");
define("dbUser", "Kory");
define("dbPassword", "0036");
define("dbCharset", "utf8mb4");

?>