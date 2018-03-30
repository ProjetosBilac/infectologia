<template>
  <div class="c-custom-input">
    <label class="c-custom-input__label" :for="identifier">{{ label }}</label>
    <div class="c-custom-input__group">
      <i class="c-custom-input__icon" v-if="icon">
        <font-awesome-icon :icon="icon"></font-awesome-icon>
      </i>
      <input
        class="c-custom-input__field"
        :class="{ 'is-invalid': warning }"
        :id="identifier"
        :name="identifier"
        :placeholder="label"
        :value="oldValue"
        type="text">
    </div>
    <span class="c-custom-input__alert" v-if="warning">
      <i>
        <font-awesome-icon icon="exclamation-circle"></font-awesome-icon>
      </i>
      {{ warning }}
    </span>
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
    components: {
      FontAwesomeIcon
    }
  }
</script>
