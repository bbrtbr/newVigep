@extends('layouts.master')

@section('title', 'Formulários')

@section('content')
<div class="container">
    <h2>Adicionar Profissional de Saúde</h2>
    <form method="POST" action="{{ route('vigep.healthworkers.storeOrUpdate') }}">
        @csrf
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="health_worker_name">Nome</label>
                <input type="text" name="health_worker_name" id="health_worker_name" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="health_worker_registration">Matrícula</label>
                <input type="text" name="health_worker_registration" id="health_worker_registration" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="health_worker_function">Função</label>
                <input type="text" name="health_worker_function" id="health_worker_function" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-warning">Adicionar</button>
    </form>
</div>
@endsection
