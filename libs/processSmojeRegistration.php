<?php

if (isset($_POST['btnSave'])) {
	include_once('../class/Database.php');

	$db = Database::getInstance();
	$query = 'INSERT INTO station (name, description, url_netmodule, url_sensor, url_tissan) '.
			 'VALUES (?, ?, ?, ?, ?);';

	$name = $_POST['name'];
	$description = $_POST['desc'];
	$urlNetmodule = $_POST['url_netmodule'];
	$urlSensors = $_POST['url_sensor'];
	$urlTissan = $_POST['url_tissan'];

	if ($stmt = $db->prepare($query)) {
		$stmt->bind_param('sssss', $name, $description, $urlNetmodule, $urlSensors, $urlTissan);
	}
	$stmt->execute();
}
