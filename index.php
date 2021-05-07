<?php
    require_once "vendor/autoload.php";
    require_once "required-http.php";
    
    
    use Slim\App;
    use Slim\Container;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    define("URL_COVID", "http://localhost/shiny-winner/api-covid");
    define("URL_DADOS_COVID", "https://api.covid19api.com/country/brazil?from=2020-03-01T00:00:00Z&to=2021-05-07T00:00:00Z");

    $app = new App(new Container([
        'settings' => [
            'displayErrorDetails' => true,
        ]
    ]));
    
    $app->get("/", function ( Request $req, Response $res, array $args ){
        return $res->withJson([
            "status" => "OK! Mas nao e pagina certa va para a view!"
        ]);
    });

    $app->post("/covid", function (Request $req, Response $res, array $args){
        
        $dadosReq = json_decode($req->getBody()->getContents(), true);

        $dadosCovid=post(URL_COVID."/dados-covid", $dadosReq);

        return $res->withJson($dadosCovid);

    });

    $app->run();