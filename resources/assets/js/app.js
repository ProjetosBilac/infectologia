import './bootstrap'
import './fontawesome-config'
import Vue from 'vue'
import ExampleComponent from './components/ExampleComponent'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'

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
