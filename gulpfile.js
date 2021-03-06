const elixir = require('laravel-elixir');

//require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
	mix.sass('app.scss')
		.webpack('app.js');

	mix.scripts([
       		'jquery/dist/jquery.min.js',
       		//'bootstrap/dist/js/bootstrap.min.js',
       		'nunjucks/browser/nunjucks.min.js'
	    ],
	    'public/js/vendor.js',
	    'node_modules');

	mix.version('css/app.css');

 	mix.styles([
		'normalize.css',
		'skeleton.css'
	]);

	mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap/','public/fonts/bootstrap');
	 
});
