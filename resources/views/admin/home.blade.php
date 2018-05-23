@extends('layouts.admin')

@section('content')
<section class="c-box" style="min-width: 600px">
  <header class="c-box__header">
    <h3 class="c-box__title is-small">Painel de Questões</h3>
    <a class="btn is-secondary" href="{{route('admin.evaluation')}}">Adicionar</a>
  </header>
  <div class="c-box__body">
    @foreach($inputs as $input)
    <div class="c-box__item">
      <question
        remover="{{ route('admin.remover', ['id' => $input->id]) }}"
        id="{{ $input->id }}"
        statement="{{ $input->question }}"
        type="{{ $input->type_id }}"/>
    </div>
    @endforeach
    @if(false)
    <div class="c-box__item">
      Você não tem Questões para visualizar.
    </div>
    @endif
  </div>
</section>
@endsection
