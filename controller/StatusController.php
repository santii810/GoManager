<?php
 // File: /controller/CandyController.php
require_once(__DIR__."/../controller/BaseController.php");



/**
* Class CandyController
*/
class CandyController extends BaseController
{
	
  /**
   * Reference to the CandyMapper to interact
   * with the database
   * 
   * @var CandyMapper
   */
  private $candyMapper;  

  function __construct()
  {
  	parent::__construct();

  	$this->candyMapper = new CandyMapper();          

  }

  function index(){

    // obtain the data from the database
  	$candys = $this->candyMapper->findAll();    
  	
    // put the array containing Post object to the view
  	$this->view->setVariable("candys", $candys);    
  	
    // render the view (/view/posts/index.php)
  	$this->view->render("candys", "index");
  }
}

?>