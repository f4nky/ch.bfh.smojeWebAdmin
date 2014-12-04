$('#formUpdate').on('submit', function(event) {
	$('#sensors input').each(function() {
		$(this).rules('add', {
			digits: true
		});
	});
});
$('#formUpdate').validate({
	rules:{
		name: 'required',
		url_netmodule: {
			required: true,
			url: true
		},
		url_sensoren: {
			url: true
		},
		url_tissan: {
			url: true
		}
	},
	highlight: function(element) {
		$(element).closest('.form-group').addClass('has-error');
	},
	unhighlight: function(element) {
		$(element).closest('.form-group').removeClass('has-error');
		$(element).closest('.form-group').addClass('has-success');
	},
	errorClass: 'help-block',
	submitHandler: function(form) {
		$.ajax({
			type: $(form).attr('method'),
			url: $(form).attr('action'),
			data: $(form).serialize(),
			success: function(result) {
				$('#success').html('<div class="alert alert-success"><strong>Smoje wurde gespeichert!</strong></div>').delay(3000).fadeOut('fast');
				$('#formNew').trigger('reset');
				$('#formNew').fadeOut('fast').delay(3000).fadeIn('fast');
				$('#formNew').find('.has-success').removeClass('has-success');
			}
		});
		return false;
	}
});