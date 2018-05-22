import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

// const alternativa = {
//   identifier: '01',
//   marcado: false
// }

export default new Vuex.Store({
  state: {
    alternativas: []
  },
  mutations: {
    addAlternativa (state, alternativa) {
      state.alternativas.push(alternativa)
    },
    updateAlternativa (state, alternativa) {
      let escolhida = state.alternativas.find(a => a.identifier === alternativa.identifier)
      if (escolhida.identifier === alternativa.identifier) escolhida = alternativa
    },
    removeAlternativa (state) {
      state.alternativas.splice(-1, 1)
    },
    setMarcadoRadio (state, identifier) {
      state.alternativas.forEach(alternativa => {
        alternativa.marcado = false
      })
      let escolhida = state.alternativas.find(a => a.identifier === identifier)
      escolhida.marcado = true
    }
  }
})
