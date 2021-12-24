<?php 
function getScore($time)
{
    global $db;
    if($time == 'best')
    {
        $rows = $db->Read('score', '*', '1', 'ORDER BY score DESC LIMIT 1');
    } 
    else 
    {
        $rows = $db->Read('score', '*', 'DATE_SUB(CURRENT_TIMESTAMP(),INTERVAL '.$time.') <= created_at', 'ORDER BY score DESC LIMIT 1');
    }

    if(!$rows)
    {
        return 'Er is geen record om te laten zien';
    }
    return $rows[0]->name.' met de score '.$rows[0]->score;
}
