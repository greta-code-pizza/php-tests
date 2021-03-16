<?php

class Pokemon {
  private $pseudo;
  private $password;

  function __construct($pseudo, $password) {
    $this->pseudo = $pseudo;
    $this->password = $password;
    $this->co = false;
  }

  function hello() {
    return "Hello";
  }

  function isConnected() {
    return $this->pseudo == "Pikachu" && $this->password == "pikapika";
  }
}