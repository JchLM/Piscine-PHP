#!/usr/bin/php
<?php
	function ft_split($s1)
	{
		$ta = explode(" ", $s1);
		$tab = array_filter($ta, 'strlen');
		if ($s1 != NULL)
			sort($tab);
		return($tab);
	}
?>