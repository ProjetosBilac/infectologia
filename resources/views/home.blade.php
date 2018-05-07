@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Avaliações</div>

                <div class="card-body">
                        <div class="alert alert-success">
                            Faça uma nova Avalição, <a href="#">Clique Aqui</a> <!-- Acho que um Botão no Header do Card fica legal. -->
                        </div>

                        <div class="alert alert-danger">
                        <!-- Aqui ficaria legal, um icone no lado esquerdo, e 2 linhas no lado direito com essas informações... ai tu ve como achar melhor.--> 
                            (ICONE) - Avaliação realizada 01/01/2018 as 10:00hrs. - 10/20 (Acertos) (50% (Ou) Nota 5.00)
                        </div>

                        <!-- se meu json retornar vazio, tu exibe isso, se ele retornar cheio, tu exibe um for do conteudo com a formatação a cima. -->
                        <!-- Apaga os comments depois. abçs. -->
                        @if(false)
                        <div class="alert alert-danger">
                            Você não tem avaliaçoes para visualizar.
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
