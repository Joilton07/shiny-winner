<?php 

    require_once "../vendor/autoload.php";

    define("URL_APP", dirname(__DIR__));
    define("URL_VIEW", URL_APP."/site/view/");
    define("URL_CON", URL_APP."/site/controller/");
    define("URL_API", "http://localhost/shiny-winner/api-covid");
    
    use Controller\Data;
    
    $d = new Data;
    
    $dados = [
        "Pais" => $_POST["pais"],
        "dataI" => $_POST["data1"],
        "dataF" => $_POST["data2"]
    ];

    $respApi=$d->rotaCovid(URL_API."/covid", $dados);

    require_once "../viewAm/index.php";

