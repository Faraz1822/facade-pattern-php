<?php 
class Address{
	private $id;	
	private $venue;
	private $city;
	private $latitude;
	private $longitude;

	function __construct($_id, $_venue, $_city, $_latitude, $_longitude){
		$this->id = $_id;
		$this->venue = $_venue;
		$this->city = $_city;
		$this->latitude = $_latitude;
		$this->longitude = $_longitude;
	}

	function add(){
		// Insert Address to Database
		echo "Address inserted Successfully<br><br>";
	}
} 
?>