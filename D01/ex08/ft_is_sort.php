#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$sort = $tab;
	sort($sort);
	$flag = 0;
	$i = 0;
	$nb_word = count($sort);
	while ($i < $nb_word)
	{
		if ($sort[$i] != $tab[$i])
			$flag = 1;
		$i++;
	}
	if ($flag == 1)
		return(0);
	else
		return(1);
}
?>

