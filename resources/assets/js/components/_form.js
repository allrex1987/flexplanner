// (function(briefer){

// 	briefer.doStuff = function(){
// 		alert('stuff done');
// 	}

// })(window.briefer);

module.exports = (function(){
	
	var _successClass = 'alert-success';
	var _errorClass = 'alert-danger';

	function renderResponseMessage(elem, data){
		if(typeof data.success == 'undefined' || typeof data.message == 'undefined') return;

		var msgClass;
		if(data.success == true){
			msgClass = _successClass;
			elem.removeClass(_errorClass);
		}
		else{
			msgClass = _errorClass;
			elem.removeClass(_successClass);
		}

		elem.addClass(msgClass);
		elem.text(data.message);
	}

	function renderServerError(elem, data){
		elem.addClass(_errorClass);
		elem.text("Något gick fel på servern!");
	}

	function ajaxSetup(){
		$.ajaxSetup({
	        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	    });
	}

	function postForm(url, formData, success, error){
		$.ajax({
			url: url,
			method: 'POST',
			data: formData,
			success: success,
			error: error
		});
	}

	return {
		init: function(form){
			ajaxSetup();

			var $form = $(form);
			var url = $form.data('url');
			var $submit = $('[data-submit]', $form);

			var $message = $('[data-response-message]', $form);

			$submit.on('click', function(e){
				e.preventDefault();

				postForm(url, $form.serialize(),
					function(data){
						renderResponseMessage($message, data);
					},
					function(err){
						renderServerError($message, data);
					});
			});
		}	
	}
})();