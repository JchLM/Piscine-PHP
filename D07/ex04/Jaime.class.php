<?php

Class Jaime extends Lannister {
	public function sleepWith($a){
		if ($a instanceof Cersei){
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		}
		else if ($a instanceof Lannister){
			print("Not even if I'm drunk !" . PHP_EOL);
		}
		else if ($a instanceof Sansa){
			print("Let's do this." . PHP_EOL);
		}
	}
}
?>