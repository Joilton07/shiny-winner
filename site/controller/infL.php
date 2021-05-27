<?php

    require_once "../vendor/autoload.php";

    define("URL_APP", dirname(__DIR__));
    define("URL_APIL", "http://localhost/shiny-winner/api-league");

    use Controller\League;

    $l = new League;

    $dados = [
        "fila" => $_POST["fila"],
        "tier" => $_POST["tier"],
        "divisao" => $_POST["divisao"]
    ];

    $apiL = $l->rotaLeague(URL_APIL."/league", $dados);

    require_once "../viewL/usuario.php";

    
