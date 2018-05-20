import Vue from 'vue'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'
import CustomSvg from './components/CustomSvg'
import VueSimpleSVG from 'vue-simple-svg'
import Evaluation from './components/Evaluation'
import Toolbar from './components/Toolbar'

require('./config/bootstrap')
require('./config/icons')

Vue.use(VueSimpleSVG)
Vue.config.productionTip = false

window.addEventListener('load', () => {
  const app = document.querySelector('#app')
  app.style.display = 'block'

  /* eslint-disable no-new */
  new Vue({
    el: '#app',
    data () {
      return {
        alternatives: [

        ]
      }
    },
    components: {
      CustomInput,
      CustomCheckbox,
      CustomSvg,
      Evaluation,
      Toolbar
    }
  })
})
