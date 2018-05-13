@extends('layouts.admin')

@section('content')
<section class="c-box">
  <header class="c-box__header">
    <h3 class="c-box__title">Painel de Avaliações</h3>
    <a class="btn is-secondary" href="#">Faça uma nova Avalição</a>
  </header>
  <article class="c-box__body">
    <div class="alert alert-danger">
    <!-- Aqui ficaria legal, um icone no lado esquerdo, e 2 linhas no lado direito com essas informações... ai tu ve como achar melhor.-->
        (ICONE) - Avaliação realizada 01/01/2018 as 10:00hrs. - 10/20 (Acertos) (50% (Ou) Nota 5.00)
    </div>
    @if(false)
    <div class="alert alert-danger">
        Você não tem avaliaçoes para visualizar.
    </div>
    @endif
  </article>
</section>
@endsection
