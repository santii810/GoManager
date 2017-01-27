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
                printRow($pokemon, $pokemonEvolutions, $evolutiveFamilyLength);
            }
        }
    }

    function printRow(PokemonModel $pokemon, $evolutions, $evolutiveFamilyLength) {
        /** show preevolution cell */
        $firstweight = 6;
        $restWeight = 6;
        switch ($evolutiveFamilyLength) {
            case 1:
            case 2:
                $restWeight = 6;
                break;
            case 3:
                $restWeight = 3;
                break;
            case 4:
                $firstweight = 3;
                $restWeight = 3;
                break;
        }
        echo '<div id="record-table-row" class="container"> ';
        echo '  <div class="row">';
        /* print starter evolution */
        echo '      <div class="col-xs-' . $firstweight . ' first-evolution-div">';
        echo '          <div class="row">';
        echo '              <div class="col-xs-6">';
        echo '                  <img src="./assets/images/' . $pokemon->getPokemonId() . '.png" class="pokemon-image">';
        echo '              </div>';
        /*data input container*/
        echo '              <div class="col-xs-6">';
        echo '                  <div class="row>';
        echo '                      <div class="col-xs-12">';
        echo '                          <h2>' . $pokemon->getPokemonName() . '</h2>';
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
