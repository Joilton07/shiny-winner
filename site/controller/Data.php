<?php
    namespace Controller;

    require_once "../required-http.php";

    class Data
    {
        public function __construct() {
        }

        public function rotaCovid(string $url, $dados=[])
        {
            $datas = post($url, $dados);

            return $datas;
        }

    }
    