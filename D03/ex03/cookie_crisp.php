<?php
foreach ($_GET as $key => $elem) {
	if ($key == "action")
		$action = $elem;
	else if ($key == "name")
		$name = $elem;
	else if ($key == "value")
		$value = $elem;
}
if ($action == "set")
	setcookie($name, $value, time() + 3600);
	else if ($action == "get")
		echo $_COOKIE[$name]."\n";
	else if ($action == "del")
	setcookie($name, "", time() -3600 * 24);
?>