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
//If pokemon not have preevolution or preevolution is lower than id show it alwait it is active

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

</body>
