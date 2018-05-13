import Vue from 'vue'
import ExampleComponent from './components/ExampleComponent'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'
import CustomRadio from './components/CustomRadio'
import CustomSvg from './components/CustomSvg'
import Toolbar from './components/Toolbar'
import Question from './components/Question'
import CustomSelect from './components/CustomSelect'
import VueSimpleSVG from 'vue-simple-svg'
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

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
    data () {
      return {
        selected: undefined,
        alternatives: [],
        questions: [
          {
            id: 0,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          },
          {
            id: 1,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          },
          {
            id: 2,
            statement: 'dsadasdasdasd',
            type: 'radio'
          },
          {
            id: 3,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          },
          {
            id: 4,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          },
          {
            id: 5,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          },
          {
            id: 6,
            statement: 'dsadasdasdasd',
            type: 'radio'
          },
          {
            id: 7,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          },
          {
            id: 8,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          },
          {
            id: 9,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          },
          {
            id: 10,
            statement: 'dsadasdasdasd',
            type: 'radio'
          },
          {
            id: 11,
            statement: 'dsadasdasdasd',
            type: 'checkbox'
          }
        ]
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
      },
      removeQuestion (id) {
        this.questions = this.questions.filter(question => question.id !== id)
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
      Question,
      FontAwesomeIcon
    }
  })
})
