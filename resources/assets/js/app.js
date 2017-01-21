
//Global modules
window.ajax = require('./components/_ajax.js');
window.template = require('./components/_template.js');


var formsModule = require('./components/_form.js');

var list = require('./components/_list.js');
var ajaxLoader = require('./components/_ajax-loader.js');
var autocomplete = require('./components/_autocomplete.js');

$(document).ready(function(){

	$('[data-module="ajax-form"]').each(function(){
		formsModule.init($(this));
	});

	$('[data-module="ajax-list"]').each(function(){
		list.init(this, 'test');
	});

	$('[data-module="ajax-loader"]').each(function(){
		ajaxLoader.init(this);
	});

	$('[data-module="autocomplete"]').each(function(){
		autocomplete.init(this);
	});
});

