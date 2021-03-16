<?php

require("./app/Pokemon.php");
//require("./vendor/psy/psysh/bin/psysh");

$content = trim(file_get_contents("php://input"));
$data = json_decode($content, true);

$pikachu = new Pokemon($data["pseudo"], $data["password"]);

header("Content-Type: application/json");

if($pikachu->isConnected()) {
  $redirect = "success";
} else {
  $redirect = "error";
}

echo json_encode(array("page" => $redirect), JSON_HEX_QUOT);
