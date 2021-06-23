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
                        <table class="table table-bordered table-hover" id="tabelaprodutos">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Idade</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $c)
                                <tr>
                                    <td>{{ $c-> id}}</td>
                                    <td>{{ $c-> nome}}</td>
                                    <td>{{ $c-> endereco}}</td>
                                    <td>{{ $c-> idade}}</td>
                                    <td>{{ $c-> email}}</td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/novocliente" class="btn btn-sm btn-primary" role="button">Novo cliente</a>
                </div>   
            </div>
            
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

@endsection
</html>
@section('body')
        
@endsection