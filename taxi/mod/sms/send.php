﻿<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<?php
function send_sms( $param_google_username , $param_google_password,$param_title,$param_content ){
 
	/**
	 * @Include Zend_Loader
	 */
	require_once 'Zend/Loader.php';
 
	/**
	 * @Load Zend_Gdata
	 */
	Zend_Loader::loadClass('Zend_Gdata');
 
	/**
	 * @Load Zend_Gdata_AuthSub
	 */
	Zend_Loader::loadClass('Zend_Gdata_AuthSub');
 
	/**
	 * @Load Zend_Gdata_ClientLogin
	 */
	Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
 
	/**
	 * @Load Zend_Gdata_HttpClient
	 */
	Zend_Loader::loadClass('Zend_Gdata_HttpClient');
 
	/**
	 * @Load Zend_Gdata_Calendar
	 */
	Zend_Loader::loadClass('Zend_Gdata_Calendar');
 
	// Parameters for ClientAuth authentication
	$service = Zend_Gdata_Calendar::AUTH_SERVICE_NAME;
	$user = $param_google_username ;
	$pass =$param_google_password ;
 
	// Create an authenticated HTTP client
	$client = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $service);
 
	// Create an instance of the Calendar service
	$service = new Zend_Gdata_Calendar($client);
 
	// Create a new entry using the calendar service's magic factory method
	$event= $service->newEventEntry();
 
	// Populate the event with the desired information
	// Note that each attribute is crated as an instance of a matching class
	$event->title = $service->newTitle( $param_title );
 
	//$event->where = array($service->newWhere("Mountain View, California"));
	$event->content = $service->newContent( $param_content );
 
	// Set the date using RFC 3339 format.
	$startDate = date( "Y-m-d" );//"2009-01-15";
	$startTime = date( "H:i" , strtotime("+3 minutes") );
	$endDate = date( "Y-m-d" );
	$endTime = date( "H:i" , strtotime("+6 minutes") );
	$tzOffset = "+07";
 
	$when = $service->newWhen();
	$when->startTime = "{$startDate}T{$startTime}:00.000{$tzOffset}:00";
	$when->endTime = "{$endDate}T{$endTime}:00.000{$tzOffset}:00";
 
	// Create a new reminder object. It should be set to send an email
	// to the user 10 minutes beforehand.
	$reminder = $service->newReminder();
	$reminder->method = "sms";
	$reminder->minutes = "2";
 
	$when->reminders = array($reminder);
 
	$event->when = array($when);
 
	//****************************************************************
	// A copy of the event as it is recorded on the server is returned
	if ($newEvent = $service->insertEvent($event)){
 
		return true ;
	}else{
 
		return false;
	}
 
}
$topic=$_POST['topic'];
$name=$_POST['name'];
$to=$_POST['to'];
$sms=$_POST['sms'];
$djmail = "dee-day@hotmail.com"; // password ????
// password ????
$google_username = "dee-day@hotmail.com"; // username ????
$google_password = "5265851"; // password ????
$title = tis2utf8("เพลง :: $topic");// username ????
$content =tis2utf8("ชื่อเพลง : $topic <br>
ผู้ขอเพลง: $name <br>
ข้อความ: $sms"); //sms message 

$from = "www.radiohealthy.net"; // password ????

$show ="รายละเอียดมีดังนี้...
เพลง : $name
ผู้ขอเพลง : $topic
ข้อความ : $sms
-------------------------
ขอบคุณที่ให้ความใส่ใจเราครับ
www.radiohealthy.net"; //sms message ???

$head= "ขอบคุณครับที่ขอเพลง $topic เข้ามา"; // username ????
$headdj= "มีคนขอเพลง $topic เข้ามา"; // username ????

$content2 ="เพลง : $name
ผู้ขอเพลง: $topic
ข้อความ: $sms"; //sms message 
 
//  SMS
send_sms( $google_username , $google_password , $title ,$content );
//  คนฟัง
mail($to, $head, $show, $from);
//  ดีเจ
mail($djmail, $headdj, $show);
 
?>