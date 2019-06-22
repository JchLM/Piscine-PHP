<?php
if ($argc > 1)
{
    $tab = trim($argv[1]);
    $tab = preg_replace('/\s+/', ' ', $tab);
    echo $tab."\n";

}
?>