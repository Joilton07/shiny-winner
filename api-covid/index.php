<?php
    require_once "vendor/autoload.php";
    require_once "required-http.php";
    
    define("URL_BASE", "https://localhost/shiny-winner");
    
    use Slim\App;
    use Slim\Container;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    $app = new App(new Container([
        'settings' => [
            'displayErrorDetails' => true,
        ]
    ]));
    
    $app->get("/", function ( Request $req, Response $res, array $args ){
        return $res->withJson([
            "status" => "OK! Chegou no APP!"
        ]);
    });

    $app->post("/covid", function (Request $req, Response $res, array $args){

        $dadosReq = json_decode($req->getBody()->getContents(), true);

        $urlCovid = "https://api.covid19api.com/country/".$dadosReq["Pais"]."?from=".$dadosReq["dataI"]."T00:00:00Z&to=".$dadosReq["dataF"]."T00:00:00Z";

        

        $dadosCovid=get($urlCovid);

        return $res->withJson($dadosCovid);
        
    });

    $app->run();