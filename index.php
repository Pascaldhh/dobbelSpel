<?php
define('DS', DIRECTORY_SEPARATOR);

require_once(__DIR__.DS.'database'.DS.'db.php');
require_once('functions/getScore.php');
$page = 'home';

if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = $_GET['page'];
}

include_once(implode(DS, [__DIR__, 'header.php']));
include_once(implode(DS, [__DIR__, 'views', $page.'.php']));
include_once(implode(DS, [__DIR__, 'footer.php']));
