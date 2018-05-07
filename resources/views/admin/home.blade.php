@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Questões</div>

                <div class="card-body">
                        <div class="alert alert-success">
                            Adicione uma nova Questão, <a href="{{route('admin.evaluation')}}">Clique Aqui</a> <!-- Acho que um Botão no Header do Card fica legal. -->
                        </div>

                        <div class="alert alert-danger">
                        <!-- Aqui ficaria legal, um icone no lado esquerdo, e 2 linhas no lado direito com essas informações... ai tu ve como achar melhor.--> 
                            (ICONE) - Enunciado da Questão - Informações da mesma, como opções de resposta ??
                            Botão REMOVER
                            <!-- não insiriremos o botão de editar, vamos perder mto tempo nisso, sómente o remover, exibe um modal de confirmação que envia um solicitação POST a uma rota X com o ID da questão. -->
                        </div>

                        <!-- se meu json retornar vazio, tu exibe isso, se ele retornar cheio, tu exibe um for do conteudo com a formatação a cima. -->
                        <!-- Apaga os comments depois. abçs. -->
                        @if(false)
                        <div class="alert alert-danger">
                            Você não tem Questões para visualizar.
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
