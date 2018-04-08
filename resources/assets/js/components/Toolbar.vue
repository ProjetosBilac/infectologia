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
          <strong class="c-toolbar__user">Vitebo</strong>
        </li>
        <li class="c-toolbar__item">
          <font-awesome-icon class="c-toolbar__icon is-the-close-icon" icon="times" />
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome'

  export default {
    name: "toolbar",
    components: {
      FontAwesomeIcon
    }
  }
</script>
