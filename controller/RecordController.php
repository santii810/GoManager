<?php
 // File: /controller/CandyController.php
require_once(__DIR__."/../controller/BaseController.php");

require_once(__DIR__."/../model/RecordModel.php");
require_once(__DIR__."/../mapper/RecordMapper.php");

/**
* Class CandyController
*/
class RecordController extends BaseController
{
	
  /**
   * Reference to the CandyMapper to interact
   * with the database
   * 
   * @var CandyMapper
   */
  private $recordMapper;  

  function __construct()
  {
  	parent::__construct();

  	$this->recordMapper = new RecordMapper();          

  }

  function index(){

    // obtain the data from the database
  	$recordList = $this->recordMapper->getAll();    

    // put the array containing Post object to the view
  	$this->view->setVariable("recordList", $recordList);    

    // render the view (/view/posts/index.php)
  	$this->view->render("recordList", "index");
  }
}

?>