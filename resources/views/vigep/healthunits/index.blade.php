@extends('layouts.master')
@section('title', 'Formularios')
@section('content')
<a href="/vigep/healthunits/create" class="btn btn-primary">Adicionar</a>
<div class="table-responsive" style="margin-top: 20px;">
    <table class="table table-bordered table-sm" id="dataTableUsers" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($healthUnits as $healthUnit)
            <tr>
                <td>{{ $healthUnit->health_unit_name }}</td>
                <td>{{ $healthUnit->health_unit_code }}</td>
                <td><a href="/vigep/healthunits/{{ $healthUnit->health_unit_id }}/edit" class="fa fa-edit"></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection