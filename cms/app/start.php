<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT .'/views');
define('BASE_URL', 'http://localhost/leerjaar2/periode3/PRO/ODS/cms/');

$db = new PDO('mysql:host=localhost;dbname=ods', 'root', '');

require 'functions.php';

