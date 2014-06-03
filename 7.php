<?php
	class Square{
		public $x = 0;
		public $y = 0;
		public $edge = 1;
		public $angle = 45;
		
		function getX() {return $this->x;}
		function getY() {return $this->y;}
		function getEdge() {return $this->edge;}
		function rotate($angle, $direction){
			if ($direction == 0) $this->angle += $angle;
			if ($direction == 1) $this->angle -= $angle;
		}	
	}
	$square = new Square();
	echo "Текущее значение угла: ".$square->angle."<br>";
	$square->rotate(45, 0);
	echo "Значение угла после поворота: ".$square->angle."<br>";
?>
