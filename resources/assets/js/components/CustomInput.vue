<template>
  <div>
    <label :for="identifier">{{ label }}</label>
    <div>
      <i class="icon" v-if="icon"></i>
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
  export default {
    name: 'custom-input',
    props: [
      'label',
      'icon',
      'identifier',
      'warning',
      'old-value'
    ]
  }
</script>
