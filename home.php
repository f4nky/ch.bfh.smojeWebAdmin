<?php

$json = file_get_contents('http://178.62.163.199/smoje/index.php/measurements');
$jobj = json_decode($json);
$stations = $jobj->stations;

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
							<li role="presentation" <?= ($idx == 0) ? 'class="active"' : ''; ?>><a href="#<?= $station->name; ?>" data-toggle="tab"><?= $station->name; ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="tab-content">
						<?php foreach($stations as $idx => $station) { ?>
						<div class="tab-pane<?= ($idx == 0) ? ' active' : ''; ?>" id="<?= $station->name; ?>">
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
													<label class="control-label">URL NetModule</label>
													<input type="text" class="form-control" name="url_netmodule" value="<?//= $station->urlNetmodule; ?>">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">URL Sensoren</label>
													<input type="text" class="form-control" name="url_sensoren" value="<?= $station->urlSensor; ?>">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">URL Tissan</label>
													<input type="text" class="form-control" name="url_tissan" value="<?//= $station->urlTissan; ?>">
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
												<?php foreach($station->sensors as $idx => $sensor) { ?>
												<tr>
													<td><?= $idx; ?></td>
													<td><?= $sensor->name; ?></td>
													<td><input type="text" name="sensor1"></td>
												</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						<button type="submit" class="btn btn-default" id="btnSave" name="btnSave">Speichern</button>
					</div>
				</div>
			</div>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="js/validation/validation.updateSmoje.js"></script>
	</body>
</html>

<?php //include_once('footer.inc.php'); ?>