<?php
use bin\Lycanware\Core;

require_once __DIR__ . '/bin/Lycanware/Core/Bootstrap/Autoload.php';
$lwCore = new Core\Bootstrap\Init();
require_once 'router.php';
$lwCore = null;

?>