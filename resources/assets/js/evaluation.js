import Vue from 'vue'
import Toolbar from './components/Toolbar'

import EvaluationPage from './components/evaluation/EvaluationPage'
import store from './storage/evaluation-store.js'
import VueSimpleSVG from 'vue-simple-svg'
import './config/bootstrap'
import './config/icons'

Vue.use(VueSimpleSVG)

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
