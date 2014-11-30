<?php include_once('header.inc.php'); ?>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1>Neue Smoje</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="tab-content">
						<form id="formNew">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<a href="#general" data-toggle="collapse" data-target="#general">Allgemein</a>
								</div>
								<div id="general" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">Name*</label>
													<input type="text" class="form-control" id="name" name="name" autofocus>
												</div>
											</div>
											<div class="col-sm-8">
												<div class="form-group">
													<label class="control-label">Beschreibung</label>
													<input type="text" class="form-control" id="desc" name="desc">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">URL NetModule*</label>
													<input type="text" class="form-control" id="urlnetmodule" name="url_netmodule">
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">URL Sensoren*</label>
													<input type="text" class="form-control" id="urlsensoren" name="url_sensoren">
												</div>
											</div>											
											<div class="col-sm-4">
												<div class="form-group">
													<label class="control-label">URL Tissan*</label>
													<input type="text" class="form-control" id="urltissan" name="url_tissan">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-default" name="btnSave">Speichern</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/functions.js"></script>
		<script src="js/validation/validation.registerSmoje.js"></script>
	</body>
</html>


<?php //include_once('footer.inc.php'); ?>