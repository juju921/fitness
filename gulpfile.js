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
    mix.sass('app.scss')
        .copy('node_modules/jquery/dist/jquery.min.js','public/js')
        .copy('node_modules/angular/angular.js','public/js')
        .copy('bower_components/angular-bootstrap/ui-bootstrap.js','public/js')
        .copy('node_modules/angular-ui-bootstrap/dist/ui-bootstrap.js','public/js')
        .copy('node_modules/angular-ui-router/release/angular-ui-router.min.js','public/js')
        .copy('node_modules/restangular/dist/restangular.js','public/js')
        .copy('node_modules/satellizer/dist/satellizer.min.js','public/js')
        .copy('node_modules/angular-file-upload/dist/angular-file-upload.min.js', 'public/js')
        .copy('node_modules/moment/moment.js','public/js')
        .copy('bower_components/lodash/lodash.js','public/js');

});
