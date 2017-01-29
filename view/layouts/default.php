<?php
// file: view/layouts/default.php
require_once (__DIR__ . "/../../core/ViewManager.php");
$view = ViewManager::getInstance();
$currentuser = $view->getVariable("currentusername");
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $view->getVariable("title", "no title") ?></title>
        <meta charset="utf-8">
        
        <!--My styles and scripts-->
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
        <script type="text/javascript" src="./assets/javascript/candyControl.js"></script>

        
         <!--JQuery CDN-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        
        <!--Bootstrap assets-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!--end bootstrap assets -->

        <?= $view->getFragment("css") ?>
        <?= $view->getFragment("javascript") ?>
    </head>
    <body>        
        <header>
            <h1>Blog</h1>
            <!--            <nav id="menu" style="background-color: grey">
                            <ul>
                                <li><a href="index.php?controller=posts&amp;action=index">Posts</a></li>
            
            <?php // if (isset($currentuser)): ?>
                                        <li><?php echo "Bienvenido" . $currentuser ?>
                                            <a href="index.php?controller=users&amp;action=logout">(Logout)</a>
                                        </li>
                
            <?php // else: ?>
                                        <li><a href="index.php?controller=users&amp;action=login"><?php echo "Login" ?></a></li>
            <?php // endif; ?>		</ul>
                        </nav>-->
        </header>

        <main>
            <div id="flash">
                <?= $view->popFlash() ?>
            </div>

            <?= $view->getFragment(ViewManager::DEFAULT_FRAGMENT) ?>
        </main>

    </body>
</html>
