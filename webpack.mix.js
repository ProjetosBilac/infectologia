const mix = require('laravel-mix')

mix.js('resources/assets/js/app.js', 'public/js')
  .sass('resources/assets/sass/app.scss', 'public/css')

if (mix.inProduction()) { mix.version() } else {
  mix.browserSync('localhost:8000')
    .webpackConfig({
      devtool: 'source-map'
    })
    .sourceMaps()
}
