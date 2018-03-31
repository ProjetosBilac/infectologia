<template>
  <fieldset class="c-custom-checkbox">
    <input
      class="c-custom-checkbox__input"
      :id="identifier"
      type="checkbox"
      :checked="state">
    <font-awesome-icon
      class="c-custom-checkbox__icon"
      :icon="icon"
      @click="stateToggle()">
    </font-awesome-icon>
    <label
      class="c-custom-checkbox__phrase"
      :for="identifier"
      v-if="label">
        {{ label }}
    </label>
  </fieldset>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

  export default {
    name: 'CustomCheckbox',
    data () {
      return {
        state: this.oldValue
      }
    },
    props: [
      'identifier',
      'label',
      'old-value'
    ],
    methods: {
      stateToggle() {
        this.state = !this.state;
      }
    },
    computed:  {
      icon () {
        return this.state ? 'check-square' : 'square'
      }
    },
    components: {
      FontAwesomeIcon
    }
  }
</script>
