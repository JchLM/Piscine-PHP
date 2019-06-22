<?php

Class Tyrion extends Lannister{
	function sleepWith($a){
		if ($a instanceof Lannister)
			print("Not even if I'm drunk !" . PHP_EOL);
		else if ($a instanceof Sansa)
			print("Let's do this." . PHP_EOL);
	}
}
?>