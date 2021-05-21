<?php

    namespace Controller;

    require_once "../required-http.php";

    class League
    {
        public function __construct() {}

        public function rotaLeague(string $url, $campeao=[])
        {
        
            $dados = post($url, $campeao);

            return $dados;
        }
    }
    