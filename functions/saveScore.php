<?php
// requiring database file om db class beschikbaar te stellen 
require_once(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__, 1), 'database', 'db.php']));

$db->Create('score', 'name, score', "'".$_POST['name']."', '".$_POST['sum']."'");
