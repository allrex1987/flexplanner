module.exports = (function(){
	
	var templates = {
		test: require("file-loader?name=templates/[name].[ext]&publicPath=js/!../templates/_test.html"),
		team: require("file-loader?name=templates/[name].[ext]&publicPath=js/!../templates/_team.html"),
		autocompleteUser: require("file-loader?name=templates/[name].[ext]&publicPath=js/!../templates/_autocomplete-user.html"),
	}

	return {
		render: function(templateName, data){
			if(typeof nunjucks == 'undefined' || typeof templates[templateName] == 'undefined') return '';

			var template = templates[templateName];

			return nunjucks.render(template, data);
		}
	}
})();