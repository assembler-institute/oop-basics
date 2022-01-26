<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

require_once ("config/constant.php");

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.

if (isset ($_GET["controller"]) && $_GET["controller"]!=null){
    $controller = getControllerPath($_GET["controller"]);
    $fileExist= file_exists($controller);
    if($fileExist==true){
        require_once $controller;
    } else{
        $errorMsg= 'El controlador no existe';
        require_once VIEWS . "error.php";
    }
}
else
{
    require_once VIEWS . "main.php";
}

function getControllerPath($cont):string
{
    return CONTROLLERS . $cont . "Controller.php";
}
?>