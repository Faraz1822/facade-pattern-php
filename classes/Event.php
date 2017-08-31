<?php  
class Event{
	private $id;	
	private $title;
	private $startDate;
	private $endDate;
	private $phone;

	function __construct($_id, $_title, $_startDate, $_endDate, $_phone){
		$this->id 		 = $_id;
		$this->title 	 = $_title;
		$this->startDate = $_startDate;
		$this->endDate 	 = $_endDate;
		$this->phone 	 = $_phone;
	}

	function add(){
		// Insert Event Info to Database
		echo "Event inserted Successfully<br><br>";
	}
}
?>