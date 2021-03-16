<?php

require("./app/Pokemon.php");
//require("./vendor/psy/psysh/bin/psysh");

$content = trim(file_get_contents("php://input"));
$data = json_decode($content, true);

// $data => $_POST

$pikachu = new Pokemon($data["pseudo"], $data["password"]);

header("Content-Type: application/json");
// Préciser le format de la réponse

if($pikachu->isConnected()) {
  $redirect = "success";
} else {
  $redirect = "error";
}

echo json_encode(array("page" => $redirect), JSON_HEX_QUOT);
// Retourne la réponse formatée