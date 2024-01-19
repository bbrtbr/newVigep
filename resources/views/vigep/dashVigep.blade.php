@extends('layouts.master')
@section('title', 'Formularios')
@section('content')
<link href="{{ asset('css/dashboardForms.css') }}" rel="stylesheet">

<body>
    <h2 class="h4 mb-2 text-gray-800">Dashboard</h2>
    <a href="/vigep/forms" class="btn btn-primary">Formulários</a>
    <a href="/vigep/healthunits" class="btn btn-primary">Estabelecimentos</a>
    <a href="/vigep/healthworker" class="btn btn-primary">Funcionários</a>
    <div class="card-body">
        @include('vigep.cards')
        <div class="search">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-search" style="font-size: 1rem; width: 1.5rem;"></i>
                    </span>
                </div>
                <input type="text" id="searchInput" class="form-control" style="padding-left: 10px;"
                    placeholder="Pesquisar...">

            </div>
        </div>
        <div class="table-responsive" style="margin-top: 20px;">
            <table class="table table-bordered table-sm" id="dataCasesTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Caso</th>
                        <th>Paciente</th>
                        <th>Estabelecimento</th>
                        <th>Status</th>
                        <th>Responsável</th>
                        <th>Alterar</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($cases as $case)
                    <tr>
                        <td>{{ $case->case_disease }}</td>
                        <td>{{ $case->getDate()['patientName'] }}</td>
                        <td>{{ $case->getDate()['healthUnitName'] }}</td>
                        <td>{{ $case->case_status }}</td>
                        <td>{{ $case->getDate()['workerName'] }}</td>
                        <td class="action-icons">
                            <a  class="fas fa-edit" title="Editar"></a>
                            <a  class="fas fa-trash" title="Excluir"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $cases->onEachSide(1)->links('pagination::simple-bootstrap-4') }}
</body>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $("#searchInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#dataCasesTable tbody tr").each(function() {
            var rowText = $(this).text().toLowerCase();
            if (rowText.indexOf(value) > -1) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});

</script>