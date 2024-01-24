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
            <div class="form-group col-md-6">
            <label for="health_unit_name">Unidade de Saúde</label>
            <div class="input-group">
                <select id="health_unit_name" name="health_unit_name" class="form-control">
                    <option value="" disabled selected>Selecione uma opção</option>
                    @foreach ($healthUnits as $unit)
                    <option value="{{ $unit->health_unit_name }}" data-code="{{ $unit->health_unit_code }}">{{
                        $unit->health_unit_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="unitCode">Código</label>
            <input disabled type="text" id="health_unit_code" name="health_unit_code" class="form-control">
        </div>
        </div>
        <button type="submit" class="btn btn-warning">Adicionar</button>
    </form>
</div>
<script src="{{ asset('js/scriptForms/getCodeHealthUnit.js') }}"></script>
@endsection
