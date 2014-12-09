$(document).ready(function() {
	fadeContainer();
	customSettingsValidation();
	restartStation();
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
		url: 'Bitte gültige URL eingeben.',
		digits: 'Nur Zahlen erlaubt.'
	});
}

/* === Restart functionality === */
function restartStation() {
	$('button[name=btnRestart]').click(function() {
		$.ajax({
			type: 'GET',
			url: $('input[name=url_netmodule]').val() + 'relay/cycle',
		});
	});
}