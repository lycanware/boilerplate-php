<?php
namespace bin\Lycanware\Core\Spam;
use bin\Lycanware\Core\Config;

abstract class BlockSpam
{
    public static function blockReferrerSpam()
    {
        if (!isset($_SERVER["HTTP_REFERER"])) { return; }

        $lines = file(Config\Web::WEB_ROOT.'bin/Lycanware/Core/Spam/spam-list.txt');
       
        foreach ($lines as $line_num => $line) {
            if ($line[0] == "#") { continue; }
            if ($_SERVER["HTTP_REFERER"] == $line){
                http_response_code(403);
                ob_end_clean();
                exit;
            }

        }
    }  
}

?>