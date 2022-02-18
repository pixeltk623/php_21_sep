<?php 
	
	/*trait message1 {

		public function greeting() {
			echo "Welcome To Vadodara";
		}

	}

	trait message2 {

		public function greeting1() {
			echo "Welcome To Surat";
		}

	}

	trait message3 {

		public function greeting3() {
			echo "Welcome To Patna";
		}

	}

	trait message4 {

		public function greeting4() {
			echo "Welcome To kolkata";
		}

	}

	trait message5 {

		public function greeting5() {
			echo "Welcome To Ranchi";
		}

	}

	class Employee {

		public function __construct() {
			echo "This is Construct";
		}


		 use message1, message2, message3;

	}


	$object = new Employee();

	echo "<pre>";

	print_r($object->greeting());
	print_r($object->greeting1());
	print_r($object->greeting3	());
*/

// class Base {

//     public function sayHello() {
//         echo 'Hello ';
//     }
// }

// class Base2 {

// 	public function sayHello() {
//         echo 'Sharvan ';
//     }
// }



// trait SayWorld {
//     public function sayHello() {
//         parent::sayHello();
//         echo 'World!';
//     }
// }

// class MyHelloWorld extends Base2{
//     use SayWorld;
// }

// // $o = new MyHelloWorld();
// // $o->sayHello();

// $object = new MyHelloWorld();

// echo "<pre>";

// print_r($object->sayHello());


// Program to understand use of
// final keyword for methods
// final class Base {
	
// 	// Final method
// 	function printdata() {
// 		echo " Base class final printdata function";
// 		echo "<br>";
// 	}
	
// 	// Non final method
// 	function nonfinal() {
// 		echo "\n This is nonfinal function of base class";
// 		echo "<br>";
// 	}
// }

// // Class that extend base class
// class Derived extends Base {
	

// 	// Inheriting method nonfinal
// 	function nonfinal() {
// 		echo "\n Derived class non final function";
// 		echo "<br>";
// 	}
	
// 	// Here printdata function can
// 	// not be overridden
// }

// $obj = new Derived;
// $obj->printdata();
// $obj->nonfinal();


class Foo {
    public static function aStaticMethod() {
        echo "string";
    }
}

	Foo::aStaticMethod();
	$classname = 'Foo';
	$classname::aStaticMethod();
?>