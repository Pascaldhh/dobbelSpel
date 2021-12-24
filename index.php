<?php
// functies defineren
define('DS', DIRECTORY_SEPARATOR);

// Require database en functie get score
require_once(implode(DS, [__DIR__, 'database', 'db.php']));
require_once(implode(DS, ['functions', 'getScore.php']));

// page handler met get parameters
$page = 'home';
if(isset($_GET['page']) && !empty($_GET['page']))
{
    $page = $_GET['page'];
}

// including header en page
include_once(implode(DS, [__DIR__, 'header.php']));
include_once(implode(DS, [__DIR__, 'views', $page.'.php']));
include_once(implode(DS, [__DIR__, 'footer.php']));
