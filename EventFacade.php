<?php
require_once 'classes/Address.php';
require_once 'classes/ShortenUrl.php';
require_once 'classes/Event.php';

class EventFacade{
	private $eventObj;

	public function __construct($eventObj) {
		$this->eventObj = $eventObj;
	}
	public function createNewEvent(){
		$this->_addAddress();
		$this->_addShortenUrl();
		$this->_addEventInfo();
	}

	private function _addAddress(){
		$address = new Address(
						$this->eventObj->id, 
						$this->eventObj->venue, 
						$this->eventObj->city, 
						$this->eventObj->latitude, 
						$this->eventObj->longitude
					);
		$address->add();
	}
	private function _addShortenUrl(){
		$shortenUrl = new ShortenUrl(
						$this->eventObj->id, 
						$this->eventObj->title
					);
		$shortenUrl->add();
	}
	private function _addEventInfo(){
		$eventInfo = new Event(
						$this->eventObj->id, 
						$this->eventObj->title,
						$this->eventObj->startDate,
						$this->eventObj->endDate,
						$this->eventObj->phone
					);
		$eventInfo->add();
	}
}
?>