<?php
require_once (__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance();
$currentuser = $view->getVariable("currentusername");
require_once(__DIR__ . "/HeadView.php");
?>
<body>	
    <nav class="fixed-nav-bar">

    </nav>


    <?php foreach ($view->getVariable("recordList") as $key => $value): ?>;
        <div id="record-table" class="container">
            <div class="background_blue row">
                <div class="background_red col-md-4">
                    <img src="./assets/images/<?php echo $value->getId(); ?>.png" class="pokemon-image">
                </div>
                <div class="background_green col-md-4">
                    p
                </div>
                <div class="background_red col-md-4">
                    p
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</body>
