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

            $evolutionId = $pokemon->getPokemonEvolution();
            do {
                $evolution = $pokemonList[$evolutionId];
                array_push($pokemonEvolutions, $evolution);
                $evolutionId = $evolution->getPokemonEvolution();
            } while ($evolution->getPokemonEvolution() != NULL);
            printRow($pokemon, $pokemonEvolutions);
        }
    }

    function printRow(PokemonModel $pokemon, $evolutions) {
        /** show preevolution cell */
        echo '<div id="record-table-row" class="container"> ';
        echo '  <div class="background_blue row">';
        echo '      <div class="background_red col-xs-4">';
        echo '          <img src="./assets/images/' . $pokemon->getPokemonId() . '.png" class="pokemon-image">';
        echo '      </div>';
        /* print evolutions */
        foreach ($evolutions as $evolution) {
            echo '  <div class="background_green col-xs-4">';
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
