module.exports = (function(){
	return {
		init: function(elem){
			
			$elem = $(elem);
			var templateName = $elem.data('template');
			var target = $elem.data('target');
			var $target = $(target);

			$('[data-url]', $elem).each(function(){

				$(this).on('click', function(e){
					e.preventDefault();

					var url = $(this).data('url');

					ajax.getData(url, function(data){
							console.log(templateName, data)
							$target.html(
								template.render(templateName, data)
							);
						}, 
						function(err){ 
							console.log(err); 
						});
				});
				
			});
		}
	}
})();