<?php
/**
 * Fragment to each row to pokemon evolution family
 * 
 */
require_once (__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance();

$pokemon = $view->getVariable("pokemon");
$pokemonEvolutions = $view->getVariable("pokemonEvolutions");
$evolutiveFamilyLength = $view->getVariable("evolutiveFamilyLength");


/** size calcs */
$firstweight = 6;
// try yo avoid division by zero
if ($evolutiveFamilyLength > 1) {
    $evolutiveFamilyLength--;
}
/* Repart the 6 spaces into number os family members */
$restWeight = 6 / ($evolutiveFamilyLength );
?>

<div id="record-table-row" class="container"> 
    <div class="row">
        <div class="col-xs-<?php echo $firstweight?> first-evolution-div">
            <div class="row">
                <div class="col-xs-4">
                    <img src="./assets/images/<?php echo $pokemon->getPokemonId() ?>.png" class="pokemon-image">
                </div>
                <div class="col-xs-8">
                    <div class="row">
                        <div class="col-xs-12">
                            <p class="pokemon-name"><?php echo $pokemon->getPokemonName(); ?></p>
                        </div>
                        <div class="col-xs-6">
                            <p>Caramelos: </p>
                        </div>
                        <div class="col-xs-6">
                            <input class="form-control" id="candys-<?php echo$pokemon->getPokemonId(); ?>" type="number" >
                        </div>
                        <div class="col-xs-7">
                            <p>Evolucionar: </p>
                        </div>
                        <div class="col-xs-3">
                            <input class="checkbox-inline" id="evolve-<?php echo $pokemon->getPokemonId(); ?>" type="checkbox">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php foreach ($pokemonEvolutions as $evolution) : ?>
            <div class="col-xs-<?php echo $restWeight; ?>" evolution-cell">
                 <img src="./assets/images/<?php echo $evolution->getPokemonId(); ?>.png" class="pokemon-image">
            </div>
        <?php endforeach; ?>

    </div>
</div>