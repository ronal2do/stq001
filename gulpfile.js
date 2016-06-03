var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.styles(
        'app.css'
    , 'public/assets/css/app.min.css')
    .styles(
        'accordion.css'
    , 'public/assets/css/accordion.min.css');

  	mix.scripts([
  		'jquery.js',
  		'modernizr.js',
  		'plugins.min.js',
  		'scripts.js'
  		], 'public/assets/js/all.min.js');
});
