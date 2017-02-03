<?php
require_once (__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance();
$pokemonList = $view->getVariable(VAR_POKEMON_LIST);
$recordList = $view->getVariable(VAR_RECORD_LIST);
?>
<body>	

    <div id="nav-bar-margin"><br></div>
    <form  action="index.php?controller=record&amp;action=add" method="POST" >
        <?php
        //tour pokemon list. Key = pokemon id
        foreach ($pokemonList as $key => $pokemon) {
            /*
             * If preevolution is null show it if now a baby 
             *
             */
            if ($pokemon->isPokemonActive() &&
                    ($pokemon->getPokemonPreevolution() == NULL || $pokemon->getPokemonId() < $pokemon->getPokemonPreevolution()) &&
                    ($pokemon->getPokemonEvolution() == NULL || $pokemon->getPokemonId() < $pokemon->getPokemonEvolution())
            ) {

                $pokemonEvolutions = array();
                $evolutiveFamilyLength = 1;

                // if it dont have evolution and preevolution simply show it
                if ($pokemon->getPokemonEvolution() != NULL || $pokemon->getPokemonPreevolution() != NULL) {
                    //in baby case put baby as fisrt pokemon os evolution family
                    if ($pokemon->getPokemonId() < $pokemon->getPokemonPreevolution()) {
                        $idPreevolution = $pokemon->getPokemonPreevolution();
                        $pokemon = $pokemonList[$idPreevolution];
                    }
                    $evolutionId = $pokemon->getPokemonEvolution();
                    do {
                        $evolution = $pokemonList[$evolutionId];
                        array_push($pokemonEvolutions, $evolution);
                        $evolutionId = $evolution->getPokemonEvolution();
                        $evolutiveFamilyLength++;
                    } while ($evolution->getPokemonEvolution() != NULL);
                }

                //show pokemon family
                $view->setVariable("pokemon", $pokemon);
                $view->setVariable("pokemonEvolutions", $pokemonEvolutions);
                $view->setVariable("evolutiveFamilyLength", $evolutiveFamilyLength);
                include (__DIR__ . "/../fragments/pokemonEvolutionFamily.php");
            }
        }
        ?>

        <nav class="fixed-nav-bar">
            <div class="row recordList-statistics">
                <div class="col-xs-4">
                    <p id="totalCandys" class="nav-bar-text"></p>
                </div>

                <div class="col-xs-4">
                    <input type="submit" name="submit" value="Guardar" class="btn btn-success">
                </div>
            </div>
            <div class="row recordList-statistics">
                <div class="col-xs-4">
                    <p id="totalEvolutions"  class="nav-bar-text"></p>
                </div>
            </div>
        </nav>
    </form>
    <<script>
        countCandys();
        countEvolutions();
    </script>
</body>
