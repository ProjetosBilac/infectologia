<template>
  <div class="c-custom-select" v-click-outside="hideExpand">
    <select
      class="c-custom-select__original"
      v-model="selected.value"
      :name="identifier"
      :id="identifier">
      <option
        v-for="option in options"
        :key="option.value"
        :value="option.value">{{ option.beautifulValue }}</option>
    </select>
    <label
      class="c-custom-select__label"
      v-if="label"
      @click="toggleExpand"
      :for="identifier">{{ label }}</label>
    <div class="c-custom-select__wrapper">
      <div
        class="c-custom-select__selected"
        :title="selected.beautifulValue || emptyCase"
        @click="toggleExpand">
        <span class="c-custom-select__text">
          {{ selected.beautifulValue || emptyCase }}
        </span>
        <i class="c-custom-select__icon">
          <font-awesome-icon :icon="icon"></font-awesome-icon>
        </i>
      </div>
      <ul :class="['c-custom-select__list', {'is-expand': expand}]">
        <li
          class="c-custom-select__item is-disabled"
          v-if="emptyCase"
          :title="emptyCase">
            <span class="c-custom-select__text">
              {{ emptyCase }}
            </span>
        </li>
        <li :class="['c-custom-select__item', {'is-active': option === selected}]"
            v-for="option in options"
            :key="option.value"
            :title="option.beautifulValue || emptyCase"
            @click="setSelected(option)">
            <span class="c-custom-select__text">
              {{ option.beautifulValue }}
            </span>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
  import FontAwesomeIcon from '@fortawesome/vue-fontawesome'
  import ClickOutside from 'vue-click-outside'

  export default {
    name: "custom-select",
    props: [
      'label',
      'identifier',
      'old-value',
      'empty-case'
    ],
    data () {
      return {
        selected: '',
        options: this.createMockOptions(),
        expand: false
      }
    },
    methods: {
      createMockOptions () {
        return [
          { beautifulValue: 'Multipla escolha', value: 'a' },
          { beautifulValue:'Verdadeiro ou falso', value: 'b' }
        ]
      },
      setSelected (option) {
        this.selected = option
        this.expand = false
        this.$emit('update-selected', this.selected)
      },
      toggleExpand () {
        this.expand = !this.expand
      },
      hideExpand () {
        this.expand = false
      }
    },
    computed: {
      icon () {
        return this.expand ? 'caret-up' : 'caret-down'
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
