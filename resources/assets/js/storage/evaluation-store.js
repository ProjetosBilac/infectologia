import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    alternativas: {}
  },
  mutations: {
    addAlternativa (state, alternativa) {
      state.alternativas[alternativa.id] = alternativa
    },
    setMarcadoRadio (state, identifier) {
      const escolhida = state.alternativas[identifier]
      for (let key in this.state.alternativas) {
        const alternativa = this.state.alternativas[key]
        if (alternativa.input_id === escolhida.input_id) alternativa.marcado = false
      }
      escolhida.marcado = true
      this.commit('addAlternativa', escolhida)
    },
    setMarcadoBox (state, identifier) {
      const escolhida = state.alternativas[identifier]
      escolhida.marcado = !escolhida.marcado
      this.commit('addAlternativa', escolhida)
    }
  }
})
