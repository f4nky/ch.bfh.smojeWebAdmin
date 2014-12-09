<?php

require_once('header.inc.php');

$json = file_get_contents(PATH_JSON_MEASUREMENTS);
$jsonObj = json_decode($json);
$stations = $jsonObj->stations;

function getGPSData($url) {
	$json = file_get_contents($url);
	$gpsData = json_decode($json);
	return $gpsData;
}

?>

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
							<li role="presentation" <?= ($idx == 0) ? 'class="active"' : ''; ?>><a href="#<?= $station->name; ?>" data-toggle="tab"><?= $station->name; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div id="success"></div>
					<form id="formUpdate" method="post" action="libs/processUpdateSmoje.php">
						<div class="tab-content">
							<?php foreach($stations as $idx => $station) {
									$gpsData = getGPSData($station->urlTissan);
							?>
							<div class="tab-pane<?= ($idx == 0) ? ' active' : ''; ?>" id="<?= $station->name; ?>">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<a href="#general<?= $idx; ?>" data-toggle="collapse" data-target="#general<?= $idx; ?>">Allgemein</a>
									</div>
									<div id="general<?= $idx; ?>" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="row">
												<div class="col-xs-2 col-sm-2">
													<div class="form-group">
														<label class="control-label">ID</label>
														<input type="text" class="form-control" name="id" value="<?= $station->stationId; ?>" readonly>
													</div>
												</div>
												<div class="col-xs-10 col-sm-2">
													<div class="form-group">
														<label class="control-label">Name</label>
														<input type="text" class="form-control" name="name" value="<?= $station->name; ?>">
													</div>
												</div>
												<div class="col-sm-8">
													<div class="form-group">
														<label class="control-label">Beschreibung</label>
														<input type="text" class="form-control" name="desc" value="<?= $station->description; ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Basis-URL NetModule</label>
														<input type="text" class="form-control" name="url_netmodule" value="<?= $station->urlNetmodule; ?>">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Basis-URL Sensoren</label>
														<input type="text" class="form-control" name="url_sensor" value="<?= $station->urlSensor; ?>">
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Basis-URL Tissan</label>
														<input type="text" class="form-control" name="url_tissan" value="<?= $station->urlTissan; ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<div class="form-group">
														<label class="control-label">Externe Spannung</label>
														<p class="form-control-static"><?= $gpsData->lastExternVoltage; ?> V</p>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label class="control-label">Aktionen</label>
														<button type="button" name="btnRestart" class="btn btn-default form-control">Restart NetModule</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="panel panel-primary">
									<div class="panel-heading">
										<a href="#position<?= $idx; ?>" data-toggle="collapse" data-target="#position<?= $idx; ?>">Position (via Tissan-Tracker)</a>
									</div>
									<div id="position<?= $idx; ?>" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="row">
												<div class="col-xs-3 col-sm-2">
													<div class="form-group">
														<label class="control-label">Latitude</label>
														<p class="form-control-static"><?= $gpsData->lastPosition->latitude; ?></p>
													</div>
												</div>
												<div class="col-xs-3 col-sm-2">
													<div class="form-group">
														<label class="control-label">Longitude</label>
														<p class="form-control-static"><?= $gpsData->lastPosition->longitude; ?></p>
													</div>
												</div>
												<div class="col-xs-3 col-sm-1">
													<div class="form-group">
														<label class="control-label">Höhe</label>
														<p class="form-control-static"><?= $gpsData->lastPosition->altitude; ?></p>
													</div>
												</div>
												<div class="col-xs-3 col-sm-1">
													<div class="form-group">
														<label class="control-label">Status</label>
														<p class="form-control-static <?= ($gpsData->status == 'a') ? 'text-success' : 'text-danger'; ?>"><?= ($gpsData->status == 'a') ? 'Aktiv' : 'Inaktiv'; ?></p>
													</div>
												</div>
												<div class="col-xs-6 col-sm-4">
													<div class="form-group">
														<label class="control-label">Letztes Update</label>
														<p class="form-control-static"><?= $gpsData->lastPosition->gpstime; ?></p>
													</div>
												</div>
												<div class="col-xs-6 col-sm-2">
													<div class="form-group">
														<label class="control-label">Karte</label>
														<p class="form-control-static"><a href="http://tracker.xrj.ch/smoje-api/v1/1001">Google Maps</a></p>
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
											<div class="table-responsive">
												<table class="table">
													<thead>
														<tr>
															<th class="col-xs-1">#</th>
															<th class="col-xs-2">Typ</th>
															<th class="col-xs-2">Name</th>
															<th class="col-xs-1">Status</th>
															<th class="col-xs-2">Update in min</th>
															<th class="col-xs-4">Letzte Messung(en)</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($station->sensors as $idx => $sensor) { ?>
														<tr>
															<td><?= $sensor->sensorId; ?></td>
															<td><?= $sensor->sensorType; ?></td>
															<td><?= $sensor->name; ?></td>
															<td class="<?= ($sensor->status == 'OK') ? 'text-success' : 'text-danger'; ?>"><?= $sensor->status; ?></td>
															<td>
																<div class="form-group">
																	<input type="text" class="form-control" name="delay[<?= $sensor->sensorId; ?>]" value="<?= $sensor->delay; ?>">
																</div>
															</td>
															<td>
																<?php foreach($sensor->measurements as $idx => $measurement) { ?>
																	<p><?= $measurement->name .': '. (($sensor->sensorId == 10) ? ' [Bild]' : $measurement->valueFloat .' '. $measurement->unit) .' <span class="small pull-right">'. $measurement->timestamp .'</span>'; ?></p>
																<?php } ?>
															</td>
														</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
							<button type="submit" class="btn btn-default" id="btnSave" name="btnSave">Speichern</button>
						</div>
					</form>
				</div>
			</div>
		</div>

<?php require_once('footer.inc.php'); ?>