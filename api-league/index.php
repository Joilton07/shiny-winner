<?php
    require "vendor/autoload.php";
    require_once "required-http.php";


    use Slim\App;
    use Slim\Container;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    $app = new App(new Container([
        "settings" => [
            "displayErrorDetails" => true
        ]
    ]));

    $app->get("/", function(Request $req, Response $res, array $args){
        return $res->withJson([
            "status" => "OK! Chegou na Api League!"
        ]);
    });

    $app->post("/league", function(Request $req, Response $res, array $args){
        $dadosReq = json_decode($req->getBody()->getContents(), true);

        $urlLeague = "https://br1.api.riotgames.com/lol/league-exp/v4/entries/".$dadosReq["Fila"]."/".$dadosReq["Tier"]."/".$dadosReq["Divisao"]."?page=1&api_key=RGAPI-14fc1efa-fb24-4a50-8ea1-2146768d7c7f";

        $dadosLeague = get($urlLeague);

        return $res->withJson($dadosLeague);
    });

    $app->run();