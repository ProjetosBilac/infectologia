@extends('layouts.admin')

@section('content')
<section class="c-box">
  <header class="c-box__header">
    <h3 class="c-box__title is-small">Painel de Questões</h3>
    <a class="btn is-secondary" href="{{route('admin.evaluation')}}">Adicionar</a>
  </header>
  <div class="c-box__body">
    <div class="c-box__item" v-for="question in questions"
         :key="question.id">
      <question
        @removeQuestion="removeQuestion()"
        :id="question.id"
        :statement="question.statement"
        :type="question.type"/>
    </div>
    @if(false)
    <div class="c-box__item">
      Você não tem Questões para visualizar.
    </div>
    @endif
  </div>
</section>
@endsection
