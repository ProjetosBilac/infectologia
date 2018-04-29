@extends('layouts.admin')

@section('content')
<section class="c-box">
  <form
    class="c-box__body"
    method="POST"
    action="{{ route('login') }}">

    <custom-select
      label="Tipo da questão:"
      identifier="select_tipo"
      empty-case="Escolha um item"
      old-value="">
    </custom-select>

    <div class="c-box__item is-column">
      <label>Enunciado</label>
      <textarea></textarea>
    </div>

    <div>
      <custom-checkbox
        class="c-box__item is-with-content-to-left"
        label="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor"
        identifier="remember1">
      </custom-checkbox>

      <custom-checkbox
        class="c-box__item is-with-content-to-left"
        label="Lorem ipsum dolor sit amet."
        identifier="remember2">
      </custom-checkbox>

      <custom-checkbox
        class="c-box__item is-with-content-to-left"
        label="Lorem ipsum dolor sit amet, consectetur adipisicing elit."
        identifier="remember3">
      </custom-checkbox>
    </div>
    <div>
      <custom-radio
        class="c-box__item is-with-content-to-left"
        label="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor"
        identifier="radio1"
        family="alternativa">
      </custom-radio>

      <custom-radio
        class="c-box__item is-with-content-to-left"
        label="Lorem ipsum dolor sit amet."
        identifier="radio2"
        family="alternativa">
      </custom-radio>

      <custom-radio
        class="c-box__item is-with-content-to-left"
        label="Lorem ipsum dolor sit amet, consectetur adipisicing elit."
        identifier="radio3"
        family="alternativa">
      </custom-radio>
    </div>

    <div class="c-box__item is-with-content-to-right">
      <a href class="c-box__link">Adicionar alternativa</a>
    </div>

    <div class="c-box__item is-with-centralized-content">
      <button class="btn is-primary">Salvar</button>
    </div>

  </form>
</section>
@endsection
