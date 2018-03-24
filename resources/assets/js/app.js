import Vue from 'vue'
import ExampleComponent from './components/ExampleComponent'

require('./bootstrap')

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  components: { ExampleComponent }
})
