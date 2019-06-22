#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$tab = trim($argv[1]);
		while ((strpos($tab, "  ")) == TRUE)
			$tab = str_replace("  ", " ", $tab);
		echo($tab."\n");
	}
?>