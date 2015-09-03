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

    mix.copy('resources/img/**', 'public/images');


    mix.scripts([
        "app.js"
    ]).scriptsIn("public/js");

    mix.styles([
        "main.css",
        "index.css"
    ]).stylesIn("public/css");


    mix.sass('footer.sass').stylesIn("public/css");
});
