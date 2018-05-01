<template>
  <div class="c-custom-checkbox" @click="stateToggle()">
    <input class="c-custom-checkbox__input" :id="identifier" type="checkbox"
           v-model="state" :name="identifier" :value="state">
    <label class="c-custom-checkbox__label" :for="identifier">
      <i class="c-custom-checkbox__square">
        <font-awesome-icon :class="['c-custom-checkbox__check', {'is-active': state}]"
         icon="check">
        </font-awesome-icon>
      </i>
      <span v-if="!edit && label">{{ label }}</span>
      <textarea @blur="updateLabel" v-model="text" v-if="edit"></textarea>
    </label>
  </div>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

  export default {
    name: 'custom-checkbox',
    props: [
      'label',
      'identifier',
      'old-value',
      'edit'
    ],
    data () {
      return {
        state: this.oldValue,
        text: this.label
      }
    },
    methods: {
      stateToggle () {
        this.state = document.getElementById(this.identifier).checked
      },
      updateLabel () {
        this.$emit('update-label', this.text, this.identifier)
      }
    },
    components: {
      FontAwesomeIcon
    }
  }
</script>
