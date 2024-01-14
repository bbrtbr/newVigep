@extends('layouts.master')
@section('title', 'Formularios')
@section('content')
<link href="{{ asset('css/dashboardForms.css') }}" rel="stylesheet">
<body>
<a href="/vigep/forms" class="btn btn-primary">Formulários</a>
<a href="/vigep/healthunits" class="btn btn-primary">Estabelecimentos</a>
    <div class="card-body">
        <div class="search">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-search" style="font-size: 1rem; width: 1.5rem;"></i>
                    </span>
                </div>
                <input type="text" id="searchInput" class="form-control" style="padding-left: 10px;" placeholder="Pesquisar...">
                
            </div>
        </div>
        <div class="table-responsive" style="margin-top: 20px;">
            <table class="table table-bordered table-sm" id="dataTableUsers" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Caso</th>
                        <th>Paciente</th>
                        <th>Unidade Saúde</th>
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
                        <td>{{ $case->case_cid }}</td>
                        <td>{{ $case->getDate()['workerName'] }}</td>
                        <td><a href="/vigep/rabiescases/{{ $case->case_id }}/edit" class="fa fa-edit"></a></td>
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
            $("#dataTableUsers tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>
