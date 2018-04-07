<template>
  <div class="c-custom-checkbox" @click="stateToggle()">
    <input class="c-custom-checkbox__input" :id="identifier" type="checkbox"
           v-model="state" :name="identifier" :value="state">
    <i class="c-custom-checkbox__square">
      <font-awesome-icon :class="['c-custom-checkbox__check', {'is-active': state}]"
                         icon="check">
      </font-awesome-icon>
    </i>
    <label class="c-custom-checkbox__label" :for="identifier" v-if="label">
      {{ label }}
    </label>
  </div>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

  export default {
    name: 'custom-checkbox',
    props: [
      'identifier',
      'label',
      'old-value'
    ],
    data () {
      return {
        state: this.oldValue
      }
    },
    methods: {
      stateToggle() {
        this.state = !this.state;
      }
    },
    components: {
      FontAwesomeIcon
    }
  }
</script>
