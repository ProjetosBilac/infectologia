<template>
  <div class="c-custom-checkbox">
    <input class="c-custom-checkbox__input" :id="identifier" type="checkbox"
           :name="nameValor" :checked="isMarcado" @click="setMarcado()" :value="identifier">
    <label class="c-custom-checkbox__label" :for="identifier">
      <i class="c-custom-checkbox__square">
        <font-awesome-icon :class="['c-custom-checkbox__check', {'is-active': isMarcado}]"
         icon="check">
        </font-awesome-icon>
      </i>
      <span v-if="!edit && label">{{ label }}</span>
    </label>
  </div>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

export default {
  name: 'custom-checkbox',
  props: ['label', 'identifier', 'old-value', 'family', 'questao-id'],
  data() {
    return {
      text: this.label
    }
  },
  methods: {
    setMarcado () {
      this.$store.commit('setMarcadoBox', this.identifier)
    }
  },
  computed: {
    nameEnunciado () {
      return `alternativa[${this.identifier}][enunciado]`
    },
    nameValor () {
      return `alternativa[${this.questaoId}][value][]`
    },
    alternativa () {
      return this.$store.state.alternativas[this.identifier]
    },
    isMarcado () {
      return this.$store.state.alternativas[this.identifier].marcado
    }
  },
  components: {
    FontAwesomeIcon
  }
}
</script>
