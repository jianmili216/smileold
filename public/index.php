<?php


use Yaf\Application;

//define('BASE_PATH', realpath(dirname(__FILE__) . "/../"));

define('APPLICATION_PATH',dirname(__DIR__) );
define('BASE_URL',"/static/admin" );

$application = new Yaf\Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
