import Vue from 'vue'
import CustomInput from './components/CustomInput'
import CustomCheckbox from './components/CustomCheckbox'
import CustomRadio from './components/CustomRadio'
import CustomSvg from './components/CustomSvg'
import VueSimpleSVG from 'vue-simple-svg'
import Evaluation from './components/Evaluation'
import Toolbar from './components/Toolbar'
import store from './storage/'

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
        questoes: [
          {
            enunciado: 'Acima de tudo, é fundamental ressaltar que a determinação clara de objetivos cumpre um papel essencial na formulação das formas de ação.',
            id: '01',
            tipo: 'radio',
            alternativas: [
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              }
            ]
          },
          {
            enunciado: 'Acima de tudo, é fundamental ressaltar que a determinação clara de objetivos cumpre um papel essencial na formulação das formas de ação.',
            id: '02',
            tipo: 'radio',
            alternativas: [
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              }
            ]
          },
          {
            enunciado: 'Acima de tudo, é fundamental ressaltar que a determinação clara de objetivos cumpre um papel essencial na formulação das formas de ação.',
            id: '03',
            tipo: 'radio',
            alternativas: [
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              }
            ]
          },
          {
            enunciado: 'Acima de tudo, é fundamental ressaltar que a determinação clara de objetivos cumpre um papel essencial na formulação das formas de ação.',
            id: '04',
            tipo: 'radio',
            alternativas: [
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              },
              {
                texto: 'Não existem bens não negociaveisque o modelo de Hecksher-Ohlin não leve em consideração',
                marcado: false
              }
            ]
          }
        ],
        currentQuestao: {}
      }
    },
    methods: {
      setQuestao (questao) {
        this.currentQuestao = questao
      }
    },
    mounted () {
      this.currentQuestao = this.questoes[0]
    },
    components: {
      CustomInput,
      CustomCheckbox,
      CustomSvg,
      Evaluation,
      Toolbar,
      CustomRadio
    },
    store
  })
})
