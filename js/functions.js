$(document).ready(function() {
	fadeContainer();
	customSettingsValidation();
});

/* === Fade Toggle container when opening menu === */
function fadeContainer() {
	$('.navbar-toggle').click(function() {
		$('.container').toggleClass('faded');
	});
}

/* === Custom settings for validation === */
function customSettingsValidation() {
	$.extend($.validator.messages, {
		required: 'Bitte Feld ausfüllen.',
		url: 'Bitte gültige URL eingeben.'
	});
}