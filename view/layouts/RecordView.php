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


    <?php
    foreach ($pokemonList as $key => $pokemon) {
        if ($pokemon->getPokemonPreevolution() == NULL) {
            $pokemonEvolutions = array();
            $evolutiveLineLength = 1;
            if ($pokemon->getPokemonEvolution() != NULL) {
                $evolutionId = $pokemon->getPokemonEvolution();
                do {
                    $evolution = $pokemonList[$evolutionId];
                    array_push($pokemonEvolutions, $evolution);
                    $evolutionId = $evolution->getPokemonEvolution();
                    $evolutiveLineLength++;
                } while ($evolution->getPokemonEvolution() != NULL);
                printRow($pokemon, $pokemonEvolutions, $evolutiveLineLength);
            }
        }
    }

    function printRow(PokemonModel $pokemon, $evolutions, $evolutiveLineLength) {
        /** show preevolution cell */
        $firstweight = 6;
        $restWeight = 6;
        switch ($evolutiveLineLength) {
            case 1:
                $firstweight = 6;
                $restWeight = 6;
                break;
            case 2:
                $firstweight = 6;
                $restWeight = 6;
                break;
            case 3:
                $firstweight = 6;
                $restWeight = 3;
                break;
            case 4:
                $firstweight = 3;
                $restWeight = 3;
                break;

            default:
                break;
        }
        echo '<div id="record-table-row" class="container"> ';
        echo '  <div class="background_blue row">';
        echo '      <div class="background_red col-xs-' . $firstweight . '">';
        echo '          <img src="./assets/images/' . $pokemon->getPokemonId() . '.png" class="pokemon-image">';
        echo '      </div>';
        /* print evolutions */
        foreach ($evolutions as $evolution) {
            echo '  <div class="background_green col-xs-' . $restWeight . '">';
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
