@extends('layouts.admin')

@section('content')
<section class="c-box">
  <form
    class="c-box__body"
    method="POST"
    action="{{ route('login') }}">

    <custom-select
      @update-selected="setSelected"
      label="Tipo da questão:"
      identifier="select_tipo"
      empty-case="Escolha um item"
      old-value="">
    </custom-select>

    <div class="c-box__item is-column">
      <label>Enunciado</label>
      <textarea></textarea>
    </div>

    <div v-for="alternative in alternatives">
      <custom-radio
        v-if="selected === 'a'"
        @update-label="updateLabel"
        @remove="removeItem"
        class="c-box__item is-with-content-to-left"
        :label="alternative.label"
        :identifier="alternative.identifier"
        family="alternative"
        edit="true">
      </custom-radio>
      <custom-checkbox
        v-if="selected === 'b'"
        @update-label="updateLabel"
        @remove="removeItem"
        class="c-box__item is-with-content-to-left"
        :label="alternative.label"
        :identifier="alternative.identifier"
        edit="true">
      </custom-checkbox>
    </div>
    <div class="c-box__item is-with-content-to-right">
      <div class="c-box__item is-column">
        <a :class="['c-box__link', {'is-inactive': !selected}]"
           @click="createAlternative($event)"
           href>Adicionar alternativa</a>
        <a :class="['c-box__link', {'is-inactive': !alternatives.length}]"
            @click="removeAlternative($event)"
            href>Remover alternativa</a>
      </div>
    </div>

    <div class="c-box__item is-with-centralized-content">
      <button class="btn is-primary">Salvar</button>
    </div>
  </form>
</section>
@endsection
