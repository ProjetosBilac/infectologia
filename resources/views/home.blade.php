@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest
                        Você NÃO esta logado.
                    @else
                        Olá, Bem Vindo, você esta Logado. !! <br>
                        Lembre-se, O MAGO É IMPLACAVEL !!
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
