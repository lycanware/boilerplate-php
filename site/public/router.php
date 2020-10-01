<?php
$URL = $_SERVER['REQUEST_URI'];

switch ($URL) {
    case '':
        require __DIR__ . '/controller/home.php';
        break;

    case '/':
        require __DIR__ . '/controller/home.php';
        break;

    case '/about/':
        require __DIR__ . '/controller/about.php';
        break;

    case '/api/':
        // Call this with POST data, eg: name = 'YOUR NAME'
        require __DIR__ . '/controller/api.php';
        break;

        // Example using regEx
        //      case (preg_match('/^\/api\/get\/user\/([a-z\-]+)/', $URL, $URL_Params) ? true : false):
        //      Use $URL_Params[1] to get the name
}

?>