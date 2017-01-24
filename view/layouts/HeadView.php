<!DOCTYPE html>
<html>
<head>
<title><?php $view->getVariable("title", "no title") ?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css">
<script src="index.php?controller=language&amp;action=i18njs">
	</script>
	<?php $view->getFragment("css")?>
	<?php $view->getFragment("javascript")?>
</head>
hola