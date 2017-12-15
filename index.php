<?php
	
class Vehicle {   

public function f1(){
		  echo 'f1';
	}
}

class Car {
	
	public function f2() {
		
		 echo 'f2';
	} 
   
}

class Toyota extends Car {
	
	public function f3() {
		
		 echo 'f3';
	} 
   
}

$obToyota = new Toyota();
$obToyota->f1();



?>

