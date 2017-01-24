<?php
 // File: /controller/CandyController.php
require_once(__DIR__."/../controller/BaseController.php");

require_once(__DIR__."/../model/StatusModel.php");
require_once(__DIR__."/../mapper/StatusMapper.php");

/**
* Class CandyController
*/
class StatusController extends BaseController
{
	
  /**
   * Reference to the CandyMapper to interact
   * with the database
   * 
   * @var CandyMapper
   */
  private $statusMapper;  

  function __construct()
  {
  	parent::__construct();

  	$this->statusMapper = new CandyMapper();          

  }

  function index(){

    // obtain the data from the database
  	$statuss = $this->statusMapper->findAll();    

    // put the array containing Post object to the view
  	$this->view->setVariable("statuss", $statuss);    

    // render the view (/view/posts/index.php)
  	$this->view->render("statuss", "index");
  }
}

?>