@extends('layouts.layoutforms')
@section('title','ANTI-RÁBICO')
@section('typeNotification','ANTI-RÁBICO HUMANO')
@section('codCidNotification','W - 64')
<form method="POST" action="{{ route('vigep.store.rabiescases') }}">
    @csrf
    @section('content')

    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Antecedentes Epidemiológicos</strong></legend>
            <br>
            <form class="form-inline">
                <div class="form-group">
                    <label for="rabies_case_occupation">31 - Ocupação</label>
                    <input type="text" name="rabies_case_occupation" id="rabies_case_occupation" class="form-control">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="rabies_case_exposition_type">32 - Tipo de Exposição ao Vírus Rábico</label>
                        <select name="rabies_case_exposition_type" id="rabies_case_exposition_type" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Contato Indireto</option>
                            <option>2 - Arranhadura</option>
                            <option>3 - Lambedura</option>
                            <option>4 - Mordedura</option>
                            <option>5 - Não</option>
                            <option>6 - Outro...</option>
                            <option>7 - Ignorado</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="localizacao">33 - Localização</label>
                        <select name="localizacao" id="localizacao" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Mucosa</option>
                            <option>2 - Cabeça/Pescoço</option>
                            <option>3 - Mãos/Pés</option>
                            <option>4 - Tronco</option>
                            <option>5 - Membros Sup.</option>
                            <option>6 - Membros Inf. </option>
                            <option>7 - Outro... </option>
                            <option>8 - Não</option>
                            <option>9 - Desconhecido</option>
                        </select>
                    </div>

                </div>


                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="rabies_case_injury">34 - Ferimento</label>
                        <select id='rabies_case_injury' name="rabies_case_injury" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Único</option>
                            <option>2 - Múltiplo</option>
                            <option>3 - Sem ferimento</option>
                            <option>9 - Ignorado</option>
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="rabies_case_injury_type">35 - Tipo de Ferimento</label>
                        <select name="rabies_case_injury_type" id="rabies_case_injury_type" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Profundo</option>
                            <option>1 - Superficial</opion>
                            <option>1 - Dilacerante</option>
                            <option>2 - Não</option>
                            <option>9 - Ignorado</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="rabies_case_exposition_date">36 - Data da Exposição</label>
                        <input type="date" name="rabies_case_exposition_date" id="rabies_case_exposition_date" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="rabies_case_history">37 - Tem Antecedentes de Tratamento Anti-Rábico?</label>
                        <select name="rabies_case_history" id="rabies_case_history" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Pré-Exposição</option>
                            <option>2 - Pós-Exposição</option>
                            <option>3 - Não</option>
                            <option>4 - Ignorado</option>
                        </select>
                    </div>


                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="rabies_case_history_when">38 - Se Houve, quando foi concluído?</label>
                        <select name="rabies_case_history_when" id="rabies_case_history_when" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Até 90 dias</option>
                            <option>2 - Após 90 dias</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rabies_case_dose_num">39 - Nº de Doses Aplicadas</label>
                        <input name="rabies_case_dose_num" id="rabies_case_dose_num" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="rabies_case_animal_species">40 - Espécie do Animal Agressor</label>
                        <select name="rabies_case_animal_species" id="rabies_case_animal_species" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Canina</option>
                            <option>2 - Felina</option>
                            <option>3 - Quiróptera (Morcego)</option>
                            <option>4 - Primata (Macaco)</option>
                            <option>5 - Raposa</option>
                            <option>6 - Herbívoro doméstico (especificar)</option>
                            <option>7 - Outra</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="rabies_case_animal_condition">41 - Condição do Animal para Fins de Conduta do Tratamento</label>
                        <select name="rabies_case_animal_condition" id="rabies_case_animal_condition" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Sadio</option>
                            <option>2 - Suspeito</option>
                            <option>3 - Raivoso</option>
                            <option>4 - Morto/Desaparecido</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="rabies_case_animal_observation">42 - Animal Passível de Observação? (Somente para Cão ou Gato)</label>
                        <select name="rabies_case_animal_observation" id="rabies_case_animal_observation" class="form-control">
                            <option selected>Escolher...</option>
                            <option>1 - Sim</option>
                            <option>2 - Não</option>
                        </select>
                    </div>
                </div>


        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Tratamento Atual</strong></legend>
            <br>
            <div class="form-group">
                <label for="rabies_case_treatment">43 - Tratamento Indicado</label>
                <select name="rabies_case_treatment" id="rabies_case_treatment" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Pré Exposição</option>
                    <option>2 - Dispensa de Tratamento</option>
                    <option>3 - Observação do animal (se cão ou gato)</option>
                    <option>4 - Observação + Vacina</option>
                    <option>5 - Vacina</option>
                    <option>6 - Soro + Vacina</option>
                    <option>7 - Esquema de Reexposição</option>
                </select>
            </div>
            <strong>VACINA</strong>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="rabies_case_vaccine_lab">44 - Laboratório Produtor da Vacina</label>
                    <select name="rabies_case_vaccine_lab" id="rabies_case_vaccine_lab" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Instituto Butantan</option>
                        <option>2 - Instituto Vital Brasil</option>
                        <option>3 - Aventis Pasteur</option>
                        <option>4 - Outro (Especificar)</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="outro">Outro</label>
                    <input type="text" name="outro" id="outro" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="rabies_case_vaccine_lot_num">45 - Número do Lote</label>
                    <input type="text" name="rabies_case_vaccine_lot_num" id="rabies_case_vaccine_lot_num" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="rabies_case_vaccine_expiration_date">46 - Data do Vencimento</label>
                    <input type="date" name="rabies_case_vaccine_expiration_date" id="rabies_case_vaccine_expiration_date" class="form-control">
                </div>

            </div>
            <strong>47 - Datas das Aplicações da Vacina (dia e mês)</strong>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="rabies_case_vaccine_date_1">Data da 1a dose</label>
                    <input type="date" name="rabies_case_vaccine_date_1" id="rabies_case_vaccine_date_1" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="rabies_case_vaccine_date_2">Data da 2a dose</label>
                    <input type="date" name="rabies_case_vaccine_date_2" id="rabies_case_vaccine_date_2" class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="rabies_case_vaccine_date_3">Data da 3a dose</label>
                    <input type="date" name="rabies_case_vaccine_date_3" id="rabies_case_vaccine_date_3" class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="rabies_case_vaccine_date_4">Data da 4a dose</label>
                    <input type="date" name="rabies_case_vaccine_date_4" id="rabies_case_vaccine_date_4" class="form-control">
                </div>

                <div class="form-group col-md-2">
                    <label for="rabies_case_vaccine_date_5">Data da 5a dose</label>
                    <input type="date" name="rabies_case_vaccine_date_4" id="rabies_case_vaccine_date_5" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="rabies_case_animal_final_condition">48 - Condição Final do Animal (após período de observação)</label>
                <select name="rabies_case_animal_final_condition" id="rabies_case_animal_final_condition" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Negativo para Raiva (Clínica)</option>
                    <option>2 - Negativo para Raiva (Laboratório)</option>
                    <option>3 - Positivo para Raiva (Clínica)</option>
                    <option>4 - Positivo para Raiva (Laboratório)</option>
                    <option>5 - Morto/ Sacrificado/ Sem Diagnóstico</option>
                    <option>9 - Ignorado</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="rabies_case_treatment_interruption">49 - Houve Interrupção do Tratamento</label>
                    <select name="rabies_case_treatment_interruption" id="rabies_case_treatment_interruption" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>


                <div class="form-group col-md-8">
                    <label for="rabies_case_treatment_interruption_reason">50 - Qual o Motivo da Interrupção</label>
                    <select name="rabies_case_treatment_interruption_reason" id="rabies_case_treatment_interruption_reason" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Indicação da Unidade de Saúde</option>
                        <option>2 - Abandono</option>
                        <option>3 - Transferência</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="rabies_case_treatment_interruption_unit">51 - Se houve Abandono do Tratamento, a Unidade de Saúde Procurou o Paciente</label>
                    <select name="rabies_case_treatment_interruption_unit" id="rabies_case_treatment_interruption_unit" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>


                <div class="form-group col-md-4">
                    <label for="rabies_case_vaccine_adverse_event">52 - Evento Adverso à Vacina</label>
                    <select name="rabies_case_vaccine_adverse_event" id="rabies_case_vaccine_adverse_event" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="rabies_case_serum">53 - Indicação do Soro Anti-Rábico</label>
                    <select name="rabies_case_serum" id="rabies_case_serum" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="rabies_case_patient_weight">54 - Peso do Paciente (Kg)</label>
                    <input type="text" name="rabies_case_patient_weight" id="rabies_case_patient_weight" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="rabies_case_serum_quantity">55 -Quantidade de Soro Aplicada (ml)</label>
                    <input type="text" name="rabies_case_serum_quantity" id="rabies_case_serum_quantity" class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="rabies_case_serum_application">Soro</label>
                    <select name="rabies_case_serum_application" id="rabies_case_serum_application" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Heterólogo</option>
                        <option>2 - Homólogo</option>
                    </select>
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="rabies_case_serum_on_injury">56 - Infriltração de Soro no(s) Local(is) do(s) Ferimento(s)</label>
                    <select name="rabies_case_serum_on_injury" id="rabies_case_serum_on_injury" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-1">
                    <label for="rabies_case_serum_on_injury">Se sim</label>
                    <select name="rabies_case_serum_on_injury" id="rabies_case_serum_on_injury" class="form-control">
                        <option selected>Escolher...</option>
                        <option>Total</option>
                        <option>Parcial</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="rabies_case_serum_lab">57 - Laborátorio Produtor do Soro Anti-Rábico</label>
                    <select name="rabies_case_serum_lab" id="rabies_case_serum_lab" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Instituto Butantan</option>
                        <option>2 - Instituto Vital Brasil</option>
                        <option>3 - Aventis Pasteur</option>
                        <option>4 - Outro (Especificar)</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="rabies_case_serum_num">58 - Número da Partida</label>
                    <input type="text" name="rabies_case_serum_num" id="rabies_case_serum_num" class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label for="rabies_case_serum_adverse_event">59 - Evento Adverso ao Soro Anti-Rábico</label>
                    <select name="rabies_case_serum_adverse_event" id="rabies_case_serum_adverse_event" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="rabies_case_closing_date">60 - Data do Encerramento do Caso</label>
                    <input type="date" name="rabies_case_closing_date" id="rabies_case_closing_date" class="form-control">
                </div>

            </div>

        </fieldset>
    </div>
    <hr>

    <div class="container">
        <fieldset>
            <br>
            <div class="form-group">
                <label for="rabies_case_obs"><strong>Observações</strong></label>
                <input type="text" name="rabies_case_obs" id="rabies_case_obs" class="form-control">
            </div>

        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Investigador</strong></legend>
            <br>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="health_worker_registration">Matrícula</label>
            <input type="text" name="health_worker_registration" id="health_worker_registration" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="health_worker_name">Nome</label>
            <input type="text" name="health_worker_name" id="health_worker_name" class="form-control">
        </div>
    </div>

    </fieldset>
    </div>
    <hr>
    <div style="display: flex; justify-content: center;">
        <input type="submit" value="Enviar" class="btn btn-primary">
</form>
</div>
<br>
@endsection