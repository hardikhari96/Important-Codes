<?php

class flowers {

	public static $name= "this is flower class";
	public $nonstat= "this is flower class";

	public function rose (){


		echo "this is rose";
	}

	public static function lily(){

		echo "this is lily";
	}


}


flowers::lily(); //calling functions
echo "<br>";
flowers::rose();  // you can call non static function but not non static property of class using scope resolution `::`
echo "<br>";

echo flowers::$name; // accessing property of static value only , we 
//this is not possible in non static property
echo flowers::$nonstat;

?>