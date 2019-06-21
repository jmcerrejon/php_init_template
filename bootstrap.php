<?php

    require 'vendor/autoload.php';
    require 'config/env.php';

    use Illuminate\Database\Capsule\Manager as Capsule;

    $dbParams = require 'config/database.php';
    $capsule = new Capsule;
    $capsule->addConnection($dbParams);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();