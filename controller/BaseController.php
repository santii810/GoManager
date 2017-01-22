<?php
//file: controller/BaseController.php
require_once(__DIR__."/../core/ViewManager.php");

/**
 * Class BaseController
 *
 * Implements a basic super constructor for
 * the controllers in the Blog App.
 * Basically, it provides some protected
 * attributes and view variables.
 *
 * Implementa un supercontructo basico para todos los controladores de la app
 * Basicamente proporciona algunos atributos protected y la variable view
 * 
 * @author lipido <lipido@gmail.com>
 */
class BaseController {

  /**
   * The view manager instance
   * 
   * Instancia del view manager
   * @var ViewManager
   */
  protected $view;
  
  /**
   * The current user instance
   * 
   * Instancia del usaurio actual
   * @var User
   */
  protected $currentUser;
  
  public function __construct() {

    $this->view = ViewManager::getInstance();

    // get the current user and put it to the view
    if (session_status() == PHP_SESSION_NONE) {      
     session_start();
   }

   if(isset($_SESSION["currentuser"])) {

    $this->currentUser = new User($_SESSION["currentuser"]);      
      //add current user to the view, since some views require it
    $this->view->setVariable("currentusername", 
      $this->currentUser->getUsername());
  }     
}
}
