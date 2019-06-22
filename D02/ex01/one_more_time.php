<?php
date_default_timezone_set('Europe/Paris');
if ($argc > 1)
{
  if (!preg_match('/^([Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche) [0-9][0-9]? ([Jj]anvier|[Ff][eé]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uû]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd][ée]cembre) [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}$/', $argv[1]))
  {
    echo "Wrong Format\n";
    return 0;
  }
  $tab = explode(' ', $argv[1]);
  $pattern = array('/[Jj]anvier/', '/[Ff][eé]vrier/', '/[Mm]ars/', '/[Aa]vril/', '/[Mm]ai/', '/[Jj]uin/', '/[Jj]uillet/', '/[Aa]o[uû]t/', '/[Ss]eptembre/', '/[Oo]ctobre/', '/[Nn]ovembre/', '/[Dd][ée]cembre/');
  $replace = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
  $tab[2] = preg_replace($pattern, $replace, $tab[2]);
  $sec = strtotime("$tab[3]-$tab[2]-$tab[1] $tab[4]");
  if (!$sec){
    echo "Wrong Format\n";
    return 0;
  }
  echo $sec."\n";
}
?>