const MIX = require('laravel-mix')

const ASSETS_PATH = 'resources/assets/'
const FILES = [
  `auth`,
  `admin`,
  'home'
]

config()

function config () {
  configState()
  configJs()
  configSass()
}

function configState () {
  MIX.inProduction() ? configInProduction() : configInDevelopment()
}

function configJs () {
  FILES.forEach((file) => {
    MIX.js(`${ASSETS_PATH}/js/${file}.js`, 'public/js')
  })
}

function configSass () {
  FILES.forEach((file) => {
    MIX.sass(`${ASSETS_PATH}/sass/${file}.scss`, 'public/css')
  })
}

function configInProduction () {
  MIX.version()
}

function configInDevelopment () {
  MIX
    .browserSync('localhost:8000')
    .webpackConfig({
      devtool: 'source-map'
    })
    .sourceMaps()
}
