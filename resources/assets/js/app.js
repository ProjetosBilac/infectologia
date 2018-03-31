import Vue from 'vue'
import ExampleComponent from './components/ExampleComponent'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'

require('./bootstrap')
require('./fontawesome-config')

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: {
    CustomInput,
    ExampleComponent,
    CustomCheckbox
  }
})
