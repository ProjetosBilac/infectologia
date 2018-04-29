<template>
  <div class="c-custom-radio" @click="updateState" v-click-outside="updateState">
    <input class="c-custom-radio__input" :id="identifier" type="radio"
           :name="family" :checked="state">
    <label class="c-custom-radio__label" :for="identifier" v-if="label">
      <i class="c-custom-radio__circle" :for="identifier">
        <font-awesome-icon
         :class="['c-custom-radio__icon', {'is-active': state}]"
         icon="circle">
        </font-awesome-icon>
      </i>
      {{ label }}
    </label>
  </div>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
  import ClickOutside from 'vue-click-outside'

  export default {
    name: 'custom-radio',
    props: [
      'old-state',
      'label',
      'identifier',
      'family'
    ],
    data () {
      return {
        state: this.oldState
      }
    },
    methods: {
      updateState() {
        this.state = document.getElementById(this.identifier).checked
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
