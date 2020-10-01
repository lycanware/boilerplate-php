<?php
namespace bin\Lycanware\Core\Bootstrap;
use bin\Lycanware\Core\SSL\Enforce;

class Init
{
    function __construct()
    {
        ob_start();
        Enforce::https();
    }

    function __destruct()
    {
        ob_end_flush();
    }
}

?>