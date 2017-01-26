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

    function index() {
        // obtain the data from the database
        $recordList = $this->recordMapper->getAll();
        $pokemonList = $this->pokemonMapper->getAll();
        // put the array containing Post object to the view
        $this->view->setVariable("recordList", $recordList); 
        $this->view->setVariable("pokemonList", $pokemonList);

        // render the view (/view/posts/index.php)
        $this->view->render("recordList", "index");
    }

}

?>