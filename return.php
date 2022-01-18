<?php

header("Access-Control-Allow-Origin: *"); // configuração cors
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // configuração permitir GET, POST, PUT, DELETE, OPTIONS
header("Content-type: application/json"); //configurando para o retorno ser JSON

echo json_encode($array);