<?php

// 1. ange lämpliga http-headers
// Read more: https://stackoverflow.com/questions/10636611/how-does-access-control-allow-origin-header-work
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Request-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");

// 2. skapa två php-arrayer för att lagra för- och efternamn 
$first_names = ["Ålen", "Pållen", "Bön-Marie", "Gert-Åke", "fem", "sex", "sju", "åtta", "nio", "tio"];
$last_names = ["Ökänd", "Ålborg", "Ek", "Wök", "a1", "b2", "c3", "d4", "e5", "f6"];

// 3. skapa 10 olika namn spara i en ny array.
$names = [];

for ($i = 0; $i < 10; $i++) {
    $name = [
        "firstname" => $first_names[rand(0, 9)],
        "lastname" => $last_names[rand(0, 9)]
    ];
    $names[] = $name;
}

//test
//var_dump($names);
//die();

//4. konvertera php-array till json-sträng
$json = json_encode($names, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
//skicka ej 

//5. skicka json till klienten
echo $json;

// OBS! Ingen extra data får skickas till klienten


// 6. publicera api
