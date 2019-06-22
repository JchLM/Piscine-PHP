#!/usr/bin/php
<?php
	$c = curl_init("https://www.42.fr/");

	$str = curl_exec($c);

	echo "$str";
?>