<?php
	if ($argc > 1)
	{
		$html = file_get_contents($argv[1]);
		$html = preg_replace('/<a .+?<\/a>/sei', 'strtoupper("$0")', $html);
		$html = preg_replace('/<.+?>/sei', 'strtolower("$0")', $html);
		$html = preg_replace('/(?<=title=["\'])[^"\']+/sei', 'strtoupper("$0")', $html);
		print($html);
	}
?>