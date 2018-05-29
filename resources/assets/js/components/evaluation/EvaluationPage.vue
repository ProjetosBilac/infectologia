<template>
  <main>
    <section class="c-box">
      <header class="l-evaluation__enunciado">
        <div class="l-evaluation__enunciado-content">
          <h3 class="c-box__title">Exercício {{ questaoAtual.id }}</h3>
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
          <button type="button" class="btn" @click="setQuestao(questao)">{{ questao.id }}</button>
        </div>
      </article>
      <button type="submit" class="btn is-primary">Enviar</button>
    </aside>

  </main>
</template>

<script>
import customRadio from './CustomRadio'
import customCheckbox from './CustomCheckbox'

export default {
  props: ['json-data'],
  data () {
    return {
      questaoAtual: {}
    }
  },
  methods: {
    setQuestao (questao) {
      this.questaoAtual = questao
    }
  },
  computed: {
    data () {
      return JSON.parse(this.jsonData)
    }
  },
  mounted () {
    this.data.inputs.forEach(questao => {
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
