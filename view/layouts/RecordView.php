<?php


require_once (__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance ();
$currentuser = $view->getVariable ( "currentusername" );
require_once(__DIR__."/HeadView.php");
?>
<body>	
	<nav class="fixed-nav-bar">

	</nav>

	<div id="record_table" class="container">
		<div class="background_blue row">
			<div class="background_red col-md-4">
				p
			</div>
			<div class="background_green col-md-4">
				p
			</div>
			<div class="background_red col-md-4">
				p
			</div>
		</div>
	</div>


</body>
