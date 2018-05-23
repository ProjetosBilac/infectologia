@extends('layouts.evaluation')

@section('content')
<section class="c-box">
  <header class="l-evaluation__enunciado">
    <div class="l-evaluation__enunciado-content">
      <h3 class="c-box__title">Exercício @{{ currentQuestao.id }}</h3>
      <p class="l-evaluation__enunciado-text">
        @{{ currentQuestao.enunciado }}
      </p>
    </div>
  </header>
  <article class="c-box__body">
    <div class="c-box__item" v-for="(alternativa, $index) in currentQuestao.alternativas">
      <custom-radio
        class="c-box__item is-with-content-to-left"
        :label="alternativa.texto"
        :identifier="$index"
        family="resposta">
      </custom-radio>
      <!-- <custom-checkbox
        class="c-box__item is-with-content-to-left"
        :label="alternativa.texto"
        :identifier="$index"
        family="resposta">
      </custom-checkbox> -->
    </div>
  </article>
</section>

<section class="c-box">
  <header class="c-box__header">
    <h3 class="c-box__title">Exercício 06</h3>
  </header>
  <article class="c-box__body">
    <div class="l-evaluation__aside" v-for="questao in questoes">
      <button class="btn" @click="setQuestao(questao)">@{{questao.id}}</button>
    </div>
  </article>
</section>
@endsection
