<template>
  <div :class="cssClass" v-show="isReady">
    <simple-svg
      :filepath="filepath"
      @ready="onSvgReady()">
    </simple-svg>
  </div>
</template>

<script>
  export default {
    name: "custom-svg",
    props: [
      'filepath',
      'css-class',
    ],
    data () {
      return {
        isReady: false
      }
    },
    methods: {
      onSvgReady () {
        this.isReady = true
      }
    }
  }
</script>
