<?php
namespace bin\Lycanware\Core\Bootstrap;
use bin\Lycanware\Core\SSL\Enforce;
use bin\Lycanware\Core\Spam\BlockSpam;

class Init
{
    function __construct()
    {
        ob_start();
        Enforce::https();
        BlockSpam::blockReferrerSpam();
    }

    function __destruct()
    {
        ob_end_flush();
    }
}

?>