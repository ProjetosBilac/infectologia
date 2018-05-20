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
import store from './storage/'

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
        this.$store.commit('addAlternativa', {
          label: '',
          identifier: this.alternativas.length,
          marcado: false
        })
      },
      updateLabel (text, pos) {
        const alternativaAtualizada = {
          identifier: pos,
          label: text,
          marcado: false
        }
        this.$store.commit('updateAlternativa', alternativaAtualizada)
      },
      removeAlternative (e) {
        e.preventDefault()
        this.$store.commit('removeAlternativa')
      },
      removeQuestion (id) {
        this.questions = this.questions.filter(question => question.id !== id)
      }
    },
    computed: {
      alternativas () {
        return this.$store.state.alternativas
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
    },
    store
  })
})
