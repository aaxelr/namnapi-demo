<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Request-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");

$first_names = ["Ålen", "Pållen", "Bön-Marie", "Gert-Åke", "Blixten", "Vemvare", "Människo-Björn", "Rickard", "Calle", "Gittan"];
$last_names = ["Ökänd", "Ålborg", "Ek", "Wök", "Snabbsson", "Somtognamnet", "Al Hakim", "Jimmysson", "af Kulle", "Githubsson"];

$names = [];

for ($i = 0; $i < 10; $i++) {
    $name = [
        "firstname" => $first_names[rand(0, 9)],
        "lastname" => $last_names[rand(0, 9)]
    ];
    $names[] = $name;
}

$json = json_encode($names, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo $json;
