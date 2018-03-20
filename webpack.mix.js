const mix = require('laravel-mix');
const nodeENV = process.env.NODE_ENV;

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

if(nodeENV === 'development') {
   mix.js('resources/assets/js/app.js', 'public/js')
      .sass('resources/assets/sass/app.scss', 'public/css')
      .mix.browserSync('localhost:8000');
} else if(nodeENV === 'production') {
  mix.js('resources/assets/js/app.js', 'public/js')
     .sass('resources/assets/sass/app.scss', 'public/css')
     .version();
}
