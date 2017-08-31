<?php  
require_once 'EventFacade.php';

$eventSampleObject = getSampleData();

$eventFacade = new EventFacade($eventSampleObject);
$eventFacade->createNewEvent();

function getSampleData(){
	$obj = new StdClass();
	$obj->id = 402;
	$obj->title = 'Internation PHP Conference';
	$obj->startDate = '27 Sep, 2017';
	$obj->endDate = '29 Sep, 2017';
	$obj->phone = '081-99-12345';
	$obj->venue = 'XYZ Auditorium Hall';
	$obj->city = 'Chicago';
	$obj->latitude = 33.007;
	$obj->longitude = 77.007;

	return $obj;
}
?>