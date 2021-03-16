<?php

require("./app/Pokemon.php");

$pikachu = new Pokemon($_POST["pseudo"], $_POST["password"]);

if($pikachu->isConnected()) {
  header('Location: success.php');
} else {
  header('Location: error.php');
}
