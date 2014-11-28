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
						<li role="presentation" class="active"><a href="#smoje1" data-toggle="tab">Smoje 1</a></li>
						<li role="presentation"><a href="#smoje2" data-toggle="tab">Smoje 2</a></li>
						<li role="presentation"><a href="#smoje3">Smoje 3</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="tab-content">
						<div class="tab-pane active" id="smoje1">
							<h2>Allgemein</h2>
							<table class="table">
								<colgroup>
									<col width="30%">
									<col width="*">
								</colgroup>
								<thead>
									<tr>
										<th>Name</th>
										<th>URL</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" name="name"></td>
										<td><input type="text" name="url" size="50"></td>
									</tr>
								</tbody>
							</table>
							<h2>Sensoren</h2>
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>Typ</th>
										<th>Frequenz Datenabfrage in Minuten</th>
									</tr>
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
								</thead>
							</table>
						</div>
						<div class="tab-pane" id="smoje2">
							<h2>Smoje 2</h2>
							<p>Test</p>
						</div>
						<div class="tab-pane" id="smoje3">
							<h2>Smoje 3</h2>
							<p>Test</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include_once('footer.inc.php'); ?>