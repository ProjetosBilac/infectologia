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

    <custom-checkbox
      class="c-box__item is-with-content-to-left"
      identifier="remember"
      old-value="{{ old('remember') ? 'checked' : '' }}"
      label="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua.">
    </custom-checkbox>

    <custom-checkbox
      class="c-box__item is-with-content-to-left"
      identifier="remember"
      old-value="{{ old('remember') ? 'checked' : '' }}"
      label="Lorem ipsum dolor sit amet.">
    </custom-checkbox>

    <custom-checkbox
      class="c-box__item is-with-content-to-left"
      identifier="remember"
      old-value="{{ old('remember') ? 'checked' : '' }}"
      label="Lorem ipsum dolor sit amet, consectetur adipisicing elit.">
    </custom-checkbox>

    <div class="c-box__item is-with-content-to-right">
      <a href class="c-box__link">Adicionar alternativa</a>
    </div>

    <div class="c-box__item is-with-centralized-content">
      <button class="btn is-primary">Salvar</button>
    </div>

  </form>
</section>
@endsection
