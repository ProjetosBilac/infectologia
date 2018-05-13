<template>
  <div class="c-evaluation">
    <font-awesome-icon class="c-evaluation__icon" :icon="icon"></font-awesome-icon>
    <p>{{ date }}</p>
    <strong>{{ grade }}</strong>
  </div>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
import { faMeh, faSmile, faFrown } from '@fortawesome/fontawesome-free-regular'

export default {
  props: ['date', 'grade'],
  computed: {
    icon() {
      if (this.grade < 5) return faFrown
      if (this.grade < 8) return faMeh
      return faSmile
    }
  },
  components: {
    FontAwesomeIcon
  }
}
</script>
