import Vue from 'vue'
import ExampleComponent from './components/ExampleComponent'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'
import CustomSvg from './components/CustomSvg'
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
    data () {
      return {
        goingOut: false,
        formId: 'form'
      }
    },
    methods: {
      getOut (event, route) {
        this.goingOut = true
        event.preventDefault()
        setTimeout(() => {
          if (route) {
            window.location = route
          } else {
            this.form.submit()
          }
        }, 500)
      }
    },
    computed: {
      form () {
        return document.querySelector(`#${this.formId}`)
      }
    },
    components: {
      CustomInput,
      ExampleComponent,
      CustomCheckbox,
      CustomSvg
    }
  })
})
