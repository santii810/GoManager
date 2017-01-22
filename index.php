<?php
// file: index.php

/**
* Default controller if any controller is passed in the URL
*
* Controller por defecto si no se le pasa ninguno en la URL
 */
define("DEFAULT_CONTROLLER", "status");

/**
 * Default action if any action is passed in the URL
 *
 * Accion por defecto en caso de que no se le pase en la URL
 */
define("DEFAULT_ACTION", "index");


function run() {
  // invoke action!
  try {
    if (!isset($_GET["controller"])) {
      $_GET["controller"] = DEFAULT_CONTROLLER; 
    }
    
    if (!isset($_GET["action"])) {
            $_GET["action"] = DEFAULT_ACTION;
    }
    
    // Here is where the "magic" occurs.
    // URLs like: index.php?controller=posts&action=add
    // will provoke a call to: new PostsController()->add()
    
    // Instantiate the corresponding controller
    $controller = loadController($_GET["controller"]);
    
    // Call the corresponding action
    $actionName = $_GET["action"];
    $controller->$actionName(); 
  } catch(Exception $ex) {
    //uniform treatment of exceptions
    die("An exception occured!!!!!".$ex->getMessage());   
  }
}


function loadController($controllerName) {  
  $controllerClassName = getControllerClassName($controllerName);
  
  require_once(__DIR__."/controller/".$controllerClassName.".php");  
  return new $controllerClassName();
}


function getControllerClassName($controllerName) {
  return strToUpper(substr($controllerName, 0, 1)).substr($controllerName, 1)."Controller";
}

//run!
run();

?>