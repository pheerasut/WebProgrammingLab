<?php  
class person {
	var $name; //step3
	public $height;//step15
	protected $social_insurance;
	private $pinn_number;
	function __construct($persons_name) { //step 13
	$this->name = $persons_name;   
	}
	function set_name($new_name) {  //step 4-5
	$this->name = $new_name;  
	} 
	function get_name() {  
	return $this->name;  
	}
	private function get_pinn_number(){//step 17
	return  $this->pinn_number;    
	} 
	} //step 2
	// 'extends' คือ key ที่บอกว่ายอมให้มีการสืบทอดออกมาได้ 
class employee extends person {//step 18
	function __construct($employee_name) {
		$this->set_name($employee_name);  
	}
	}

class person { 
var $name; 
protected function set_name($new_name) {
	if (name != "Jimmy Two Guns") {
		$this->name = strtoupper($new_name);  
		}  
	} 
function get_name() {  
	return $this->name;  
	}
} 

class employee extends person {
	public function set_name($new_name) { 
	if ($new_name == "Stefan Sucks") {
		$this->name = $new_name;  
		}  
	}
} 	
?>
