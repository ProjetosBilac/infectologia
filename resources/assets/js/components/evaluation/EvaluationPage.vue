<template>
  <form :action="route" method="POST" @submit="enviaResposta">
    <section class="c-box">
      <header class="l-evaluation__enunciado">
        <div class="l-evaluation__enunciado-content">
          <h3 class="c-box__title">Exercício {{ questaoAtual.index }}</h3>
          <p class="l-evaluation__enunciado-text">
            {{ questaoAtual.question }}
          </p>
        </div>
      </header>
      <article class="c-box__body">
        <div class="c-box__item" v-for="alternativa in questaoAtual.options" :key="alternativa.id">
          <custom-radio
            class="c-box__item is-with-content-to-left"
            v-if="questaoAtual.type_id === 1"
            :questao-id="questaoAtual.id"
            :label="alternativa.id"
            :identifier="alternativa.id">
          </custom-radio>
          <custom-checkbox
            v-if="questaoAtual.type_id === 2"
            :questao-id="questaoAtual.id"
            class="c-box__item is-with-content-to-left"
            :label="alternativa.id"
            :identifier="alternativa.id">
          </custom-checkbox>
        </div>
      </article>
    </section>
    <aside class="c-box">
      <article class="c-box__body">
        <div class="l-evaluation__aside" v-for="questao in data.inputs" :key="questao.id">
          <button type="button" class="btn" @click="setQuestao(questao)">{{ questao.index }}</button>
        </div>
      </article>
      <button type="submit" :class="['btn', 'is-primary', {'is-inactive': !taTudoRespondido()}]">Enviar</button>
    </aside>
    <!-- Outras questões -->
    <div style="display: none">
      <input type="hidden" name="form_id" :value="data.id">
      <div v-for="input in data.inputs" :key="input.id">
        <div v-if="input.id !== questaoAtual.id" v-for="alternativa in input.options" :key="alternativa.id">
          <custom-radio
            v-if="input.type_id === 1"
            :questao-id="input.id"
            :label="alternativa.id"
            :identifier="alternativa.id">
          </custom-radio>
          <custom-checkbox
            v-if="input.type_id === 2"
            :questao-id="input.id"
            :label="alternativa.id"
            :identifier="alternativa.id">
          </custom-checkbox>
        </div>
      </div>
    </div>
    <slot></slot>
  </form>
</template>

<script>
import customRadio from './CustomRadio'
import customCheckbox from './CustomCheckbox'

export default {
  props: ['json-data', 'route'],
  data () {
    return {
      questaoAtual: {}
    }
  },
  methods: {
    setQuestao (questao) {
      this.questaoAtual = questao
    },
    enviaResposta (event) {
      if (!this.taTudoRespondido()) event.preventDefault()
    },
    taTudoRespondido () {
      return this.data.inputs.every(questao => questao.options.some(alternativa => alternativa.marcado))
    }
  },
  computed: {
    data () {
      return JSON.parse(this.jsonData)
    }
  },
  mounted () {
    this.data.inputs.forEach((questao, index) => {
      questao.index = index + 1
      questao.options.forEach(alternativa => {
        alternativa.identifier = alternativa.id
        alternativa.marcado = false
        this.$store.commit('addAlternativa', alternativa)
      })
      this.questaoAtual = this.data.inputs[0];
    })
  },
  components: {
    customRadio,
    customCheckbox
  }
}
</script>
