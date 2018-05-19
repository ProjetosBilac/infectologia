<template>
  <div class="c-custom-radio" @click="updateState" v-click-outside="updateState">
    <input class="c-custom-radio__input" :id="identifier" type="radio"
           :name="nameEnunciado" :checked="state">
    <label class="c-custom-radio__label" :for="identifier">
      <i class="c-custom-radio__circle">
        <font-awesome-icon
         :class="['c-custom-radio__icon', {'is-active': state}]"
         icon="circle">
        </font-awesome-icon>
      </i>
      <span v-if="!edit && label">{{ label }}</span>
      <textarea @blur="updateLabel" v-model="text" v-if="edit" :name="nameValor"></textarea>
    </label>
  </div>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
import ClickOutside from 'vue-click-outside'

export default {
  name: 'custom-radio',
  props: ['old-state', 'label', 'identifier', 'family', 'edit'],
  data() {
    return {
      state: this.oldState,
      text: this.label
    }
  },
  methods: {
    updateState() {
      this.state = document.getElementById(this.identifier).checked
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
