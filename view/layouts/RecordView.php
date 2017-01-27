<?php
require_once (__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance();
require_once(__DIR__ . "/HeadView.php");
$pokemonList = $view->getVariable("pokemonList");
$currentuser = $view->getVariable("currentusername");
?>
<body>	
    <nav class="fixed-nav-bar">

    </nav>
    <div id="nav-bar-margin"><br></div>


    <?php
    //tour pokemon list. Key = pokemon id
    foreach ($pokemonList as $key => $pokemon) {
//If pokemon not have preevolution show it
        if ($pokemon->getPokemonPreevolution() == NULL) {
            $pokemonEvolutions = array();
            $evolutiveFamilyLength = 1;
            if ($pokemon->getPokemonEvolution() != NULL) {
                $evolutionId = $pokemon->getPokemonEvolution();
                do {
                    $evolution = $pokemonList[$evolutionId];
                    array_push($pokemonEvolutions, $evolution);
                    $evolutionId = $evolution->getPokemonEvolution();
                    $evolutiveFamilyLength++;
                } while ($evolution->getPokemonEvolution() != NULL);
            }
            printRow($pokemon, $pokemonEvolutions, $evolutiveFamilyLength);
        }
    }

    function printRow(PokemonModel $pokemon, $evolutions, $evolutiveFamilyLength) {
        /** show preevolution cell */
        $firstweight = 6;
        // try yo avoid division by zero
        if ($evolutiveFamilyLength > 1) 
            $evolutiveFamilyLength--;
        /* Repart the 6 spaces into number os family members */
        $restWeight = 6 / ($evolutiveFamilyLength );

        echo '<div id="record-table-row" class="container"> ';
        echo '  <div class="row">';
        /* print starter evolution */
        echo '      <div class="col-xs-' . $firstweight . ' first-evolution-div">';
        echo '          <div class="row">';
        echo '              <div class="col-xs-4">';
        echo '                  <img src="./assets/images/' . $pokemon->getPokemonId() . '.png" class="pokemon-image">';
        echo '              </div>';
        /* data input container */
        echo '              <div class="col-xs-8">';
        echo '                  <div class="row>';
        echo '                      <div class="col-xs-12">';
        echo '                          <p class="pokemon-name">' . $pokemon->getPokemonName() . '</p>';
        echo '                      </div>';
        echo '                      <div class="col-xs-6">';
        echo '                          <p>Caramelos: </p>';
        echo '                      </div>';
        echo '                      <div class="col-xs-6">';
        echo '                          <input class="form-control" id="candys-' . $pokemon->getPokemonId() . '" type="number" >';
        echo '                      </div>';
        echo '                      <div class="col-xs-7">';
        echo '                          <p>Evolucionar: </p>';
        echo '                      </div>';
        echo '                      <div class="col-xs-3">';
        echo '                          <input class="checkbox-inline" id="evolve-' . $pokemon->getPokemonId() . '" type="checkbox">';
        echo '                      </div>';
        echo '                  </div>';
        echo '              </div>';
        echo '      </div>';



        /* print evolutions */
        foreach ($evolutions as $evolution) {
            echo '  <div class="col-xs-' . $restWeight . '">';
            echo '      <img src="./assets/images/' . $evolution->getPokemonId() . '.png" class="pokemon-image">';
            echo '  </div>';
        }

        /* close row */
        echo '  </div>';
        echo '</div>';
    }

    function findPokemon($id, $pokemonList) {
        foreach ($pokemonList as $pokemon) {
            if ($pokemon->getPokemonId() == $id) {
                return $pokemon;
            }
        }
    }
    ?>

</body>
