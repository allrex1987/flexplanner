module.exports = (function(){

	var dataStore = null;
	var currentQuery = null;

	// var mochObj = [
	// 	{
	// 		created_at:"2017-01-12 20:24:18",
	// 		email:"johan.veeb",
	// 		id:3,
	// 		name:"Johan 1",
	// 		updated_at:"2017-01-18 17:57:19",
	// 	},
	// 	{
	// 		created_at:"2017-01-12 20:24:18",
	// 		email:"joha",
	// 		id:3,
	// 		name:"Johan 1",
	// 		updated_at:"2017-01-18 17:57:19",
	// 	},
	// 	{
	// 		created_at:"2017-01-12 20:24:18",
	// 		email:"johrrrrrr",
	// 		id:3,
	// 		name:"Johan 1",
	// 		updated_at:"2017-01-18 17:57:19",
	// 	},
	// ];

	function updateData(endpoint, str, callback){
		currentQuery = str;
		var url = endpoint + str;

		ajax.getData(url, 
			function(data){
				dataStore = data; //.concat(mochObj);
				callback();
			}, 
			function(err){
				console.log('got error', err);
			});
	}

	function hasChanged(value){
		return value !== currentQuery;
	}

	function filterList(searchStr){
		var result = dataStore.filter(function(item){
			return item.email.indexOf(searchStr) > -1;
		});

		return result;
	}



	return {
		init: function(elem){
			console.log('Autocomplete initialization');

			var $elem = $(elem);

			var input = $('[data-input]', $elem);
			var $input = $(input);
			
			var target = $elem.data('target');
			var $target = $(target);

			var minLength = $elem.data('min');

			var dataUrl = $elem.data('url');

			$input.on('input', function(){
				var inputValue = $input.val();
				
				if(inputValue.length < minLength) return;

				var shortVal = inputValue.substring(0,minLength);

				if(hasChanged(shortVal)){
					updateData(dataUrl, shortVal, function(){
						$target.html(template.render('autocompleteUser', { items: filterList(inputValue) }));
					});
				}
				else{
					$target.html(template.render('autocompleteUser', { items: filterList(inputValue) }));
				}
			});

		}
	}
})();;