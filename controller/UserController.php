<?php

// File: /controller/CandyController.php
require_once(__DIR__ . "/../controller/BaseController.php");

/**
 * Class CandyController
 */
class UserController extends BaseController {

    /**
     * Reference to the CandyMapper to interact
     * with the database
     * 
     * @var CandyMapper
     */
    function __construct() {
        parent::__construct();
    }

    public function login() {
        $_SESSION[CURRENT_USERNAME] = "Nombre";
        $this->view->redirect(CONTROLLER_RECORD, ACTION_SHOW);
    }

}