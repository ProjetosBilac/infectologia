<template>
  <div class="c-question">
    <div class="c-question__group">
      <font-awesome-icon class="c-question__icon" :icon="icon"></font-awesome-icon>
      <p class="c-question__statement">{{ statement }}</p>
    </div>
    <button class="btn is-danger is-small" @click="removeQuestion">Remover</button>
  </div>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
import { faDotCircle } from '@fortawesome/fontawesome-free-regular'

export default {
  props: ['type', 'statement', 'id'],
  methods: {
    removeQuestion() {
      this.$emit('removeQuestion', this.id)
    }
  },
  components: {
    FontAwesomeIcon
  },
  computed: {
    icon() {
      if (this.type === '1') return faDotCircle
      if (this.type === '2') return 'check-square'
    }
  }
}
</script>
