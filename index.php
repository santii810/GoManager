<?php

// file: index.php
require_once './core/Constraints.php';

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
    } catch (Exception $ex) {
        //uniform treatment of exceptions
        die("An exception occured!!!!!" . $ex->getMessage());
    }
}

function loadController($controllerName) {
    $controllerClassName = getControllerClassName($controllerName);

    require_once(__DIR__ . "/controller/" . $controllerClassName . ".php");
    return new $controllerClassName();
}

function getControllerClassName($controllerName) {
    return strToUpper(substr($controllerName, 0, 1)) . substr($controllerName, 1) . "Controller";
}

//run!
run();
?>