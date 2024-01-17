@extends('layouts.master')
@section('title', 'Formularios')
@section('content')
<form method="POST" action="{{ route('vigep.healthunits.storeOrUpdate') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="health_unit_name">Nome</label>
            <input type="text"  name="health_worker_name" id="health_worker_name" class="form-control">
        </div>
        <div class="form-group col-md-4">
            <label for="health_unit_name">Código</label>
            <input  type="text" name="health_worker_code" id="health_worker_code" class="form-control">
        </div>
        <div class="form-group col-md-4">


        </div>
        <button type="submit" class="btn btn-warning">Adicionar</button>
    </div>
</form>

@endsection