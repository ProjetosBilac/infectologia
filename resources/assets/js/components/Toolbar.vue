<template>
  <nav class="c-toolbar">
    <div class="c-toolbar__wrapper">
      <ul class="c-toolbar__group">
        <li class="c-toolbar__item">
          <h3 class="c-toolbar__title">Exercício 38</h3>
        </li>
      </ul>
      <ul class="c-toolbar__group">
        <li class="c-toolbar__item">
          <font-awesome-icon class="c-toolbar__icon" icon="user" />
          <strong class="c-toolbar__user">{{username}}</strong>
        </li>
        <li class="c-toolbar__item">
          <a @click="logout($event)">
            <font-awesome-icon class="c-toolbar__icon is-the-close-icon" icon="times" />
          </a>
        </li>
      </ul>
    </div>
    <slot></slot>
  </nav>
</template>

<script>
import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

export default {
  name: 'toolbar',
  props: ['username', 'logout-id'],
  methods: {
    logout(e) {
      e.preventDefault()
      document.getElementById(this.logoutId).submit()
    }
  },
  components: {
    FontAwesomeIcon
  }
}
</script>
