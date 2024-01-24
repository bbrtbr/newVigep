@extends('layouts.master')
@section('title', 'Formularios')
@section('content')
<h2 class="h4 mb-2 text-gray-800">Funcionários</h2>
<link href="{{ asset('css/dashboardForms.css') }}" rel="stylesheet">
@include('vigep.healthworkers.cards')
<a href="/vigep/healtworker/create" class="btn btn-primary">Adicionar</a>

<div class="table-responsive" style="margin-top: 20px;">
    <table class="table table-bordered table-sm" id="dataTableUsers" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Função</th>
                <th>Matrícula</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($healthWorkers as $healwork)
            <tr>
                <td>{{ $healwork->health_worker_name }}</td>
                <td>{{ $healwork->health_worker_function }}</td>
                <td>{{ $healwork->health_worker_registration }}</td>
                <td class="action-icons">
                    <a class="fas fa-edit" title="Editar"></a>
                    <a class="fas fa-trash" title="Excluir"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $healthWorkers->onEachSide(1)->links('pagination::simple-bootstrap-4') }}
</div>

@endsection