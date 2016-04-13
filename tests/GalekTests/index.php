<?php
// Uncomment this line if you must temporarily take down your site for maintenance.
// require __DIR__ . '/.maintenance.php';

define('WWW_DIR', dirname(__FILE__));

$container = require __DIR__ . '/app/bootstrap.php';
$container->getByType('Nette\Application\Application')->run();



