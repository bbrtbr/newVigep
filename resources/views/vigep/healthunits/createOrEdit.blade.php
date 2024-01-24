@extends('layouts.master')
@section('title', 'Formularios')
@section('content')
<form method="POST" action="{{ route('vigep.healthunits.storeOrUpdate') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="health_unit_name">Nome</label>
            <input required type="text" name="health_unit_name" id="health_unit_name" class="form-control">
        </div>
        <div class="form-group col-md-8">
            <label for="health_unit_name">Código</label>
            <input required type="text" name="health_unit_code" id="health_unit_code" class="form-control">
        </div>
        <div class="form-group col-md-8">
            <label for="health_unit_name">Email</label>
            <input required type="text" name="health_unit_email" id="health_unit_email" class="form-control">
        </div>
        <div class="form-group col-md-8">
            <label for="health_unit_name">Senha</label>
            <input required type="password" name="health_unit_password" id="health_unit_password" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-warning">Adicionar</button>
</form>

@endsection