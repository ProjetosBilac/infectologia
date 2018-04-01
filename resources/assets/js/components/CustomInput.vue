<template>
  <div class="c-custom-input">
    <label class="c-custom-input__label" :for="identifier">{{ label }}</label>
    <div :class="['c-custom-input__group', {'is-invalid': warning}]">
      <i :class="['c-custom-input__icon', {'is-invalid': warning}]" v-if="icon">
        <font-awesome-icon :icon="icon"></font-awesome-icon>
      </i>
      <input
        :class="['c-custom-input__field', {'is-invalid': warning}]"
        :id="identifier"
        :name="identifier"
        :placeholder="label"
        v-model="value"
        @blur="checkState"
        type="text">
    </div>
    <span class="c-custom-input__warning" v-if="warning">{{ warning }}</span>
  </div>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

  export default {
    name: 'custom-input',
    props: [
      'icon',
      'label',
      'identifier',
      'warning',
      'old-value'
    ],
    data () {
      return {
        value: this.oldValue
      }
    },
    methods: {
      checkState () {
        if(this.value.length) {
          this.warning = false
          this.tooltip = false
        }
      }
    },
    components: {
      FontAwesomeIcon
    }
  }
</script>
