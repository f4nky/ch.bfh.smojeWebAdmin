<?php
include_once('class/Database.php');
$db = Database::getInstance();

$queryStations = 'SELECT * FROM station ORDER BY id';
$resultStations = $db->query($queryStations);
while($row = $resultStations->fetch_assoc()) {
	$stations[] = $row;
}

$querySensors = 'SELECT * FROM sensor ORDER BY station_id, stype_id';
$resultSensors = $db->query($querySensors);
?>

<?php include_once('header.inc.php'); ?>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Smojen administrieren</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-pills">
						<?php foreach($stations as $idx => $station) { ?>
							<li role="presentation" <?= ($idx == 0) ? 'class="active"' : ''; ?>><a href="#<?= $station['name']; ?>" data-toggle="tab"><?= $station['name']; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="tab-content">
						<?php foreach($stations as $idx => $station) { ?>
						<div class="tab-pane<?= ($idx == 0) ? ' active' : ''; ?>" id="<?= $station['name']; ?>">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<a href="#general<?= $idx; ?>" data-toggle="collapse" data-target="#general<?= $idx; ?>">Allgemein</a>
								</div>
								<div id="general<?= $idx; ?>" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">Name</label>
													<input type="text" class="form-control" name="name" value="<?= $station['name']; ?>">
												</div>
											</div>
											<div class="col-sm-8">
												<div class="form-group">
													<label class="control-label">Beschreibung</label>
													<input type="text" class="form-control" name="desc" value="<?= $station['description']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">URL NetModule</label>
													<input type="text" class="form-control" name="url_netmodule" value="<?= $station['url_netmodule']; ?>">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">URL Sensoren</label>
													<input type="text" class="form-control" name="url_sensoren" value="<?= $station['url_sensor']; ?>">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">URL Tissan</label>
													<input type="text" class="form-control" name="url_tissan" value="<?= $station['url_tissan']; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-6 col-sm-4">
												<div class="form-group">
													<label class="control-label">Aktionen</label>
													<button type="button" class="form-control" name="btnRestart" class="btn btn-default">Restart NetModule</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-primary">
								<div class="panel-heading">
									<a href="#sensors" data-toggle="collapse" data-target="#sensors">Sensoren</a>
								</div>
								<div id="sensors" class="panel-collapse collapse in">
									<div class="panel-body">
										<table class="table">
											<thead>
												<tr>
													<th>#</th>
													<th>Typ</th>
													<th>Frequenz Datenabfrage in Minuten</th>
													<th>Status</th>
													<th>Aktion</th>
												</tr>
											</thead>
											<tbody>

												<tr>
													<td>1</td>
													<td>Wassertemperatur</td>
													<td><input type="text" name="sensor1"></td>
												</tr>
												<tr>
													<td>2</td>
													<td>Lufttemperatur</td>
													<td><input type="text" name="sensor2"></td>
												</tr>
												<tr>
													<td>3</td>
													<td>Windgeschwindigkeit</td>
													<td><input type="text" name="sensor3"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						<button type="submit" class="btn btn-default">Speichern</button>
					</div>
				</div>
			</div>
		</div>

<?php include_once('footer.inc.php'); ?>