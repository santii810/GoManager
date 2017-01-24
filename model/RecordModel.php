<?php
// file: model/record.php

/**
 * Class Record
 * 
 * Represents a record information. A record was written by an
 * specific User (author) and contains a list of Comments
 * 
  */
class RecordModel {

  private $id;
  private $user;
  private $candys;
  private $pokedex;
  private $pokemon;
  private $date;




  public function __construct($id=NULL,Pokemon $pokemon=NULL, $candys=NULL, $pokedex=NULL) {
    $this->id = $id;
    $this->pokemon = $pokemon;
    $this->candys = $candys;
    $this->pokedex = $pokedex;

  }

  
  public function getId() {
    return $this->id;
  }

  public function setId($id){
    $this->id = $id;
  }
  
  public function getUser() {
    return $this->user;
  }
  
  public function setUser($user) {
    $this->user = $user;
  }

  public function getPokemon() {
    return $this->pokemon;
  }
  
  public function setPokemon($pokemon) {
    $this->pokemon = $pokemon;
  }


  public function getcandys() {
    return $this->candys;
  }

  public function setcandys($candys) {
    $this->candys = $candys;
  }


  public function setPokedex($pokedex){
    $this->pokedex = $pokedex;
  }

  public function isPokedex(){
    return $this->pokedex;
  }
}
