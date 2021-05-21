<?php

    require_once "../vendor/autoload.php";

    define("URL_APP", dirname(__DIR__));
    define("URL_VIEW", URL_APP."/site/view/");
    define("URL_CON", URL_APP."/site/controller/");
    define("URL_APIL", "http://localhost/shiny-winner/api-league");

    use Controller\League;

    $l = new League;

    $dados = [
        "Fila" => $_POST["fila"],
        "Tier" => $_POST["tier"],
        "Divisao" => $_POST["divisao"]
    ];

    $apiL = $l->rotaLeague(URL_APIL."/league", $dados);

    require_once "../viewL/usuario.php";

    
