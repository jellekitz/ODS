<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT .'/views');
//define('BASE_URL', 'http://localhost/leerjaar2/periode3/PRO/ODS/cms/');
define('BASE_URL', 'http://19746.hosts.ma-cloud.nl/bewijzenmap/leerjaar2/periode2/ODS/cms/');

//$db = new PDO('mysql:host=localhost;dbname=ods', 'root', '');
$db = new PDO('mysql:host=127.0.0.1;dbname=19746_myBand', '19746_Jelle', 'ingemar1');

require 'functions.php';

