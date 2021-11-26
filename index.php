<?php
require "item/router.php";
$router = $_SERVER["REQUEST_URI"];
$view = new routing;
$view->parser($router);
$view->default = "index.json";
$view->styles = "styles_index.json";