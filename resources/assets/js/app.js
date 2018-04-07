import './bootstrap'
import './fontawesome-config'
import Vue from 'vue'
import ExampleComponent from './components/ExampleComponent'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'
import CustomSvg from './components/CustomSvg'
import VueSimpleSVG from 'vue-simple-svg'

Vue.use(VueSimpleSVG)
Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: {
    CustomInput,
    ExampleComponent,
    CustomCheckbox,
    CustomSvg
  }
})
