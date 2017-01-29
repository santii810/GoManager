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

    private $recordId;
    private $userId;
    private $candys;
    private $pokedex;
    private $pokemon;
    private $date;

    public function __construct($id = NULL, $candys = NULL, $pokedex = NULL, $pokemon = NULL, $date = null) {
        $this->recordId = $id;
        $this->candys = $candys;
        $this->pokedex = $pokedex;
        $this->pokemon = new PokemonModel($pokemon);
        $this->date = $date;
    }

    public function getRecordId() {
        return $this->recordId;
    }

    public function setRecordId($id) {
        $this->recordId = $id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getPokemon() {
        return $this->pokemon;
    }

    public function setPokemon($pokemon) {
        $this->pokemon = $pokemon;
    }

    public function getCandys() {
        return $this->candys;
    }

    public function setcandys($candys) {
        $this->candys = $candys;
    }

    public function setPokedex($pokedex) {
        $this->pokedex = $pokedex;
    }

    public function isPokedex() {
        return $this->pokedex;
    }

}
