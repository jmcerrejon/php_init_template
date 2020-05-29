<?php

	define('BASE_PATH', dirname(__DIR__, 1));

    require BASE_PATH.'/vendor/autoload.php';
    require BASE_PATH.'/config/env.php';

    use Illuminate\Database\Capsule\Manager as Capsule;

    $dbParams = require BASE_PATH.'/config/database.php';
    $capsule = new Capsule;
    $capsule->addConnection($dbParams);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();