<template>
  <div class="c-custom-input">
    <label class="c-custom-input__label" :for="identifier">{{ label }}</label>
    <div :class="['c-custom-input__group', {'is-invalid': warning}]"
         data-toggle="tooltip" :title="warning">
      <i :class="['c-custom-input__icon', {'is-invalid': warning}]" v-if="icon">
        <font-awesome-icon :icon="icon"></font-awesome-icon>
      </i>
      <input
        :class="['c-custom-input__field', {'is-invalid': warning}]"
        :id="identifier"
        :name="identifier"
        :placeholder="label"
        :value="oldValue"
        type="text">
    </div>
  </div>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

  const customInput = {
    name: 'custom-input',
    props: [
      'icon',
      'label',
      'identifier',
      'warning',
      'old-value'
    ],
    components: {
      FontAwesomeIcon
    }
  }

  export default customInput
</script>
