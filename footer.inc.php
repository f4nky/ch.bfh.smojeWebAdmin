		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/functions.js"></script>
		<?= ($page == 'adminStations') ? '<script src="js/validation/validation.updateStation.js"></script>' : ''; ?>
		<?= ($page == 'adminSensors') ? '<script src="js/validation/validation.updateSensor.js"></script>' : ''; ?>
		<?//= ($page == 'new') ? '<script src="js/validation/validation.registerStation.js"></script>' : ''; ?>
	</body>
</html>