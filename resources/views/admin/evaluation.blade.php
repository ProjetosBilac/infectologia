@extends('layouts.admin')

@section('content')
<section class="c-box">
  <form
    class="c-box__body"
    method="POST"
    action="{{ route('admin.evaluation.post') }}">

    @csrf

    <div class="c-box__item">
      <custom-select
        @update-selected="setSelected"
        label="Tipo da questão:"
        identifier="type_id"
        empty-case="Escolha um item"
        old-value="">
      </custom-select>
    </div>

    <div class="c-box__item is-column">
      <label>Enunciado</label>
      <textarea name="enunciado"></textarea>
    </div>

    <div class="c-box__item" v-for="alternative in alternativas">
      <custom-radio
        v-if="selected === '1'"
        @update-label="updateLabel"
        class="c-box__item is-with-content-to-left"
        :label="alternative.label"
        :identifier="alternative.identifier"
        family="alternative"
        edit="true">
      </custom-radio>
      <custom-checkbox
        v-if="selected === '2'"
        @update-label="updateLabel"
        class="c-box__item is-with-content-to-left"
        :label="alternative.label"
        :identifier="alternative.identifier"
        family="alternative"
        edit="true">
      </custom-checkbox>
    </div>
    <div class="c-box__item is-with-content-to-right">
        <a :class="['btn is-danger is-small p-margin-right-1', {'is-inactive': !alternativas.length}]"
            @click="removeAlternative($event)"
            href>Remover alternativa</a>
        <a :class="['btn is-secondary is-small', {'is-inactive': !selected}]"
           @click="createAlternative($event)"
           href>Adicionar alternativa</a>
    </div>

    <div class="c-box__item is-with-centralized-content">
      <button class="btn is-primary">Salvar</button>
    </div>
  </form>
</section>
@endsection
