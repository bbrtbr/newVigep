@extends('layouts.layoutForms')
@section('title','Malária')
@section('typeNotification','Malária')
@section('codCidNotification','B 54')
<form method="POST" action="{{ route('vigep.rabiescases.storeOrUpdate') }}">
    @csrf
    @section('content')
    <h1 style="text-align: center;">Dados Complementares do Caso</h1>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Antendimento
                    Epidemiológico</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="malaria_case_investig_date">31 - Data da Investigação</label>
                    <input type="date" name="malaria_case_investig_date" id="malaria_case_investig_date"
                        class="form-control">
                </div>

                <div class="form-group col-md-9">
                    <label for="malaria_case_occupation">32 - Ocupação</label>
                    <input type="text" name="malaria_case_occupation" id="malaria_case_occupation" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="malaria_case_activity">33 - Principal Atividade nos Últimos 15 Dias</label>
                    <select name="malaria_case_activity" id="malaria_case_activity" class="form-control">
                        <option selected>99 - Ignorado</option>
                        <option>1 - Agricultura</option>
                        <option>2 - Pecuária</option>
                        <option>3 - Doméstica</option>
                        <option>4 - Turismo</option>
                        <option>5 - Garimpagem</option>
                        <option>6 - Exploração vegetal</option>
                        <option>7 - Caça/pesca</option>
                        <option>8 - Construção de estradas/barragens</option>
                        <option>9 - Mineração</option>
                        <option>10 - Viajante</option>
                        <option>11 - Outros</option>
                        <option>12 - Motorista</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="malaria_case_lamina">34 - Tipo de lâmina</label>
                    <select name="malaria_case_lamina" id="malaria_case_lamina" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - BP</option>
                        <option>2 - BA</option>
                        <option>3 - LVC</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="malaria_case_symptom">35 - Sintomas</label>
                    <select name="malaria_case_symptom" id="malaria_case_symptom" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - Com sintomas</option>
                        <option>2 - Sem sintomas</option>
                    </select>
                </div>
            </div>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados do Exame</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="malaria_case_exam_date">36 - Data do Exame</label>
                    <input type="date" name="malaria_case_exam_date" id="malaria_case_exam_date" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="malaria_case_exam_result">37 - Resultado do Exame</label>
                    <select name="malaria_case_exam_result" id="malaria_case_exam_result" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - Negativo</option>
                        <option>2 - F</option>
                        <option>3 - F+FG</option>
                        <option>4 - V</option>
                        <option>5 - F+V</option>
                        <option>6 - V+FG</option>
                        <option>7 - FG</option>
                        <option>8 - M</option>
                        <option>9 - F+M</option>
                        <option>10 - O</option>
                    </select>
                </div>


                <div class="form-group col-md-3">
                    <label for="malaria_case_parasite">38 - Parasitos por mm<sup>3</sup></label>
                    <input type="text" name="malaria_case_parasite" id="malaria_case_parasite" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="malaria_case_parasite_cross">39 - Parasitemia em "cruzes"</label>
                <select name="malaria_case_parasite_cross" id="malaria_case_parasite_cross" class="form-control">
                    <option selected>9 - Ignorado</option>
                    <option>1 - &lt; +/2 (menor que meia cruz)</option>
                    <option>2 - +/2 (meia cruz)</option>
                    <option>3 - + (uma cruz)</option>
                    <option>4 - ++ (duas cruzes)</option>
                    <option>5 - +++ (três cruzes)</option>
                    <option>6 - ++++ (quatro cruzes)</option>
                </select>
            </div>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Tratamento</strong></legend>
            <br>
            <div class="form-group">
                <label for="malaria_case_treatment_scheme">40 - Esquema de tratamento utilizado, de acordo com Manual de
                    Terapêutica da Malária</label>
                <select name="malaria_case_treatment_scheme" id="malaria_case_treatment_scheme" class="form-control">
                    <option selected>Ignorado</option>
                    <option>1 - Infecções por Pv com Cloroquina em 3 dias e Primaquina em 7 dias</option>
                    <option>2 - Infecções por Pf com Quinina em 3 dias + Doxiciclina em 5 dias + primaquina no 6º dia
                    </option>
                    <option>3 - Infecções mistas por Pv + Pf com Mefloquina em dose única e primaquina em 7 dias
                    </option>
                    <option>4 - Infecções por Pm com cloroquina em 3 dias</option>
                    <option>5 - Infecções por Pv em crianças apresentando vômitos, com cápsulas retais de artesunato em
                        4 dias e Primaquina em 7 dias</option>
                    <option>6 - Infecções por Pf com Mefloquina em dose única e primaquina no segundo dia</option>
                    <option>7 - Infecções por Pf com Quinina em 7 dias</option>
                    <option>8 - Infecções por Pf de crianças com cápsulas retais de artesunato em 4 dias e dose única de
                        Mefloquina no 3º dia e Primaquina no 5º dia</option>
                    <option>9 - Infecções mistas por Pv + Pf com Quinina em 3 dias, doxiciclina em 5 dias e Primaquina
                        em 7 dias</option>
                    <option>10 - Prevenção de recaída da malária por Pv com Cloroquina em dose única semanal durante 3
                        meses</option>
                    <option>11 - Malária grave e complicada</option>
                    <option>12 - Infecções por Pf com a associação Artemeter+Lumerfantrin a em 3 dias</option>
                    <option>99 - Outro esquema utilizado (por médico) - descrever:</option>
                </select>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="malaria_case_other_scheme">Outro esquema utilizado (por médico)</label>
                    <input type="text" name="malaria_case_other_scheme" id="malaria_case_other_scheme"
                        class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="malaria_case_treatment_date">41 - Data Início do Tratamento</label>
                    <input type="date" name="malaria_case_treatment_date" id="malaria_case_treatment_date"
                        class="form-control">
                </div>

            </div>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Conclusão</strong></legend>
            <br>
            <div class="form-group">
                <label for="malaria_case_classification">42 - Classificação Final</label>
                <select name="malaria_case_classification" id="malaria_case_classification" class="form-control">
                    <option selected>Ignorado</option>
                    <option>1 - Confirmado</option>
                    <option>2 - Descartado</option>
                </select>
            </div>
            <p><strong>LOCAL PROVÁVEL DA FONTE DE INFECÇÃO</strong></p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="malaria_case_native">43 - O caso é autóctone do município de residência?</label>
                    <select name="malaria_case_native" id="malaria_case_native" class="form-control">
                        <option selected>3 - Indeterminado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="malaria_case_uf_infection">44 - UF provável de infecção</label>
                    <input type="text" name="malaria_case_uf_infection" id="malaria_case_uf_infection"
                        class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="malaria_case_country_infection">45 - País provável de infecção</label>
                    <input type="text" name="malaria_case_country_infection" id="malaria_case_country_infection"
                        class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="malaria_case_city_infection">46 - Município provável da infecção</label>
                    <input type="text" name="malaria_case_city_infection" id="malaria_case_city_infection"
                        class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="malaria_case_ibge_code">Código (IBGE)</label>
                    <input type="text" name="malaria_case_ibge_code" id="malaria_case_ibge_code" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="malaria_case_district_infection">47 - Distrito</label>
                    <input type="text" name="malaria_case_district_infection" id="malaria_case_district_infection"
                        class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="malaria_case_neighborhood_infection">48 - Bairro</label>
                    <input type="text" name="malaria_case_neighborhood_infection"
                        id="malaria_case_neighborhood_infection" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="malaria_case_local_infection">49 - Localidade provável da infecção</label>
                    <input type="text" name="malaria_case_local_infection" id="malaria_case_local_infection"
                        class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="malaria_case_date_closing">50 - Data de Encerramento</label>
                    <input type="date" name="malaria_case_date_closing" id="malaria_case_date_closing"
                        class="form-control">
                </div>
            </div>

    </div>
    <hr>
    <div class="container">
        <fieldset>
            <br>
            <div class="form-group">
                <label for="malaria_case_obs"><strong>Observações adicionais:</strong></label>
                <input type="text" name="malaria_case_obs" id="malaria_case_obs" class="form-control">
            </div>

        </fieldset>
    </div>


    
    @endsection