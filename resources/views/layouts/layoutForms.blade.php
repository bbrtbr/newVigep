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
    <form action="cad.php" method="get">
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
        <input type="text" name="case_type" id="typeNotificationInput" class="form-control">
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
            <label for="ufNotification">4 - UF</label>
            <select id="ufNotification" name="uf" class="form-control" onchange="fetchCities()">
                <option value="">Selecione um estado</option>
            </select>
        </div>

        <div class="form-group col-md-8">
            <label for="cityNotification">5 - Município de Notificação</label>
            <select name="city" class="form-control" id="cityNotification">
                <option value="">Selecione um estado primeiro</option>
            </select>
        </div>

        <div class="form-group col-md-3">
            <label for="ibgeCode">Código (IBGE)</label>
            <input type="text" name="ibge_code" id="ibgeCode" class="form-control">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="notifyingSource">6 - Unidade de Saúde (ou outra fonte notificadora)</label>
            <input id="notifyingSource" list="suggestionUnidSaude" name="notifying_source" class="form-control">
            <datalist id="suggestionUnidSaude"></datalist>
        </div>

        <div class="form-group col-md-3">
            <label for="unitCode">Código</label>
            <input type="text" id="unitCode" name="unit_code" class="form-control">
        </div>

        <div class="form-group col-md-3">
            <label for="firstSymptomsDate">7 - Data dos Primeiros Sintomas</label>
            <input type="date" name="first_symptoms_date" id="firstSymptomsDate" class="form-control">
        </div>
            </fieldset>

            
        </div>
        <hr>
        <div class="container">
            <fieldset>
                <legend style="text-align: center;"><strong>Notificação Individual</strong></legend>
                <br>
                <div class="form-row">

                    <div class="form-group col-md-9">
                        <label for="nome_do_paciente">8 - Nome do Paciente</label>
                        <input type="text" name="nome_do_paciente" id="nome_do_paciente" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="data_de_nascimento">9 - Data de Nascimento</label>
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="age">10 - (ou) Idade</label>
                        <input type="text" id="age" class="form-control" readonly>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="sexo">11 - Sexo</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option selected>Escolher...</option>
                            <option>M - Masculino</option>
                            <option>F - Feminino</option>
                            <option>I - Ignorado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Gestante">12 - Gestante</label>
                        <select name="Gestante" id="Gestante" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - 1° Trimestre</option>
                            <option>2 - 2° Trimestre</option>
                            <option>3 - 3° Trimestre</option>
                            <option>4 - Idade Gestacional Ignorada</option>
                            <option>5 - Não</option>
                            <option>6 - Não se aplica</option>
                            <option>9 - Ignorado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Raça/Cor">13 - Raça/Cor</label>
                        <select name="Raça/Cor" id="Raça/Cor" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Branca</option>
                            <option>2 - Preta</option>
                            <option>3 - Amarela</option>
                            <option>4 - Parda</option>
                            <option>5 - Indígena</option>
                            <option>9 - Ignorada</option>
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <label for="Escolaridade">14 - Escolaridade</label>
                    <select name="Escolaridade" id="Escolaridade" class="form-control">
                        <option selected>Escolher...</option>
                        <option>0 - Analfabeto</option>
                        <option>1 - 1ª a 4ª série incompleta do EF (antigo primário ou 1º grau)</option>
                        <option>2 - 4ª série completa do EF (antigo primário ou 1º grau)</option>
                        <option>3 - 5ª à 8ª série incompleta do EF (antigo ginásio ou 1º grau)</option>
                        <option>4 - Ensino fundamental completo (antigo ginásio ou 1º grau)</option>
                        <option>5 - Ensino médio incompleto (antigo colegial ou 2º grau)</option>
                        <option>6 - Ensino médio completo (antigo colegial ou 2º grau)</option>
                        <option>7 - Educação superior incompleta</option>
                        <option>8 - Educação superior completa</option>
                        <option>9 - Ignorado</option>
                        <option>10 - Não se aplica</option>

                    </select>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="numero_do_cartao_sus">15 - Número do Cartão SUS</label>
                        <input type="text" name="numero_do_cartao_sus" id="numero_do_cartao_sus" class="form-control">
                    </div>

                    <div class="form-group col-md-8">
                        <label for="Nome da mãe">16 - Nome da mãe</label>
                        <input type="text" name="Nome da mãe" id="Nome da mãe" class="form-control">
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
                        <label for="UF_DR">17 - UF</label>
                        <input type="text" name="UF_DR" id="UF_DR" class="form-control""></div>

                    <div class=" form-group col-md-5">
                        <label for="Município de Residência">18 - Município de Residência</label>
                        <input type="text" name="Município de Residência" id="Município de Residência" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Código (IBGE)_DR">Código (IBGE)</label>
                        <input type="text" name="Código (IBGE)_DR" id="Código (IBGE)_DR" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Distrito">19 - Distrito</label>
                        <input type="text" name="Distrito" id="Distrito" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="Bairro">20 - Bairro</label>
                        <input type="text" name="Bairro" id="Bairro" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Logradouro">21 - Logradouro</label>
                        <input type="text" name="Logradouro" id="address" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Código_DR">Código</label>
                        <input type="text" name="Código_DR" id="Código_DR" class="form-control">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="Número">22 - Número</label>
                        <input type="text" name="Número" id="Número" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="Complemento">23 - Complemento</label>
                        <input type="text" name="Complemento" id="Complemento" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="Geo campo 1">24 - Geo campo 1</label>
                        <input type="text" name="Geo campo 1" id="Geo campo 1" class="form-control">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="Geo campo 2">25 - Geo campo 2</label>
                        <input type="text" name="Geo campo 2" id="Geo campo 2" class="form-control">
                    </div>

                    <div class="form-group col-md-5">
                        <label for="Ponto de Referência">26 - Ponto de Referência</label>
                        <input type="text" name="Ponto de Referência" id="Ponto de Referência" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="CEP">27 - CEP</label>
                        <input type="text" name="CEP" id="CEP" class="form-control">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="(DDD) Telefone">28 - (DDD) Telefone</label>
                        <input type="text" id="numberPhone" onkeyup="formatPhoneNumber(this)" class="form-control">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="Zona">29 - Zona</label>
                        <select name="Zona" id="Zona" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Urbana</option>
                            <option>2 - Rural</option>
                            <option>3 - Periurbana</option>
                            <option>9 - Ignorado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="País">30 - País (se residente fora do Brasil)</label>
                        <input type="text" name="País" id="País" class="form-control">
                    </div>

                </div>
            </fieldset>
        </div>
        @yield('content')
</body>
<script src="{{ asset('js/scriptForms/getCodeSugestion.js') }}"></script>
<script src="{{ asset('js/scriptForms/getAge.js') }}"></script>
<script src="{{ asset('js/scriptForms/getCityStateNotification.js') }}"></script>
<script src="{{ asset('js/scriptForms/formatNumberPhone.js') }}"></script>

</html>