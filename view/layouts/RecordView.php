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
        if ($pokemon->getPokemonPreevolution() == NULL && $pokemon->isPokemonActive()) {
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
            $view->setVariable("pokemon", $pokemon);
            $view->setVariable("pokemonEvolutions", $pokemonEvolutions);
            $view->setVariable("evolutiveFamilyLength", $evolutiveFamilyLength);
            include (__DIR__ . "/../fragments/pokemonEvolutionFamily.php");
        }
    }
    ?>

</body>
