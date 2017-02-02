const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-livereload');

elixir((mix) => {

    mix.sass('style.scss')
        .sass('overwrite.scss')
        .webpack('app.js');
    mix.livereload();
    
});