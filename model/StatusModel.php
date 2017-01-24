<?php
// file: model/status.php

/**
 * Class Status
 * 
 * Represents a status information. A status was written by an
 * specific User (author) and contains a list of Comments
 * 
  */
class StatusModel {

  /**
   * The id of this status
   * @var string
   */
  private $id;
  
  /**
   * The pokemon of this status
   * @var Pokemon
   */  
  private $pokemon;
  
  /**
   * The candys of status
   * @var string
   */    
  private $candys;

/**
 * Is registered in pokedex
 *  @var bool 
 */
private registered;



public function __construct($id=NULL,Pokemon $pokemon=NULL, $candys=NULL, $registered=NULL) {
  $this->id = $id;
  $this->pokemon = $pokemon;
  $this->candys = $candys;
  $this->registered = $registered;

}

  /**
   * Gets the id of this status
   * 
   * @return string The id of this status
   */     
  public function getId() {
    return $this->id;
  }
  
  /**
   * Gets the pokemon of this status
   * 
   * @return string The pokemon of this status
   */     
  public function getPokemon() {
    return $this->pokemon;
  }
  
  /**
   * Sets the pokemon of this status
   * 
   * @param string $pokemon the pokemon of this status
   * @return void
   */    
  public function setPokemon($pokemon) {
    $this->pokemon = $pokemon;
  }

  /**
   * Gets the candys of this status
   * 
   * @return string The candys of this status
   */    
  public function getcandys() {
    return $this->candys;
  }

  /**
   * Sets the candys of statuss
   * 
   * @param string $candys of statuss
   * @return void
   */  
  public function setcandys($candys) {
    $this->candys = $candys;
  }


  /**
   * set if the pokemon is registered in pokedex
   * @param bool 
   */
  public function setRegistered($registered){
    $this->registered = $registered;
  }
  /**
   * @return boolean status of registered pokemon
   */
  public function isRegistered(){
    return $this->registered;
  }
}
