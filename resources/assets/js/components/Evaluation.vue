<template>
  <div class="c-evaluation">
    <div class="c-evaluation__group">
      <font-awesome-icon :class="['c-evaluation__icon', cssClass]" :icon="icon"></font-awesome-icon>
      <p class="c-evaluation__date">Avaliação realizada {{ date }}</p>
    </div>
    <div class="c-evaluation__group">
      <p>Nota:</p>
      <strong :class="['c-evaluation__grade', cssClass]">{{ grade }}</strong>
    </div>
  </div>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
import { faMeh, faSmile, faFrown } from '@fortawesome/fontawesome-free-regular'

export default {
  props: ['date', 'grade'],
  computed: {
    icon () {
      if (Number(this.grade) < 5) return faFrown
      if (Number(this.grade) < 8) return faMeh
      return faSmile
    },
    cssClass () {
      if (Number(this.grade) < 5) return 'is-bad'
      if (Number(this.grade) < 8) return 'is-normal'
      return 'is-good'
    }
  },
  components: {
    FontAwesomeIcon
  }
}
</script>
