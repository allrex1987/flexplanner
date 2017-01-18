var formsModule = require('./components/_form.js');

$(document).ready(function(){

	$('[data-module="ajax-form"]').each(function(){
		formsModule.init($(this));
	});
	
});

