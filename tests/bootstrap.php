<?php
require '../vendor/autoload.php';   # načte Composer autoloader

Tester\Environment::setup();                # inicializace Nette Tester

define('TMP_DIR', '/tmp/app-tests');
?>