<template>
  <div class="c-custom-radio">
    <input class="c-custom-radio__input" :id="identifier" type="radio"
           :name="nameValor" :checked="isMarcado" :value="identifier">
    <label class="c-custom-radio__label" :for="identifier">
      <i class="c-custom-radio__circle" @click="setState">
        <font-awesome-icon
         :class="['c-custom-radio__icon', {'is-active': isMarcado}]"
         icon="circle">
        </font-awesome-icon>
      </i>
      <span v-if="label" @click="setState">{{ label }}</span>
    </label>
  </div>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
import ClickOutside from 'vue-click-outside'

export default {
  name: 'custom-radio',
  props: ['label', 'identifier', 'questao-id'],
  data() {
    return {
      text: this.label
    }
  },
  methods: {
    setState () {
      this.$store.commit('setMarcadoRadio', this.identifier)
    },
    updateLabel() {
      this.$emit('update-label', this.text, this.identifier)
    }
  },
  computed: {
    nameEnunciado() {
      return `alternativa[${this.identifier}][enunciado]`
    },
    nameValor() {
      return `alternativa[${this.questaoId}][value][]`
    },
    alternativa () {
      return this.$store.state.alternativas[this.identifier]
    },
    isMarcado () {
      if (this.$store.state.alternativas[this.identifier]) {
        return this.$store.state.alternativas[this.identifier].marcado
      }
    }
  },
  components: {
    FontAwesomeIcon
  },
  directives: {
    ClickOutside
  }
}
</script>
