<template>
  <div>
    <font-awesome-icon v-if="icon" :icon="icon"></font-awesome-icon>
    <label :for="identifier">{{ label }}</label>
    <div>
      <input
        :class="{ 'is-invalid': warning }"
        :id="identifier"
        :name="identifier"
        :placeholder="label"
        :value="oldValue"
        type="text">
    </div>
    <span v-if="warning">{{ warning }}</span>
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
