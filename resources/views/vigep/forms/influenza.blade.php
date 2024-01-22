@extends('layouts.layoutForms')
@section('title','Influenza')
@section('typeNotification','Influenza')
@section('codCidNotification','CID - J11')
<form method="POST" action="{{ route('vigep.influenzaCases.storeOrUpdate') }}">
    @csrf
    @section('content')
    <hr>
    <h1 style="text-align: center;">Dados Complementares do Caso</h1>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Antecedentes Epidemiológicos</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_date">31 - Data da Investigação</label>
                    <input type="date" name="influenza_case_date" id="influenza_case_date" class="form-control">
                </div>

                <div class="form-group col-md-9">
                    <label for="influenza_case_occupation">32 - Ocupação</label>
                    <input type="text" name="influenza_case_occupation" id="influenza_case_occupation"
                        class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_vax">33 - Recebeu Vacina contra Gripe</label>
                    <br><br>
                    <select name="influenza_case_vax" id="influenza_case_vax" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_vax_date">34 - Se sim, data da última dose</label>
                    <br><br>
                    <input type="date" name="influenza_case_vax_date" id="influenza_case_vax_date" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_vax_p">35 - Recebeu Vacina Anti-Pneumocócica</label>
                    <select name="influenza_case_vax_p" id="influenza_case_vax_p" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_vax_p_date">36 - Se sim, data da última dose</label>
                    <br><br>
                    <input type="date" name="influenza_case_vax_p_date" id="influenza_case_vax_p_date"
                        class="form-control">
                </div>

            </div>
            <div class="form-group">
                <label for="influenza_case_contact">37 - Contato com Caso Suspeito ou Confirmado de Influenza Humana por
                    Novo Subtipo (até 10 dias antesdo início dos sinais e sintomas)</label>
                <select type="text" name="influenza_case_contact" id="influenza_case_contact" class="form-control">
                    <option selected>9 - Ignorado</option>
                    <option>1 - Domicílio</option>
                    <option>2 - Vizinhança</option>
                    <option>3 - Trabalho</option>
                    <option>4 - Creche/Escola</option>
                    <option>5 - Posto de Saúde/Hospital</option>
                    <option>6 - Outro Estado/Município</option>
                    <option>7 - Sem História de Contato</option>
                    <option>8 - Outro País</option>
                    <option>10 - Meio de Transporte</option>
                    <option>11 - Outro</option>
                </select>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="influenza_case_transport">Meio de Transporte</label>
                    <input type="text" name="influenza_case_transport" id="influenza_case_transport"
                        class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="influenza_case_other">Outros</label>
                    <input type="text" name="influenza_case_other" id="influenza_case_other" class="form-control">
                </div>

            </div>

            <h1 style="font-size: 13pt;">38 - Informações sobre Deslocamento (datas e locais freqüentados no período de
                até 10 dias antes do início dos sinais e sintomas)</h1>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_des_1_date">Data</label>
                    <input type="date" name="influenza_case_des_1_date" id="influenza_case_des_1_date"
                        class="form-control">
                </div>

                <div class="form-group col-md-1">
                    <label for="influenza_case_des_1_uf">UF</label>
                    <input type="text" name="influenza_case_des_1_uf" id="influenza_case_des_1_uf" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_des_1_city">Município/Localidade</label>
                    <input type="text" name="influenza_case_des_1_city" id="influenza_case_des_1_city"
                        class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="influenza_case_des_1_country">País</label>
                    <input type="text" name="influenza_case_des_1_country" id="influenza_case_des_1_country"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_des_1_transp">Meio de Transporte</label>
                    <input type="text" name="influenza_case_des_1_transp" id="influenza_case_des_1_transp"
                        class="form-control">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <input type="date" name="influenza_case_des_2_date" id="influenza_case_des_2_date"
                        class="form-control">
                </div>

                <div class="form-group col-md-1">
                    <input type="text" name="influenza_case_des_2_uf" id="influenza_case_des_2_uf" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <input type="text" name="influenza_case_des_2_city" id="influenza_case_des_2_city"
                        class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <input type="text" name="influenza_case_des_2_country" id="influenza_case_des_2_country"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <input type="text" name="influenza_case_des_2_transp" id="influenza_case_des_2_transp"
                        class="form-control">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <input type="date" name="influenza_case_des_3_date" id="influenza_case_des_3_date"
                        class="form-control">
                </div>

                <div class="form-group col-md-1">
                    <input type="text" name="influenza_case_des_3_uf" id="influenza_case_des_3_uf" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <input type="text" name="influenza_case_des_3_city" id="influenza_case_des_3_city"
                        class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <input type="text" name="influenza_case_des_3_country" id="influenza_case_des_3_country"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <input type="text" name="influenza_case_des_3_transp" id="influenza_case_des_3_transp"
                        class="form-control">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="influenza_case_bird">39 - Contato com Aves Doentes ou Mortas até 10 dias antes do início
                        dos sinais e sintomas?</label>
                    <select name="influenza_case_bird" id="influenza_case_bird" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-1">
                    <label for="influenza_case_bird_uf">40 - UF</label>
                    <br><br>
                    <input type="text" name="influenza_case_bird_uf" id="influenza_case_bird_uf" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_bird_city">41 - Nome do Município</label>
                    <br><br>
                    <input type="text" name="influenza_case_bird_city" id="influenza_case_bird_city"
                        class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="influenza_case_bird_country">42 - País</label>
                    <br><br>
                    <input type="text" name="influenza_case_bird_country" id="influenza_case_bird_country"
                        class="form-control">
                </div>
            </div>
        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados Clínicos</strong></legend>
            <br>
            <p>43 - Sinais e Sintomas</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_fever">Febre</label>
                    <select name="influenza_case_s_fever" id="influenza_case_s_fever" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_cough">Tosse</label>
                    <select name="influenza_case_s_cough" id="influenza_case_s_cough" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_chill">Calafrios</label>
                    <select name="influenza_case_s_chill" id="influenza_case_s_chill" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_dyspneia">Dispnéia</label>
                    <select name="influenza_case_s_dyspneia" id="influenza_case_s_dyspneia" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_throat">Dor de Garganta</label>
                    <select name="influenza_case_s_throat" id="influenza_case_s_throat" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_arthralgia">Artralgia</label>
                    <select name="influenza_case_s_arthralgia" id="influenza_case_s_arthralgia" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_myalgia">Mialgia</label>
                    <select name="influenza_case_s_myalgia" id="influenza_case_s_myalgia" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_conjun">Conjuntivite</label>
                    <select name="influenza_case_s_conjun" id="influenza_case_s_conjun" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_coryza">Coriza</label>
                    <select name="influenza_case_s_coryza" id="influenza_case_s_coryza" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_diarrhea">Diarréia</label>
                    <select name="influenza_case_s_diarrhea" id="influenza_case_s_diarrhea" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_other">Outros</label>
                    <select name="influenza_case_s_other" id="influenza_case_s_other" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="influenza_case_s_other_COMPLEMENT">Outros</label>
                    <input type="text" name="influenza_case_s_other_COMPLEMENT" id="influenza_case_s_other_COMPLEMENT"
                        class="form-control">
                </div>
            </div>
            <p>44 - Comorbidade</p>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_cardio">Cardiopatia crônica</label>
                    <select name="influenza_case_c_cardio" id="influenza_case_c_cardio" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_pneumo">Pneumopatia crônica</label>
                    <select name="influenza_case_c_pneumo" id="influenza_case_c_pneumo" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_renal">Renal Crônico</label>
                    <select name="influenza_case_c_renal" id="influenza_case_c_renal" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_hemo">Hemoglobinopatia</label>
                    <select name="influenza_case_c_hemo" id="influenza_case_c_hemo" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_imuno">Imunodeprimido</label>
                    <select name="influenza_case_c_imuno" id="influenza_case_c_imuno" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_smoke">Tabagismo</label>
                    <select name="influenza_case_c_smoke" id="influenza_case_c_smoke" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_metab">Doença Metabólica Crônica</label>
                    <select name="influenza_case_c_metab" id="influenza_case_c_metab" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_other">Outros</label>
                    <select name="influenza_case_c_other" id="influenza_case_c_other" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="influenza_case_c_other_COMPLEMENT">Outros</label>
                    <input type="text" name="influenza_case_c_other_COMPLEMENT" id="influenza_case_c_other_COMPLEMENT"
                        class="form-control">
                </div>
            </div>

    </div>
    </fieldset>
    </div>
    <hr>
    </div>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Atendimento</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="influenza_case_h_hosp">45 - Ocorreu Hospitalização</label>
                    <select name="influenza_case_h_hosp" id="influenza_case_h_hosp" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_h_date">46 - Data da Internação</label>
                    <input type="date" name="influenza_case_h_date" id="influenza_case_h_date" class="form-control">
                </div>

                <div class="form-group col-md-1">
                    <label for="influenza_case_h_uf">47 - UF</label>
                    <input type="text" name="influenza_case_h_uf" id="influenza_case_h_uf" class="form-control">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_h_city">48 - Município do Hospital</label>
                    <input type="text" name="influenza_case_h_city" id="influenza_case_h_city" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_h_ibge_code">Código (IBGE)</label>
                    <input type="text" name="influenza_case_h_ibge_code" id="influenza_case_h_ibge_code"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_h_name">49 - Nome do Hospital</label>
                    <input type="text" name="influenza_case_h_name" id="influenza_case_h_name" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_h_code">Código</label>
                    <input type="text" name="influenza_case_h_code" id="influenza_case_h_code" class="form-control">
                </div>

            </div>

        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados Laboratoriais</strong></legend>
            <br>
            <strong>PCR</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_pcr_date">50 - Data da Coleta</label>
                    <input type="date" name="influenza_case_pcr_date" id="influenza_case_pcr_date" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_pcr_sample">51 - Tipo de Amostra</label>
                    <select name="influenza_case_pcr_sample" id="influenza_case_pcr_sample" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Secreção de Nasofaringe</option>
                        <option>2 - Lavado Bronco-alveolar</option>
                        <option>3 - Fezes</option>
                        <option>4 - Tecido pós-mortem</option>
                        <option>5 - Soro</option>
                        <option>6 - Outro</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_pcr_sample_COMPLEMENT">Outro</label>
                    <input type="text" name="influenza_case_pcr_sample_COMPLEMENT"
                        id="influenza_case_pcr_sample_COMPLEMENT" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_pcr_result">52 - Resultado</label>
                    <select name="influenza_case_pcr_result" id="influenza_case_pcr_result" class="form-control">
                        <option selected>4 - Não realizado</option>
                        <option>1 - Positivo</option>
                        <option>2 - Negativo</option>
                        <option>3 - Inconclusivo</option>
                    </select>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="influenza_case_pcr_etio">53- Diagnóstico Etiológico</label>
                    <select name="influenza_case_pcr_etio" id="influenza_case_pcr_etio" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - Influenza por novo subtipo viral (pandêmico)</option>
                        <option>2 - Influenza A Sazonal</option>
                        <option>3 - Influenza B Sazonal</option>
                        <option>4 - Influenza Aviária</option>
                        <option>5 - Outro Agente Infeccioso</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_pcr_type">54 - Tipo</label>
                    <input type="text" name="influenza_case_pcr_type" id="influenza_case_pcr_type" class="form-control"
                        placeholder="H_N_">
                </div>
            </div>

            <strong>CULTURA</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_cult_date">55 - Data da Coleta</label>
                    <input type="date" name="influenza_case_cult_date" id="influenza_case_cult_date"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_cult_sample">56 - Tipo de Amostra</label>
                    <select name="influenza_case_cult_sample" id="influenza_case_cult_sample" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Secreção de Nasofaringe</option>
                        <option>2 - Lavado Bronco-alveolar</option>
                        <option>3 - Fezes</option>
                        <option>4 - Tecido pós-mortem</option>
                        <option>5 - Soro</option>
                        <option>6 - Outro</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_cult_sample_COMPLEMENT">Outro</label>
                    <input type="text" name="influenza_case_cult_sample_COMPLEMENT"
                        id="influenza_case_cult_sample_COMPLEMENT" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_cult_result">57 - Resultado</label>
                    <select name="influenza_case_cult_result" id="influenza_case_cult_result" class="form-control">
                        <option selected>4 - Não realizado</option>
                        <option>1 - Positivo</option>
                        <option>2 - Negativo</option>
                        <option>3 - Inconclusivo</option>
                    </select>
                </div>
            </div>

            <strong>INIBIÇÃO DA HEMAGLUTINAÇÃO</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_haem_date">58 - Data da Coleta</label>
                    <input type="date" name="influenza_case_haem_date" id="influenza_case_haem_date"
                        class="form-control">
                </div>


                <div class="form-group col-md-9">
                    <label for="influenza_case_haem_result">59 - Resultado</label>
                    <select name="influenza_case_haem_result" id="influenza_case_haem_result" class="form-control">
                        <option selected>4 - Não realizado</option>
                        <option>1 - Positivo</option>
                        <option>2 - Negativo</option>
                        <option>3 - Inconclusivo</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="influenza_case_haem_etio">60- Diagnóstico Etiológico</label>
                    <select name="influenza_case_haem_etio" id="influenza_case_haem_etio" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - Influenza por novo subtipo viral (pandêmico)</option>
                        <option>2 - Influenza A Sazonal</option>
                        <option>3 - Influenza B Sazonal</option>
                        <option>4 - Influenza Aviária</option>
                        <option>5 - Outro Agente Infeccioso</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_haem_type">61 - Tipo</label>
                    <input type="text" name="influenza_case_haem_type" id="influenza_case_haem_type"
                        class="form-control" placeholder="H_N_">
                </div>
            </div>

            <strong>RAIO X TÓRAX</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_xray_date">62 - Data da Realização</label>
                    <input type="date" name="influenza_case_xray_date" id="influenza_case_xray_date"
                        class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="influenza_case_xray_result">63 - Se sim, resultado</label>
                    <select name="influenza_case_xray_result" id="influenza_case_xray_result" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - Normal</option>
                        <option>2 - Infiltrado Intersticial</option>
                        <option>3 - Consolidação</option>
                        <option>4 - Misto</option>
                        <option>5 - Outros</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_xray_result_COMPLEMENT">Outros</label>
                    <input type="text" name="influenza_case_xray_result_COMPLEMENT"
                        id="influenza_case_xray_result_COMPLEMENT" class="form-control">
                </div>

            </div>
        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Conclusão</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="influenza_case_res_final">64 - Classificação Final</label>
                    <select name="influenza_case_res_final" id="influenza_case_res_final" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - Influenza por Novo Subtipo Viral</option>
                        <option>2 - Outro agente infeccioso</option>
                        <option>3 - Descartado</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="influenza_case_res_other">Outro agente infeccioso</label>
                    <input type="text" name="influenza_case_res_other" id="influenza_case_res_other"
                        class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label for="influenza_case_res_conf">65 - Critério de Confirmação</label>
                    <select name="influenza_case_res_conf" id="influenza_case_res_conf" class="form-control">
                        <option selected>Ignorado</option>
                        <option>1 - Laboratorial </option>
                        <option>2 - Clínico-Epidemiológico</option>
                    </select>
                </div>

            </div>
            <strong>LOCAL PROVÁVEL DE FONTE DE INFECÇÃO</strong>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="influenza_case_res_local">66 - O caso é autóctone do município de residência?</label>
                    <select name="influenza_case_res_local" id="influenza_case_res_local" class="form-control">
                        <option selected>3 - Indeterminado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-1">
                    <label for="influenza_case_res_uf">67 - UF</label>
                    <input type="text" name="influenza_case_res_uf" id="influenza_case_res_uf" class="form-control">
                </div>

                <div class="form-group col-md-5">
                    <label for="influenza_case_res_country">68 - País</label>
                    <input type="text" name="influenza_case_res_country" id="influenza_case_res_country"
                        class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="influenza_case_res_city">69 - Município</label>
                    <input type="text" name="influenza_case_res_city" id="influenza_case_res_city" class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="influenza_case_res_ibge_code">Código (IBGE)</label>
                    <input type="text" name="influenza_case_res_ibge_code" id="influenza_case_res_ibge_code"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_res_district">70 - Distrito</label>
                    <input type="text" name="influenza_case_res_district" id="influenza_case_res_district"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_res_neigh">71 - Bairro</label>
                    <input type="text" name="influenza_case_res_neigh" id="influenza_case_res_neigh"
                        class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="influenza_case_res_work">72 - Doença Relacionada ao Trabalho</label>
                    <select name="influenza_case_res_work" id="influenza_case_res_work" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_res_evo">73 - Evolução do Caso</label>
                    <select name="influenza_case_res_evo" id="influenza_case_res_evo" class="form-control">
                        <option selected>9- Ignorado</option>
                        <option>1 - Cura</option>
                        <option>2- Óbito por Influenza</option>
                        <option>3- Óbito por outras causas</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_res_date_d">74 - Data do Óbito</label>
                    <input type="date" name="influenza_case_res_date_d" id="influenza_case_res_date_d"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="influenza_case_res_date_c">75 - Data do Encerramento</label>
                    <input type="date" name="influenza_case_res_date_c" id="influenza_case_res_date_c"
                        class="form-control">
                </div>
            </div>

        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <br>
            <div class="form-group">
                <label for="influenza_case_obs"><strong>Observações Adicionais</strong></label>
                <input type="text" name="influenza_case_obs" id="influenza_case_obs" class="form-control">
            </div>

        </fieldset>
    </div>
    

    @endsection