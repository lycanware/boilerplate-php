<?php
namespace bin\Lycanware\Core\Config;

abstract class Web
{
    const DEV_MDOE          =   true;
    const LIVE_MODE         =   false;

    // eg. "/home/username/example.com/public/"
    const WEB_ROOT          =   "<ROOT_TO_PUBLIC_FOLDER_ON_SERVER>";
    
    // eg. "https://www.example.com"
    const WEB_URL           =   "<FULL_WEBSITE_URL>";
}

?>