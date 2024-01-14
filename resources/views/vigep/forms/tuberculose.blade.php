@extends('layouts.layoutForms')
@section('title','ANTI-RÁBICO')
@section('typeNotification','ANTI-RÁBICO HUMANO')
@section('codCidNotification','W - 64')
<form method="POST" action="{{ route('vigep.tuberculoseCases.storeOrUpdate') }}">
    @csrf
    @section('content')

    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados Complementares do Caso</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_promptuary">31 - Nº do Prontuário</label>
                    <input type="text" name="tuberculosis_case_promptuary" id="tuberculosis_case_promptuary" class="form-control">
                </div>

                <div class="form-group col-md-9">
                    <label for="tuberculosis_case_entry">32 - Tipo de Entrada</label>
                    <select name="tuberculosis_case_entry" id="tuberculosis_case_entry" class="form-control">
                        <option selected>4 - Não Sabe</option>
                        <option>1 - Caso Novo</option>
                        <option>2 - Recidiva</option>
                        <option>3 - Reingresso Após Abandono</option>
                        <option>5 - Transferência</option>
                        <option>6 - Pós-óbito</option>
                    </select>
                </div>
            </div>

            <p>33 - Populações Especiais</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_population_freedom_private">População Privada de Liberdade</label>
                    <select name="tuberculosis_case_population_freedom_private" id="tuberculosis_case_population_freedom_private" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_population_health_worker">Profissional de Saúde</label>
                    <select name="tuberculosis_case_population_health_worker" id="tuberculosis_case_population_health_worker" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_population_homeless">População em Situação de Rua</label>
                    <select name="tuberculosis_case_population_homeless" id="tuberculosis_case_population_homeless" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_population_immigrant">Imigrante</label>
                    <select name="tuberculosis_case_population_immigrant" id="tuberculosis_case_population_immigrant" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="tuberculosis_case_beneficiary">34 - Beneficiário de programa de
                    transferência de renda do governo</label>
                <select name="tuberculosis_case_beneficiary" id="tuberculosis_case_beneficiary" class="form-control">
                    <option selected>9 - Ignorado</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_form">35 - Forma</label>
                    <select name="tuberculosis_case_form" id="tuberculosis_case_form" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - Pulmonar</option>
                        <option>2 - Extrapulmonar</option>
                        <option>3 - Pulmonar + Extrapulmonar</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_extrapulmonary">36 - Se Extrapulmonar</label>
                    <select name="tuberculosis_case_extrapulmonary" id="tuberculosis_case_extrapulmonary" class="form-control">
                        <option selected>10 - Outra</option>
                        <option>1 - Pleural</option>
                        <option>2 - Gang. Perif.</option>
                        <option>3 - Geniturinária</option>
                        <option>4 - Óssea</option>
                        <option>5 - Ocular</option>
                        <option>6 - Miliar</option>
                        <option>7 - Meningoencefálico</option>
                        <option>8 - Cutânea</option>
                        <option>9 - Laringea</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_extrapulmonary_COMPLEMENT">Outra</label>
                    <input type="text" name="tuberculosis_case_extrapulmonary_COMPLEMENT" id="tuberculosis_case_extrapulmonary_COMPLEMENT" class="form-control">
                </div>
            </div>
            <p>37 - Doenças e Agravos Associados</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_disease_aids">Aids</label>
                    <select name="tuberculosis_case_disease_aids" id="tuberculosis_case_disease_aids" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_disease_alcoholism">Alcoolismo</label>
                    <select name="tuberculosis_case_disease_alcoholism" id="tuberculosis_case_disease_alcoholism" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_disease_diabetes">Diabetes</label>
                    <select name="tuberculosis_case_disease_diabetes" id="tuberculosis_case_disease_diabetes" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_disease_mental">Doença Mental</label>
                    <select name="tuberculosis_case_disease_mental" id="tuberculosis_case_disease_mental" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_disease_drugs">Uso de Drogas Ilícitas</label>
                    <select name="tuberculosis_case_disease_drugs" id="tuberculosis_case_disease_drugs" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_disease_smoking">Tabagismo</label>
                    <select name="tuberculosis_case_disease_smoking" id="tuberculosis_case_disease_smoking" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_disease_other">Outras</label>
                    <select name="tuberculosis_case_disease_other" id="tuberculosis_case_disease_other" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="tuberculosis_case_disease_COMPLEMENT">Outras</label>
                    <input type="text" name="tuberculosis_case_disease_COMPLEMENT" id="tuberculosis_case_disease_COMPLEMENT" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_sputum">38 - Baciloscopia de Escarro (diagnóstico)</label>
                    <select name="tuberculosis_case_sputum" id="tuberculosis_case_sputum" class="form-control">
                        <option selected>4 - Não se aplica</option>
                        <option>1 - Positiva</option>
                        <option>2 - Negativa</option>
                        <option>3 - Não Realizada</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_chest_xray">39 - Radiografia do Tórax</label>
                    <select name="tuberculosis_case_chest_xray" id="tuberculosis_case_chest_xray" class="form-control">
                        <option selected>4 - Não Realizado</option>
                        <option>1 - Suspeito</option>
                        <option>2 - Normal</option>
                        <option>3 - Outra Patologia</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_hiv">40 - HIV</label>
                    <select name="tuberculosis_case_hiv" id="tuberculosis_case_hiv" class="form-control">
                        <option selected>4 - Não Realizado</option>
                        <option>1 - Positivo</option>
                        <option>2 - Negativo</option>
                        <option>3 - Em Andamento</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tuberculosis_case_therapy">41 - Terapia Antirretroviral Durante o Tratamento para a TB</label>
                    <select name="tuberculosis_case_therapy" id="tuberculosis_case_therapy" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="tuberculosis_case_histopathology">42 - Histopatologia</label>
                    <select name="tuberculosis_case_histopathology" id="tuberculosis_case_histopathology" class="form-control">
                        <option selected>5 - Não Realizado</option>
                        <option>1 - Baar Positivo</option>
                        <option>2 - Sugestivo de TB</option>
                        <option>3 - Não Sugestivo de TB</option>
                        <option>4 - Em Andamento</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_culture">43 - Cultura</label>
                    <select name="tuberculosis_case_culture" id="tuberculosis_case_culture" class="form-control">
                        <option selected>4 - Não Realizado</option>
                        <option>1 - Positivo</option>
                        <option>2 - Negativo</option>
                        <option>3 - Em Andamento</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_tmrtb">44 - Teste Molecular Rápido TB (TMR-TB)</label>
                    <select name="tuberculosis_case_tmrtb" id="tuberculosis_case_tmrtb" class="form-control">
                        <option selected>5 - Não Realizado</option>
                        <option>1 - Detectável sensível à Rifampicina</option>
                        <option>2 - Detectável Resistente à Rifampicina</option>
                        <option>3 - Não Detectável</option>
                        <option>4 - Inconclusivo</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_sensibility">45 - Teste de Sensibilidade</label>
                    <select name="tuberculosis_case_sensibility" id="tuberculosis_case_sensibility" class="form-control">
                        <option selected>7 - Não realizado</option>
                        <option>1 - Resistente somente à Isoniazida</option>
                        <option>2 - Resistente somente à Rifampicina</option>
                        <option>3 - Resistente à Isoniazida e Rifampicina</option>
                        <option>4 - Resistente a outras drogas de 1ª linha</option>
                        <option>5 - Sensível</option>
                        <option>6 - Em andamento</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tuberculosis_case_start_date">46 - Data de Início do Tratamento Atual
                    </label>
                    <input type="date" name="tuberculosis_case_start_date" id="tuberculosis_case_start_date" class="form-control">
                </div>
                <div class="form-group col-md-8">
                    <label for="tuberculosis_case_total_contacts">47 - Total de Contatos Identificados</label>
                    <input type="text" name="tuberculosis_case_total_contacts" id="tuberculosis_case_total_contacts" class="form-control">
                </div>
            </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="Nome_Inv">Nome</label>
            <input type="text" name="Nome_Inv" id="Nome_Inv" class="form-control">
        </div>

        <div class="form-group col-md-6">
            <label for="Funcao_Inv">Função</label>
            <input type="text" name="Funcao_Invo" id="Funcao_Inv" class="form-control">
        </div>


    </div>

    </fieldset>
    <div style="display: flex; justify-content: center;">
        <input type="submit" value="Enviar" class="btn btn-primary">
</form>
</div>
</div>
<br>
@endsection