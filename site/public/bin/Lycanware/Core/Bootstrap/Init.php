<?php
namespace bin\Lycanware\Core\Bootstrap;

class Init
{
    function __construct()
    {
        ob_start();
    }

    function __destruct()
    {
        ob_end_flush();
    }
}

?>