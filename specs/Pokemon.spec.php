<?php

require("./app/Pokemon.php");

describe("Pokemon", function() {
  describe("->hello()", function() {
    it("should return Hello", function() {
      $pokemon = new Pokemon("Pikachu", "pikapika");
    
      expect($pokemon->hello())->to->equal('Hello');
    });
  });
  
  describe("->isConnected()", function() {
    it("should return true with valid credentials", function() {
      // Arrange
      $pokemon = new Pokemon("Pikachu", "pikapika");   
      
      // Act
      $isConnected = $pokemon->isConnected();
    
      // Assert
      expect($isConnected)->to->equal(true);
    });
    
    it("should return false with invalid password", function() {
      $pokemon = new Pokemon("Pikachu", "hack");
    
      $isConnected = $pokemon->isConnected();
    
      expect($isConnected)->to->equal(false);
    });
    
    it("should return false with invalid pseudo", function() {
      $pokemon = new Pokemon("Oops", "pikapika");
  
      $isConnected = $pokemon->isConnected();
    
      expect($isConnected)->to->equal(false);
    });
  });
});
