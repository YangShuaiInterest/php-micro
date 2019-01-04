<?php

use Illuminate\Database\Capsule\Manager as Capsule;

//Base Path
define('BASEPATH', dirname(__DIR__));

//Display Errors
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

//Autoload
require_once BASEPATH . '/vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require_once BASEPATH . '/config/database.php');
$capsule->bootEloquent();

//Routes
require_once BASEPATH . '/routes/web.php';

