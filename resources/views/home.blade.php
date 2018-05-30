@extends('layouts.home')

@section('content')
<section class="c-box">
  <header class="c-box__header">
    <h3 class="c-box__title">Painel de Avaliações</h3>

    <a class="btn is-secondary" href="javascript:{}" onclick="document.getElementById('evaluation-form').submit();" >Faça uma nova Avalição</a>
     <form id="evaluation-form" action="{{route('evaluation')}}" method="POST"
                style="display: none;"> @csrf
      </form>
  </header>
  <article class="c-box__body">
    @foreach($exams as $exam)

    <div class="c-box__item">
      <evaluation date="{{$exam->completed_at->diffForHumans()}}" grade="{{$exam->value}}"></evaluation>
    </div>
    @endforeach
    @if(count($exams) == 0)
      <p class="caso-vazio">Você não possui avaliações para serem visualizadas :(</p>
    @endif
  </article>
</section>
@endsection
