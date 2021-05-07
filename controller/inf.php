<?php 

    require_once "./required-http.php";

    $url = "http://localhost/shiny-winner/covid";

    $dataI = $_POST["data1"];
    $dataF = $_POST["data2"];

    $datas = post($url, [
        "data1" => $dataI,
        "data2" => $dataF
    ]);

    // echo "$dataI $dataF";

    // echo $datas;