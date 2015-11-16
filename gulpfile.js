var elixir = require('laravel-elixir');
require('./tasks/bower.task.js');
require('laravel-elixir-livereload');
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
    mix
      .bower()
      .sass('./resources/assets/sass/style.scss','public/css')
      .scripts(['app.js', 'home.js'], 'public/js/app.js')
      .livereload([
  			'public/js/vendor.js',
  			'public/js/app.js',
  			'public/css/vendor.css',
  			'public/css/app.css',
        'resources/views/**/*.blade.php',
        'app/Http/**/*.php'
  		], {liveCSS: true});
});
