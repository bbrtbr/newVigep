@extends('layouts.master')
@section('title','Formularios')
@section('content')

<link href="{{ asset('css/dashboardForms.css') }}" rel="stylesheet">

<body>
    <div class="container">
        <h1 class="text-center">Escolha um Formulário</h1>

        <!-- Campo de pesquisa -->
        <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar formulários...">
        </div>

        <div class="btn-container" id="btnContainer">
            <a href="forms/antirabico" class="btn btn-primary">Influenza - SINAN</a>
            <a href="forms/antirabico" class="btn btn-success">ANTI-RÁBICO HUMANO - SINAN</a>
            <a href="forms/antirabico" class="btn btn-danger">Dengue - SINAN</a>
            <a href="forms/antirabico" class="btn btn-warning">Zika - SINAN</a>
            <a href="forms/antirabico" class="btn btn-success">Febre Amarela - SINAN</a>
            <a href="forms/antirabico" class="btn btn-primary">Meningite - SINAN</a>
            <a href="forms/antirabico" class="btn btn-primary">Intoxicação Exógena - SINAN</a>


        </div>
    </div>

    <script src="{{ asset('js/searchForms.js') }}"></script>




</body>
@endsection