<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Adicione a tag CSRF aqui -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Programa Eficiência @yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('build/assets/sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('build/assets/sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!-- Custom styles for Datatables -->
    <link href="{{ asset('build/assets/sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <!-- Custom styles for this Select2-->
    <link href="{{ asset('build/assets/sb-admin-2/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/sb-admin-2/vendor/select2/css/select2-bootstrap4.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')

    @hasSection ('css')
    @yield('css')
    @endif

</head>

<body class="antialiased">

    <h1 style="text-align: center;">SINAN</h1>
    <p style="text-align: center;">SISTEMA DE INFORMAÇÃO DE AGRAVOS DE NOTIFICAÇÃO</p>
    <div class="container">
        <div class="form-group col-md-3">
            <input type="number" name="N°" id="N°" class="form-control" placeholder="N°" style="background-color: rgb(212, 209, 214);">
        </div>

    </div>
    <p style="text-align: center;">FICHA DE INVESTIGAÇÃO <strong>- @yield('typeNotification')</strong></p>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados Gerais</strong></legend>
            <br>

            <div class="form-group">
                <label for="case_type">1 - Tipo de Notificação</label>
                <select name="case_type" id="case_type" class="form-control">
                    <option>Individual</option>
                    <option>Coletiva</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="case_disease">2 - Agravo/Doença</label>
                    <input value="@yield('typeNotification')" type="text" name="case_disease" id="case_disease" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="case_cid">Código (CID)</label>
                    <input type="text" value="@yield('codCidNotification')" name="case_cid" id="case_cid" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="case_notification_date">3 - Data de Notificação</label>
                    <input type="date" name="case_notification_date" id="case_notification_date" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="address_uf">4 - UF</label>
                    <select id="address_uf" name="address_uf" class="form-control" onchange="fetchCities()">
                        <option value="">Selecione um estado</option>
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <label for="address_municipality">5 - Município de Notificação</label>
                    <select name="address_municipality" class="form-control" id="address_municipality">
                        <option value="">Selecione um estado primeiro</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="address_ibge_code">Código (IBGE)</label>
                    <input type="text" name="address_ibge_code" id="address_ibge_code" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="health_unit_name">6 - Unidade de Saúde (ou outra fonte notificadora)</label>
                    <div class="input-group">
                        <select id="health_unit_name" name="health_unit_name" class="form-control">
                            <option value="" disabled selected>Selecione uma opção</option>
                            @foreach ($healthUnits as $unit)
                            <option value="{{ $unit->health_unit_name }}" data-code="{{ $unit->health_unit_code }}">{{ $unit->health_unit_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="unitCode">Código</label>
                    <input disabled type="text" id="health_unit_code" name="health_unit_code" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="case_attendance_date">7 - Data do Atendimento</label>
                    <input type="date" name="case_attendance_date" id="case_attendance_date" class="form-control">
                </div>
            </div>
        </fieldset>


    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Notificação Individual</strong></legend>
            <br>
            <div class="form-group">
                <label for="patient_cpf">CPF</label>
                <input onkeyup="formatNumberCPF(this)" type="text" name="patient_cpf" id="patient_cpf" class="form-control" required>
            </div>
            <div class="form-row">

                <div class="form-group col-md-9">
                    <label for="patient_name">8 - Nome do Paciente</label>
                    <input type="text" name="patient_name" id="patient_name" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="patient_birthday">9 - Data de Nascimento</label>
                    <input type="date" name='patient_birthday' id="patient_birthday" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="patient_age">10 - (ou) Idade</label>
                    <input type="text" name="patient_age" id="patient_age" class="form-control" readonly>
                </div>

                <div class="form-group col-md-3">
                    <label for="patient_sex">11 - Sexo</label>
                    <select name="patient_sex" id="patient_sex" class="form-control">
                        <option selected>I - Ignorado</option>
                        <option>M - Masculino</option>
                        <option>F - Feminino</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="patient_pregnant">12 - Gestante</label>
                    <select name="patient_pregnant" id="patient_pregnant" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - 1° Trimestre</option>
                        <option>2 - 2° Trimestre</option>
                        <option>3 - 3° Trimestre</option>
                        <option>4 - Idade Gestacional Ignorada</option>
                        <option>5 - Não</option>
                        <option>6 - Não se aplica</option>

                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="patient_race">13 - Raça/Cor</label>
                    <select name="patient_race" id="patient_race" class="form-control">
                        <option selected>9 - Ignorada</option>
                        <option>1 - Branca</option>
                        <option>2 - Preta</option>
                        <option>3 - Amarela</option>
                        <option>4 - Parda</option>
                        <option>5 - Indígena</option>
                    </select>
                </div>

            </div>

            <div class="form-group">
                <label for="patient_education">14 - Escolaridade</label>
                <select name="patient_education" id="patient_education" class="form-control">
                    <option selected>9 - Ignorado</option>
                    <option>0 - Analfabeto</option>
                    <option>1 - 1ª a 4ª série incompleta do EF (antigo primário ou 1º grau)</option>
                    <option>2 - 4ª série completa do EF (antigo primário ou 1º grau)</option>
                    <option>3 - 5ª à 8ª série incompleta do EF (antigo ginásio ou 1º grau)</option>
                    <option>4 - Ensino fundamental completo (antigo ginásio ou 1º grau)</option>
                    <option>5 - Ensino médio incompleto (antigo colegial ou 2º grau)</option>
                    <option>6 - Ensino médio completo (antigo colegial ou 2º grau)</option>
                    <option>7 - Educação superior incompleta</option>
                    <option>8 - Educação superior completa</option>

                    <option>10 - Não se aplica</option>

                </select>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="patient_cns">15 - Número do Cartão SUS</label>
                    <input type="text" name="patient_cns" id="patient_cns" class="form-control">
                </div>

                <div class="form-group col-md-8">
                    <label for="patient_mother_name">16 - Nome da mãe</label>
                    <input type="text" name="patient_mother_name" id="patient_mother_name" class="form-control">
                </div>


            </div>
    </div>
    </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados de Residência</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="address_uf">17 - UF</label>
                    <input type="text" name="address_uf" id="address_uf" class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="address_municipality">18 - Município de Residência</label>
                    <input type="text" name="address_municipality" id="address_municipality" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="address_ibge_code">Código (IBGE)</label>
                    <input type="text" name="address_ibge_code" id="address_ibge_code" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="address_district">19 - Distrito</label>
                    <input type="text" name="address_district" id="address_district" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="address_neighborhood">20 - Bairro</label>
                    <input type="text" name="address_neighborhood" id="address_neighborhood" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="address_address">21 - Logradouro</label>
                    <input type="text" name="address_address" id="address_address" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="address_address_code">Código</label>
                    <input type="text" name="address_address_code" id="address_address_code" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="address_address_number">22 - Número</label>
                    <input type="text" name="address_address_number" id="address_address_number" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="address_address_complement">23 - Complemento</label>
                    <input type="text" name="address_address_complement" id="address_address_complement" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="address_geofield1">24 - Geo campo 1</label>
                    <input type="text" name="address_geofield1" id="address_geofield1" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="address_geofield2">25 - Geo campo 2</label>
                    <input type="text" name="address_geofield2" id="address_geofield2" class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="address_address_reference">26 - Ponto de Referência</label>
                    <input type="text" name="address_address_reference" id="address_address_reference" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="address_cep">27 - CEP</label>
                    <input type="text" name="address_cep" id="address_cep" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="address_phone">28 - (DDD) Telefone</label>
                    <input onkeyup="formatPhoneNumber(this)" type="text" name="address_phone" id="address_phone" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="address_zone">29 - Zona</label>
                    <select name="address_zone" id="address_zone" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Urbana</option>
                        <option>2 - Rural</option>
                        <option>3 - Periurbana</option>

                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="address_country">30 - País (se residente fora do Brasil)</label>
                    <input type="text" name="address_country" id="address_country" class="form-control">
                </div>
            </div>
        </fieldset>
    </div>
    <hr>

    @yield('content')
</body>

<script src="{{ asset('js/scriptForms/getAge.js') }}"></script>
<script src="{{ asset('js/scriptForms/getCityStateNotification.js') }}"></script>
<script src="{{ asset('js/scriptForms/formatNumberPhone.js') }}"></script>
<script src="{{ asset('js/scriptForms/formatNumberCPF.js') }}"></script>
<script src="{{ asset('js/scriptForms/verifyPacient.js') }}"></script>
<script src="{{ asset('js/scriptForms/getCodeHealthUnit.js') }}"></script>

</html>