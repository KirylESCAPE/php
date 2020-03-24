<?php

require 'Controller/Controller.php';
require 'Model/Model.php';
require 'View/View.php';

$model = new Model();
$controller = new Controller($model);
$phpView = new View($model);

if (isset($_GET['action'])) $controller->{$_GET['action']}($_POST); //convert($_POST)
echo $phpView->output();