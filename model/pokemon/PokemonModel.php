<?php

/**
 * Class Pokemon
 * 
 * Represents a Pokemon information.
 * 
 */
class PokemonModel {

    private $pokemonId;
    private $pokemonName;
    private $necesaryCandys;
    private $pokemonEvolution;
    private $pokemonPreevolution;

    public function __construct($pokemonId = NULL, $pokemonName = NULL, $necesaryCandys = NULL,
            $pokemonEvolution = NULL, $pokemonPreevolution = NULL) {
        $this->pokemonId = $pokemonId;
        $this->pokemonName = $pokemonName;
        $this->necesaryCandys = $necesaryCandys;
        $this->pokemonEvolution = $pokemonEvolution;
        $this->pokemonPreevolution = $pokemonPreevolution;
    }

    public function getPokemonId() {
        return $this->pokemonId;
    }

    public function getPokemonName() {
        return $this->pokemonName;
    }

    public function setPokemonName($pokemonName) {
        $this->pokemonName = $pokemonName;
    }

    public function getPokemonCandys() {
        return $this->necesaryCandys;
    }

    public function setPokemonCandys($pokemonCandys) {
        $this->necesaryCandys = $pokemonCandys;
    }

    public function getPokemonEvolution() {
        return $this->pokemonEvolution;
    }

    public function getPokemonPreevolution() {
        return $this->pokemonPreevolution;
    }

}
