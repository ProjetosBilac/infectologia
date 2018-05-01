import Vue from 'vue'
import ExampleComponent from './components/ExampleComponent'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'
import CustomRadio from './components/CustomRadio'
import CustomSvg from './components/CustomSvg'
import Toolbar from './components/Toolbar'
import CustomSelect from './components/CustomSelect'
import VueSimpleSVG from 'vue-simple-svg'
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

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
        selected: undefined,
        alternatives: []
      }
    },
    methods: {
      setSelected (option) {
        this.selected = option.value
      },
      createAlternative (e) {
        e.preventDefault()
        if (!this.selected) return
        this.alternatives.push({
          label: '',
          identifier: this.alternatives.length
        })
      },
      updateLabel (text, pos) {
        this.alternatives[pos].label = text
      },
      removeAlternative (e) {
        e.preventDefault()
        this.alternatives.splice(-1, 1)
      }
    },
    components: {
      CustomInput,
      ExampleComponent,
      CustomCheckbox,
      CustomSvg,
      Toolbar,
      CustomSelect,
      CustomRadio,
      FontAwesomeIcon
    }
  })
})
