$('#formNew').validate({
	rules:{
		name: 'required',
		url_netmodule: {
			required: true,
			url: true
		},
		url_sensoren: {
			//required: true,
			url: true
		},
		url_tissan: {
			//required: true,
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
		$.ajaxSubmit({
			type: 'POST',
			url: 'libs/processSmojeRegistration.php',
			data: $(form).serialize()
			//dataType: 'json'
		});
		return false;
	}
});