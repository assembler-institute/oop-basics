<?php

require_once MODELS . "./clubModels.php";

$action= "";

if(isset($_REQUEST["action"])){
    $action= $_REQUEST["action"];
}

if(function_exists($action)){
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $action($id);
    }else{
        $action();
    }
}else{
    error('La accion no existe');
}

function getData(){
    $getDataModel = get();
    require_once VIEWS . "/club.php";
}

function home(){
    require_once VIEWS . "/main.php";
}

function pokemon(){
    require_once VIEWS . "/pokemon.php";
}


function error($errorMsg)
{
    require_once VIEWS . "/error.php";
}

?>