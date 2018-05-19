@extends('layouts.home')

@section('content')
<section class="c-box">
  <header class="c-box__header">
    <h3 class="c-box__title">Painel de Avaliações</h3>
    <a class="btn is-secondary" href="#">Faça uma nova Avalição</a>
  </header>
  <article class="c-box__body">
    <div class="c-box__item">
      <evaluation date="01/01/2018 as 10:00hrs" grade="1"></evaluation>
    </div>
    <div class="c-box__item">
      <evaluation date="01/02/2018 as 10:00hrs" grade="4"></evaluation>
    </div>
    <div class="c-box__item">
      <evaluation date="01/01/2018 as 10:00hrs" grade="8"></evaluation>
    </div>
    <div class="c-box__item">
      <evaluation date="01/01/2018 as 10:00hrs" grade="2"></evaluation>
    </div>
    <div class="c-box__item">
      <evaluation date="01/01/2018 as 10:00hrs" grade="6"></evaluation>
    </div>
    <div class="c-box__item">
      <evaluation date="01/01/2018 as 10:00hrs" grade="9"></evaluation>
    </div>
    @if(false)
    <div class="alert alert-danger">
        Você não tem avaliaçoes para visualizar.
    </div>
    @endif
  </article>
</section>
@endsection
