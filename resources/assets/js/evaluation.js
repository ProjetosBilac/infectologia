import Vue from 'vue'
import Toolbar from './components/Toolbar'
import EvaluationPage from './components/evaluation/EvaluationPage'
import store from './storage/evaluation-store.js'

require('./config/bootstrap')
require('./config/icons')

Vue.config.productionTip = false

window.addEventListener('load', () => {
  const app = document.querySelector('#app')
  app.style.display = 'block'

  /* eslint-disable no-new */
  new Vue({
    el: '#app',
    components: {
      Toolbar,
      EvaluationPage
    },
    store
  })
})
