<?php 
	
	Interface Shape {

		public function calArea();

	}

	Interface Mail {
		public function sendEmail();
	}

	class Employee implements Mail{

		public function sendEmail() {
			echo "string";
		}


	}


	class Square implements Shape{

		public $side;

		public function __construct($side) {
			$this->side = $side;
		}
		
		public function calArea() {
			return ($this->side*$this->side);
		}
	}

	class Rectangle implements Shape{

		public $length;
		public $width;
		
		public function __construct($length, $width) {
			$this->length = $length;
			$this->width = $width;
		}

		public function calArea() {
			return ($this->length*$this->width);
		}
	}

	class Triangle implements Shape{

		public $base;
		public $height;
		
		public function __construct($base, $height) {
			$this->base = $base;
			$this->height = $height;
		}
		
		public function calArea() {
			return (($this->base*$this->height)/2);
		}     
	}

	


	$objS = new Square(4);
	$objR = new Rectangle(4,8);
	$objT = new Triangle(5,10);

	// $object = new Employee();

	// echo "<pre>";

	// print_r($object);
	// print_r($obj);


	echo $objS->calArea();
	echo "<br>";
	echo $objR->calArea();
	echo "<br>";
	echo $objT->calArea();
?>