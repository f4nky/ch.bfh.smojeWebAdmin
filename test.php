<?php
include_once('class/Database.php');
$db = Database::connect();

$query = 'SELECT st.id AS stid, st.name AS stname, se.id AS seid, se.name AS sename ' .
		 'FROM station st ' .
		 'INNER JOIN sensor se ON (st.id = se.station_id) ' .
		 'ORDER BY st.id;';

$result = $db->query($query);

while($row = $result->fetch_assoc()) {
	print_r($row);
}