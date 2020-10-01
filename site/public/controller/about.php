<?php
use bin\Lycanware\Core\Config;

$masterPage = file_get_contents(Config\Web::WEB_ROOT . 'view/master.html');
$view = file_get_contents(Config\Web::WEB_ROOT . 'view/about.html');

$output = str_replace('{{.View}}', $view, $masterPage);
$output = str_replace('{{.MetaTitle}}', "my page title", $output);
$output = str_replace('{{.MetaDescription}}', "my meta description", $output);

echo $output;

?>
