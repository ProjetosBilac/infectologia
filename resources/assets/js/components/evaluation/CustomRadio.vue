<template>
  <div class="c-custom-radio">
    <input class="c-custom-radio__input" :id="identifier" type="radio"
           :name="nameValor" :checked="isMarcado">
    <label class="c-custom-radio__label" :for="identifier">
      <i class="c-custom-radio__circle" @click="setState">
        <font-awesome-icon
         :class="['c-custom-radio__icon', {'is-active': isMarcado}]"
         icon="circle">
        </font-awesome-icon>
      </i>
      <span v-if="!edit && label" @click="setState">{{ label }}</span>
      <textarea @blur="updateLabel" v-model="text" v-if="edit" :name="nameEnunciado"></textarea>
    </label>
  </div>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
import ClickOutside from 'vue-click-outside'

export default {
  name: 'custom-radio',
  props: ['label', 'identifier', 'edit'],
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
      return `alternativa[${this.identifier}][value]`
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
  },
  directives: {
    ClickOutside
  }
}
</script>
