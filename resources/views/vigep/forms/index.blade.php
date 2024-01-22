@extends('layouts.master')

@section('title', 'Formulários')

@section('content')
    <link href="{{ asset('css/dashboardForms.css') }}" rel="stylesheet">

    <div class="container">
        <h1 class="text-center">Escolha um Formulário</h1>

        <!-- Campo de pesquisa -->
        <div class="form-group">
            <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar formulários...">
        </div>

        <div class="btn-container" id="btnContainer">
            <a href="/vigep/forms/tuberculose" class="btn btn-primary">TUBERCULOSE - SINAN</a>
            <a href="/vigep/forms/antirabico" class="btn btn-success">ANTI-RÁBICO HUMANO - SINAN</a>
            <a href="/vigep/forms/malaria" class="btn btn-warning">MALÁRIA - SINAN</a>
            <a href="/vigep/forms/violence" class="btn btn-secondary">VIOLÊNCIA INTERPESSOAL/AUTOPROVOCADA - SINAN</a>
            <a href="/vigep/forms/influenza" class="btn btn-primary">INFLUENZA - SINAN</a>
        </div>
    </div>

    <script src="{{ asset('js/searchForms.js') }}"></script>
@endsection
