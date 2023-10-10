@extends('layouts.layoutforms')
@section('title','ANTI-RÁBICO')
@section('typeNotification','ANTI-RÁBICO HUMANO')
@section('codCidNotification','W - 64')
@section('content')

<div class="container">
    <fieldset>
        <legend style="text-align: center;"><strong>Antecedentes Epidemiológicos</strong></legend>
        <br>
        <form class="form-inline">
            <div class="form-group">
                <label for="ocupacao">31 - Ocupação</label>
                <input type="text" name="ocupacao" id="ocupacao" class="form-control">
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tipo_exposicao">32 - Tipo de Exposição ao Vírus Rábico</label>
                    <select name="tipo_exposicao" id="tipo_exposicao" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-check form-check-inline ml-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Contato Indireto">
                    <label class="form-check-label" for="inlineCheckbox1">Contato Indireto</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Arranhadura">
                    <label class="form-check-label" for="inlineCheckbox2">Arranhadura</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Lambedura">
                    <label class="form-check-label" for="inlineCheckbox3">Lambedura</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Mordedura">
                    <label class="form-check-label" for="inlineCheckbox4">Mordedura</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="text" id="inlineCheckbox5" placeholder="Outro">
                    <label class="form-check-label" for="inlineCheckbox5"></label>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="localizacao">33 - Localização</label>
                    <select name="localizacao" id="localizacao" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>3 - Desconhecido</option>
                    </select>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Mucosa">
                    <label class="form-check-label" for="inlineCheckbox6">Mucosa</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Cabeça/Pescoço">
                    <label class="form-check-label" for="inlineCheckbox7">Cabeça/Pescoço</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Mãos/Pés">
                    <label class="form-check-label" for="inlineCheckbox8">Mãos/Pés</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Tronco">
                    <label class="form-check-label" for="inlineCheckbox9">Tronco</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="Membros Superiores">
                    <label class="form-check-label" for="inlineCheckbox10">Membros Sup.</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="Membros Inferiores">
                    <label class="form-check-label" for="inlineCheckbox11">Membros Inf.</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="text" id="inlineCheckbox12" placeholder="Outro">
                    <label class="form-check-label" for="inlineCheckbox12"></label>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="ferimento">34 - Ferimento</label>
                    <select name="ferimento" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Único</option>
                        <option>2 - Múltiplo</option>
                        <option>3 - Sem ferimento</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="tipo_ferimento">35 - Tipo de Ferimento</label>
                    <select name="tipo_ferimento" id="tipo_ferimento" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-check form-check-inline ml-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="Tronco">
                    <label class="form-check-label" for="inlineCheckbox13">Profundo</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="Membros Superiores">
                    <label class="form-check-label" for="inlineCheckbox14">Superficial</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="Membros Superiores">
                    <label class="form-check-label" for="inlineCheckbox15">Dilacerante</label>
                </div>

            </div>


            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="data_exposicao">36 - Data da Exposição</label>
                    <input type="date" name="data_exposicao" id="data_exposicao" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="antecedentes">37 - Tem Antecedentes de Tratamento Anti-Rábico?</label>
                    <select name="antecedentes" id="antecedentes" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>9 - Ignorado</option>
                    </select>
                </div>

                <div class="form-check form-check-inline col-md-1 ml-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="Pré-Exposição">
                    <label class="form-check-label" for="inlineCheckbox16">Pré-Exposição</label>
                </div>

                <div class="form-check form-check-inline col-md-1 ml-4">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="Membros Superiores">
                    <label class="form-check-label" for="inlineCheckbox17">Pós-Exposição</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="se_houve">38 - Se Houve, quando foi concluído?</label>
                    <select name="se_houve" id="se_houve" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Até 90 dias</option>
                        <option>2 - Após 90 dias</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="n_doses">39 - Nº de Doses Aplicadas</label>
                    <input name="n_dose" id="n_dose" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="animal_agressor">40 - Espécie do Animal Agressor</label>
                    <select name="animal_agressor" id="animal_agressor" class="form-control">
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
                <div class="form-check form-check-inline ml-5" id="box_ae">
                    <input class="form-check-input" type="text" id="inlineCheckbox18" placeholder="Herbívoro doméstico">
                    <label class="form-check-label" for="inlineCheckbox18"></label>
                </div>
                <div class="form-check form-check-inline ml-3" id="box_ae">
                    <input class="form-check-input" type="text" id="inlineCheckbox19" placeholder="Outra">
                    <label class="form-check-label" for="inlineCheckbox19"></label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="condicao_animal">41 - Condição do Animal para Fins de Conduta do Tratamento</label>
                    <select name="condicao_animal" id="condicao_animal" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sadio</option>
                        <option>2 - Suspeito</option>
                        <option>3 - Raivoso</option>
                        <option>4 - Morto/Desaparecido</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="anima_observacao">42 - Animal Passível de Observação? (Somente para Cão ou Gato)</label>
                    <select name="anima_observacao" id="anima_observacao" class="form-control">
                        <option selected>Escolher...</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

        </form>
    </fieldset>
</div>
<hr>
<div class="container">
    <fieldset>
        <legend style="text-align: center;"><strong>Tratamento Atual</strong></legend>
        <br>
        <div class="form-group">
            <label for="tratamento">43 - Tratamento Indicado</label>
            <select name="tratamento" id="tratamento" class="form-control">
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
                <label for="lab">44 - Laboratório Produtor da Vacina</label>
                <select name="lab" id="lab" class="form-control">
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
                <label for="n_lote">45 - Número do Lote</label>
                <input type="text" name="n_lote" id="n_lote" class="form-control">
            </div>

            <div class="form-group col-md-3">
                <label for="vencimento">46 - Data do Vencimento</label>
                <input type="date" name="vencimento" id="vencimento" class="form-control">
            </div>

        </div>
        <strong>47 - Datas das Aplicações da Vacina (dia e mês)</strong>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="1_dose">Data da 1a dose</label>
                <input type="date" name="1_dose" id="1_dose" class="form-control">
            </div>

            <div class="form-group col-md-3">
                <label for="2_dose">Data da 2a dose</label>
                <input type="date" name="2_dose" id="2_dose" class="form-control">
            </div>

            <div class="form-group col-md-2">
                <label for="3_dose">Data da 3a dose</label>
                <input type="date" name="3_dose" id="3_dose" class="form-control">
            </div>

            <div class="form-group col-md-2">
                <label for="4_dose">Data da 4a dose</label>
                <input type="date" name="4_dose" id="4_dose" class="form-control">
            </div>

            <div class="form-group col-md-2">
                <label for="5_dose">Data da 5a dose</label>
                <input type="date" name="5_dose" id="5_dose" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <label for="">48 - Condição Final do Animal (após período de observação)</label>
            <select name="" id="" class="form-control">
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
                <label for="">49 - Houve Interrupção do Tratamento</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                </select>
            </div>


            <div class="form-group col-md-8">
                <label for="">50 - Qual o Motivo da Interrupção</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Indicação da Unidade de Saúde</option>
                    <option>2 - Abandono</option>
                    <option>3 - Transferência</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="">51 - Se houve Abandono do Tratamento, a Unidade de Saúde Procurou o Paciente</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                </select>
            </div>


            <div class="form-group col-md-4">
                <label for="">52 - Evento Adverso à Vacina</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                    <option>9 - Ignorado</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="">53 - Indicação do Soro Anti-Rábico</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="">54 - Peso do Paciente (Kg)</label>
                <input type="text" name="" id="" class="form-control">
            </div>

            <div class="form-group col-md-3">
                <label for="">55 -Quantidade de Soro Aplicada (ml)</label>
                <input type="text" name="" id="" class="form-control">
            </div>

            <div class="form-group col-md-3">
                <label for="">Soro</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Heterólogo</option>
                    <option>2 - Homólogo</option>
                </select>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="">56 - Infriltração de Soro no(s) Local(is) do(s) Ferimento(s)</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                </select>
            </div>

            <div class="form-group col-md-1">
                <label for="">Se sim</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>Total</option>
                    <option>Parcial</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="">57 - Laborátorio Produtor do Soro Anti-Rábico</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Instituto Butantan</option>
                    <option>2 - Instituto Vital Brasil</option>
                    <option>3 - Aventis Pasteur</option>
                    <option>4 - Outro (Especificar)</option>
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="">Outro</label>
                <input type="text" name="" id="" class="form-control">
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="">58 - Número da Partida</label>
                <input type="text" name="" id="" class="form-control">
            </div>

            <div class="form-group col-md-4">
                <label for="">59 - Evento Adverso ao Soro Anti-Rábico</label>
                <select name="" id="" class="form-control">
                    <option selected>Escolher...</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                    <option>9 - Ignorado</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="">60 - Data do Encerramento do Caso</label>
                <input type="date" name="" id="" class="form-control">
            </div>

        </div>

    </fieldset>
</div>
<hr>

<div class="container">
    <fieldset>
        <br>
        <div class="form-group">
            <label for="Obs_add"><strong>Observações</strong></label>
            <input type="text" name="Obs_add" id="Obs_add" class="form-control">
        </div>

    </fieldset>
</div>
<hr>
<div class="container">
    <fieldset>
        <legend style="text-align: center;"><strong>Investigador</strong></legend>
        <br>
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="Municipio_Inv">Município/Unidade de Saúde</label>
                <input type="text" name="Municipio_Inv" id="Municipio_Inv" class="form-control""></div>

                    <div class=" form-group col-md-3">
                <label for="Unid_Inv">Cód. da Unid. de Saúde</label>
                <input type="text" name="Unid_Inv" id="Unid_Inv" class="form-control">
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
</div>
<hr>
<div style="display: flex; justify-content: center;">
    <input type="submit" value="Enviar" class="btn btn-primary">
</div>
<br>
@endsection