@extends('layout.app', ["current"=>"clientes"])

<html>
<head>
    <title>Cadastro de Clientes</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            padding: 10px;
        }
    </style>
</head>
@section('body')
<body>
    <main role="main">
        <div class="row">
            <div class="container">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/clientes" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente </label>
                                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome do Cliente">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente </label>
                                <input type="number" id="idade" class="form-control" name="idade" placeholder="Idade do Cliente">
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente </label>
                                <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Endereço do Cliente">
                            </div>
                            <div class="form-group">
                                <label for="email">Email do Cliente </label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="E-mail do Cliente">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="cancel" class="btn btn-primary btn-sm">Cancelar</button>
                        </form>
                    </div>
@if($errors->any())
                    <div class="card-footer">
@foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
@endforeach                        
                    </div>
@endif
                </div>
            </div>
        </div>
    </main>



@endsection
</html>