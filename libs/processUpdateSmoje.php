<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	include_once('../class/Database.php');

	$db = Database::getInstance();
	
	updateGeneralData($db);
	updateSensorDelays($db);
}

function updateGeneralData($db) {
	$query = 'UPDATE station '.
			 'SET name=?, description=?, url_netmodule=?, url_sensor=?, url_tissan=? '.
			 'WHERE id=?;';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['desc'];
	$urlNetmodule = $_POST['url_netmodule'];
	$urlSensors = $_POST['url_sensor'];
	$urlTissan = $_POST['url_tissan'];

	if ($stmt = $db->prepare($query)) {
		$stmt->bind_param('sssssi', $name, $descrition, $urlNetmodule, $urlSensors, $urlTissan, $id);
	}
	$stmt->execute();
}

function updateSensorDelays($db) {
	$delays = $_POST['delay'];

	foreach ($delays as $sensorId => $value) {
		$query = 'UPDATE sensor SET delay=? WHERE id=?;';
		if ($stmt = $db->prepare($query)) {
			$stmt->bind_param('ii', $value, $sensorId);
		}
		$stmt->execute();
	}
}