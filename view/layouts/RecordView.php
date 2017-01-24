<?php


require_once (__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance ();
$currentuser = $view->getVariable ( "currentusername" );
require_once(__DIR__."/HeadView.php");



