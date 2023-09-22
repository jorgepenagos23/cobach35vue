const mix = require('laravel-mix');

mix.js('src/main/main.js', 'public/js')
   .vue()
   .sass('resources/sass/main.scss', 'public/css')
   .sourceMaps();

if (mix.inProduction()) {
    mix.version();
}
