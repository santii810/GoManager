<?php
/**
 * Fragment to each row to pokemon evolution family
 * 
 */
require_once (__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance();

$pokemon = $view->getVariable(VAR_POKEMON);
$pokemonEvolutions = $view->getVariable(VAR_POKEMON_EVOLUTIONS);
$evolutiveFamilyLength = $view->getVariable(VAR_EVOLUTIVE_FAMILY_LENGTH);
$recordList = $view->getVariable(VAR_RECORD_LIST);


/** size calcs */
$firstWeight = 6;
// try yo avoid division by zero
if ($evolutiveFamilyLength > 1) {
    $evolutiveFamilyLength--;
}

/* Repart the 6 spaces into number os family members */

$restWeight = 12 / ($evolutiveFamilyLength );

    




/** Record data */
if (isset($recordList[$pokemon->getPokemonId()]))
    $pokemonCandys = $recordList[$pokemon->getPokemonId()]->getCandys();
else {
    $pokemonCandys = 0;
    $record = new RecordModel();
    $record->setCandys(0);
    $record->setPokemonId($pokemon->getPokemonId());
    $recordMapper = new RecordMapper();
    $recordMapper->insert($record);
}



$evolutions = intval($pokemonCandys / ($pokemon->getNecesaryCandys() - 2));
?>

<div id="record-table-row" class="container"> 
    <div class="row">
        <div class="col-xs-<?php echo $firstWeight ?> first-evolution-div">
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
                            <input class="form-control candys-input" name="candys-<?php echo$pokemon->getPokemonId(); ?>" id="candys-<?php echo$pokemon->getPokemonId(); ?>"
                                   onblur="candysInputOnBlur(<?php echo $pokemon->getPokemonId() . " , " . $pokemon->getNecesaryCandys(); ?>)" 
                                   type="number" value="<?php echo $pokemonCandys ?>" >
                        </div>
                        <?php if($pokemon->getNecesaryCandys() != 0): ?>
                        <div    class="col-xs-12">
                            <p id="numEvolutions-<?php echo $pokemon->getPokemonId(); ?>" class="num-evolutions">Ev: <?php echo $evolutions ?></p>
                        </div>
                        <?php endif; ?>
                        <!--                        <div class="col-xs-7">
                                                    <p>Evolucionar: </p>
                                                </div>
                                                <div class="col-xs-3">
                                                    <input class="checkbox-inline" id="evolve-<?php echo $pokemon->getPokemonId(); ?>" type="checkbox">
                                                </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6">

        <?php foreach ($pokemonEvolutions as $evolution) : ?>
          <?php  if($pokemon->getPokemonId()==133 && $evolution->getPokemonId()<150)    $restWeight = 4; 
           if($pokemon->getPokemonId()==133 && $evolution->getPokemonId()>150)    $restWeight = 6; ?>

            <div class="col-xs-<?php echo $restWeight; ?> evolution-cell">
                <img src="./assets/images/<?php echo $evolution->getPokemonId(); ?>.png" class="pokemon-image">
            </div>
        <?php endforeach; ?>

        </div>
    </div>
</div>