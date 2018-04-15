import Vue from 'vue'
import ExampleComponent from './components/ExampleComponent'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'
import CustomSvg from './components/CustomSvg'
import Toolbar from './components/Toolbar'
import CustomSelect from './components/CustomSelect'
import VueSimpleSVG from 'vue-simple-svg'

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
    components: {
      CustomInput,
      ExampleComponent,
      CustomCheckbox,
      CustomSvg,
      Toolbar,
      CustomSelect
    }
  })
})
