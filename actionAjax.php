<?php

require("./app/Pokemon.php");
//require("./vendor/psy/psysh/bin/psysh");

$content = trim(file_get_contents("php://input"));
$data = json_decode($content, true);
// $data = $_POST de action.php


$pikachu = new Pokemon($data["pseudo"], $data["password"]);

if($pikachu->isConnected()) {
  $redirect = "success";
} else {
  $redirect = "error";
}

header("Content-Type: application/json");
// Préciser le format de la réponse
echo json_encode(array("page" => $redirect), JSON_HEX_QUOT);
// Retourne la réponse formatée