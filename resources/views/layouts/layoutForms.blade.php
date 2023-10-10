<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/forms.css') }}" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

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
                    <label for="Tipo de Notificação">1 - Tipo de Notificação</label>
                    <input type="text" name="Tipo de Notificação" id="typeNotificationInput" class="form-control">

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Agravo/Doença">2 - Agravo/Doença</label>
                        <input value="@yield('typeNotification')" type="text" name="Agravo/Doençao" id="Agravo/Doença" class="form-control""></div>

                    <div class=" form-group col-md-3">
                        <label for="Código (CID)">Código (CID)</label>
                        <input type="text" value="@yield('codCidNotification')" name="Código (CID)" id="Código (CID)" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Data de Notificação">3 - Data de Notificação</label>
                        <input type="date" name="Data de Notificação" id="Data de Notificação" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-1">
                        <label for="UF">4 - UF</label>
                        <select id="ufNotification" class="form-control" onchange="fetchCities()">
                            <option value="">Selecione um estado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-8">
                        <label for="Município de Notificação">5 - Município de Notificação</label>
                        <select class="form-control" id="cityNotification">
                            <option value="">Selecione um estado primeiro</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Código (IBGE)">Código (IBGE)</label>
                        <input type="text" name="Código (IBGE)" id="Código (IBGE)" class="form-control">
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Unidade de Saúde (ou outra fonte notificadora)">6 - Unidade de Saúde (ou outra fonte notificadora)</label>
                        <input id='unidSaude' list='sugestionUnidSaude' type="text" name="Unidade de Saúde (ou outra fonte notificadora)" class="form-control">
                        <datalist id="sugestionUnidSaude"></datalist>

                    </div>

                    <div class="form-group col-md-3">
                        <label for="Código">Código</label>
                        <input type="text" id="codUnidSaude" class="form-control">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Data dos Primeiros Sintomas">7 - Data dos Primeiros Sintomas</label>
                        <input type="date" name="Data dos Primeiros Sintomas" id="Data dos Primeiros Sintomas" class="form-control">
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