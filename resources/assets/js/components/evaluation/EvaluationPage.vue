<template>
  <form class="l-evaluation__main" :action="route" method="POST" @submit="enviaResposta">
    <section class="l-evaluation__content c-box">
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
            :label="alternativa.name"
            :identifier="alternativa.id">
          </custom-radio>
          <custom-checkbox
            v-if="questaoAtual.type_id === 2"
            :questao-id="questaoAtual.id"
            class="c-box__item is-with-content-to-left"
            :label="alternativa.name"
            :identifier="alternativa.id">
          </custom-checkbox>
        </div>
      </article>
    </section>
    <aside class="l-evaluation__aside c-box">
      <article class="c-page-evaluation c-box__body">
        <div class="c-page-evaluation__questoes-restantes">
          <div class="grupo">
            <p class="respondidas">
              <span>
                <span class="group">
                  <span v-if="getQtdRespondido() < 10">0</span>{{ getQtdRespondido() }}
                </span>
                respondida<span v-if="getQtdRespondido() !== 1">s</span>
              </span>
              <i class="marcador"></i>
            </p>
            <p class="pendentes">
              <span>
                <span class="group">
                  <span v-if="getQtdPendente() < 10">0</span>{{ getQtdPendente() }}
                </span>
                pendente<span v-if="getQtdPendente() !== 1">s</span>
              </span>
              <i class="marcador"></i>
            </p>
            <div class="barra">
              <span :style="{'flex': getQtdRespondido()}" class="completo"></span>
              <span :style="{'flex': getQtdPendente()}" class="incompleto"></span>
            </div>
          </div>
        </div>
        <div class="c-page-evaluation__container">
          <button :class="[
                    'c-page-evaluation__button',
                    {
                      'is-active': questao.id === questaoAtual.id,
                      'is-respondido': taRespondido(questao)
                    }
                  ]"
                  type="button" v-for="questao in data.inputs"
                  :key="questao.id" @click="setQuestao(questao)">{{ questao.index }}</button>
        </div>
        <button type="submit" :class="['c-page-evaluation__submit', 'btn', 'is-secondary',
                                       {'is-inactive': !taTudoRespondido()}]">
          Enviar
        </button>
      </article>
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
      return this.data.inputs.every(this.taRespondido)
    },
    taRespondido (questao) {
      return questao.options.some(alternativa => alternativa.marcado)
    },
    getQtdRespondido () {
      return this.data.inputs.filter(this.taRespondido).length
    },
    getQtdPendente () {
      return this.data.inputs.length - this.getQtdRespondido()
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
<style>
</style>
