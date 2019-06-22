<?php
Class Vertex{

	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 1.0;
	private $_color;
	public static $verbose = False;

	function __construct(array $abs){
		if (array_key_exists('x', $abs) && array_key_exists('y', $abs) && array_key_exists('z', $abs)){
     		$this->_x = $abs['x'];
      		$this->_y = $abs['y'];
     		$this->_z = $abs['z'];
		}
		if (array_key_exists('w', $abs))
			$this->_w = $abs['w'];	
		if (array_key_exists('color', $abs))
			$this->_color = $abs['color'];
		else
			$this->_color = (new Color( array('red' => 255, 'green' => 255, 'blue' => 255)));

		if (self::$verbose == true)
			print("$this constructed".PHP_EOL);
		return;
	}
	function __toString(){
		return sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w:%.2f, %s )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
	}
	function __destruct(){
		if (self::$verbose == true)
			print("$this constructed".PHP_EOL);
		return;
	}
	public static function doc(){
		return file_get_contents("Vertex.doc.txt");
	}
}
?>