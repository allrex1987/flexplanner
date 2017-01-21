module.exports = (function(){
	
	function ajaxSetup(){
		$.ajaxSetup({
	        headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
	    });
	}

	var getData = function(url, success, error){
		$.getJSON(url, success).fail(error);
	}

	var postData = function(url, postData, success, error){
		ajaxSetup();

		$.ajax({
			url: url,
			method: 'POST',
			data: postData,
			success: success,
			error: error
		});
	}

	return {
		getData: getData,
		postData: postData
	}

})();