<?php

// File: /controller/CandyController.php
require_once(__DIR__ . "/../controller/BaseController.php");

require_once(__DIR__ . "/../model/pokemon/PokemonMapper.php");
require_once(__DIR__ . "/../model/record/RecordMapper.php");

/**
 * Class CandyController
 */
class RecordController extends BaseController {

    /**
     * Reference to the CandyMapper to interact
     * with the database
     * 
     * @var CandyMapper
     */
    private $recordMapper;
    private $pokemonMapper;

    function __construct() {
        parent::__construct();

        $this->recordMapper = new RecordMapper();
        $this->pokemonMapper = new PokemonMapper();
    }

    function show() {
        // obtain the data from the database
        $recordList = $this->recordMapper->getAll();
        $pokemonList = $this->pokemonMapper->getAll();
        // put the array containing Post object to the view
        $this->view->setVariable(VAR_RECORD_LIST, $recordList);
        $this->view->setVariable(VAR_POKEMON_LIST, $pokemonList);

        // render the view (/view/posts/index.php)
        $this->view->render(CONTROLLER_RECORD, ACTION_SHOW);
    }

    function add() {
        $recordList = $this->recordMapper->getAll();

        foreach ($recordList as $record) {
            $pokemonId = $record->getPokemonId();
            $inputName = "candys-" . (string) $pokemonId;
            if (isset($_POST[$inputName])) {
                $record->setCandys($_POST[$inputName]);
                $recordList = $this->recordMapper->update($record);
            }
        }
        $this->show();
    }

}

?>