#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		while ($i < $argc)
		{
			$string .= " ".$argv[$i]." ";
			$i++;
		}
		$tab = trim($string);
		while ((strpos($tab, "  ")) == TRUE)
			$tab = str_replace("  ", " ", $tab);
		$tab = explode(" ", $tab);
		sort($tab);
		foreach ($tab as $Word)
		echo "$Word\n";
	}
?>
