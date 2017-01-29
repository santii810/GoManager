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
    private $pokemonId;
    private $date;

    public function __construct($id = NULL, $candys = NULL, $pokedex = false, $pokemonId = NULL, $date = null) {
        $this->recordId = $id;
        $this->candys = $candys;
        $this->pokedex = $pokedex;
        $this->pokemonId = $pokemonId;
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

    public function getPokemonId() {
        return $this->pokemonId;
    }

    public function setPokemonId($pokemon) {
        $this->pokemonId = $pokemon;
    }

    public function getCandys() {
        return $this->candys;
    }

    public function setCandys($candys) {
        $this->candys = $candys;
    }

    public function setPokedex($pokedex) {
        $this->pokedex = $pokedex;
    }

    public function isPokedex() {
        return $this->pokedex;
    }

}
