module.exports = (function(){

	// var template = require('./components/_template.js');

	var self = this;

	//Caching data after request
	var data;
	var hasError = false;

	function getList(url, success, error){
		$.ajax({
			url: url,
			method: 'GET',
			success: success,
			error: error
		});
	}

	function renderList(elem, listTemplate, data){

		var markup = '';
		for(var list in data.lists){
			markup += template.render(listTemplate, list);
		}

		elem.html(markup);
	}

	function renderError(elem, error){
		elem.html(error);
	}

	return {
		init: function(elem, listTemplate){
			var $elem = $(elem);

			var url = $elem.data('url');
			var updateEvent = $elem.data('udate-event');

			getList(url, function(data){
					renderList($elem, listTemplate, data);
				},
				function(error){
					renderError($elem, error);
				});
		}
	}
})();