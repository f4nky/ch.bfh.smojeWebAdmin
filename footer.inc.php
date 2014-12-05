		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/functions.js"></script>
		<?= ($page == 'home') ? '<script src="js/validation/validation.updateSmoje.js"></script>' : ''; ?>
		<?= ($page == 'new') ? '<script src="js/validation/validation.registerSmoje.js"></script>' : ''; ?>
	</body>
</html>