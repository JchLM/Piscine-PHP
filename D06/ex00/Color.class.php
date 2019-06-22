<?php
Class Color {
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public $rgb = 0;
	public static $verbose = false;
	function __construct(array $color){
		if(isset($color['red'], $color['green'], $color['blue']) && count($color) == 3){
			$this->red = $color['red']& 255;
			$this->green = $color['green']& 255;
			$this->blue = $color['blue']& 255;
		}
		elseif (array_key_exists('rgb', $color) && count($rgb) == 1) {
			$this->red = intval($color['red']) >> 16 & 255;
			$this->blue = intval($colorp['blue']) >> 8 & 255;
			$this->green = intval($color['green']) & 255;
		}
		if(self::$verbose == true)
			print("$this constructed.".PHP_EOL);
		return;
	}
	function  __toString(){
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}
	function __destruct(){
		if(self::$verbose == true)
			print("$this constructed.".PHP_EOL);
		return;
	}
	public static function doc(){
		return file_get_contents("Color.doc.txt");
	}
	function add(Color $rhs){
		return new Color(array('red' => $this->red + $rhs->red, 'green' => $this->green + $rhs->green, 'blue' => $this->blue + $rhs->blue));
	}
	function sub(Color $rhs){
		return new Color(array('red' => $this->red - $rhs->red, 'green' => $this->green - $rhs->green, 'blue' => $this->blue - $rhs->blue)); 
	}
	function mult($f){
		return new Color(array('red' => $this->red * $f, 'green' => $this->green * $f, 'blue' => $this->blue * $f)); 
	}
}