@extends('layouts.layoutForms')
@section('title','VIOLÊNCIA INTERPESSOAL/AUTOPROVOCADA')
@section('typeNotification','Violência Interpessoal/Autoprovocada')
@section('codCidNotification','Y09')
<form method="POST" action="{{ route('vigep.violenceCases.storeOrUpdate') }}">
    @csrf
    @section('content')
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados da Pessoa Atendida</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_social_name">33 - Nome Social</label>
                    <input type="text" name="violence_case_social_name" id="violence_case_social_name"
                        class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_occupation">34 - Ocupação</label>
                    <input type="text" name="violence_case_occupation" id="violence_case_occupation"
                        class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="violence_case_marital_status">35 - Situação conjugal / Estado civil</label>
                <select name="violence_case_marital_status" id="violence_case_marital_status" class="form-control">
                    <option selected>9 - Ignorado</option>
                    <option>1 - Solteiro</option>
                    <option>2 - Casado/união consensual</option>
                    <option>3 - Viúvo</option>
                    <option>4 - Separado</option>
                    <option>8 - Não se aplica</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_sex">36 - Orientação Sexual</label>
                    <select name="violence_case_sex" id="violence_case_sex" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Heterossexual</option>
                        <option>2 - Homossexual (gay/lésbica)</option>
                        <option>3 - Bissexual</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_gender">37 - Identidade de gênero</label>
                    <select name="violence_case_gender" id="violence_case_gender" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Travesti</option>
                        <option>2 - Mulher Transexual</option>
                        <option>3 - Homem Transexual</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="violence_case_disability">38 - Possui algum tipo de deficiência/transtorno?</label>
                <select name="violence_case_disability" id="violence_case_disability" class="form-control">
                    <option selected>9 - Ignorado</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                </select>
            </div>

            <p>39 - Se sim, qual tipo de deficiência /transtorno?</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_disab_physical">Deficiência Física</label>
                    <select name="violence_case_disab_physical" id="violence_case_disab_physical" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_disab_intellectual">Deficiência Intelectual</label>
                    <select name="violence_case_disab_intellectual" id="violence_case_disab_intellectual"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_disab_visual">Deficiência Visual</label>
                    <select name="violence_case_disab_visual" id="violence_case_disab_visual" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_disab_hearing">Deficiência Auditiva</label>
                    <select name="violence_case_disab_hearing" id="violence_case_disab_hearing" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_disab_mental">Transtorno mental</label>
                    <select name="violence_case_disab_mental" id="violence_case_disab_mental" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_disab_behavior">Transtorno de comportamento</label>
                    <select name="violence_case_disab_behavior" id="violence_case_disab_behavior" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_disab_other">Outras</label>
                    <select name="violence_case_disab_other" id="violence_case_disab_other" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_disab_other_COMPLEMENT">Outras</label>
                    <input type="text" name="violence_case_disab_other_COMPLEMENT"
                        id="violence_case_disab_other_COMPLEMENT" class="form-control">
                </div>
            </div>

    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados da Ocorrência</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-1">
                    <label for="violence_case_uf">40 - UF</label>
                    <input type="text" name="violence_case_uf" id="violence_case_uf" class="form-control">
                </div>
                <div class="form-group col-md-5">
                    <label for="violence_case_city">41 - Município de Ocorrência</label>
                    <input type="text" name="violence_case_city" id="violence_case_city" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_ibge_code">Código (IBGE)</label>
                    <input type="text" name="violence_case_ibge_code" id="violence_case_ibge_code" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_district">42 - Distrito</label>
                    <input type="text" name="violence_case_district" id="violence_case_district" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_neighborhood">43 - Bairro</label>
                    <input type="text" name="violence_case_neighborhood" id="violence_case_neighborhood"
                        class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="violence_case_patio">44 - Logradouro</label>
                    <input type="text" name="violence_case_patio" id="violence_case_patio" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_code">Código</label>
                    <input type="text" name="violence_case_code" id="violence_case_code" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="violence_case_number">45 - Número</label>
                    <input type="text" name="violence_case_number" id="violence_case_number" class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="violence_case_complement">46 - Complemento</label>
                    <input type="text" name="violence_case_complement" id="violence_case_complement"
                        class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_geocode3">47 - Geo campo 3</label>
                    <input type="text" name="violence_case_geocode3" id="violence_case_geocode3" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_geocode4">48 - Geo campo 4</label>
                    <input type="text" name="violence_case_geocode4" id="violence_case_geocode4" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="violence_case_reference">49 - Ponto de Referência</label>
                    <input type="text" name="violence_case_reference" id="violence_case_reference" class="form-control">
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_zone">50 - Zona</label>
                    <select name="violence_case_zone" id="violence_case_zone" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Urbana</option>
                        <option>2 - Rural</option>
                        <option>3 - Periurbana</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="violence_case_hour">51 - Hora da ocorrência (00:00 - 23:59 horas)</label>
                    <input type="text" name="violence_case_hour" id="violence_case_hour" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_local">52 - Local de Ocorrência</label>
                    <select name="violence_case_local" id="violence_case_local" class="form-control">
                        <option selected>99 - Ignorado</option>
                        <option>01 - Residência</option>
                        <option>02 - Habitação coletiva</option>
                        <option>03 - Escola</option>
                        <option>04 - Local de prática esportiva</option>
                        <option>05 - Bar ou similar</option>
                        <option>06 - Via pública</option>
                        <option>07 - Comércio/serviços</option>
                        <option>08 - Indústrias/construção</option>
                        <option>09 - Outro</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_local_other">Outro</label>
                    <input type="text" name="violence_case_local_other" id="violence_case_local_other"
                        class="form-control">
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_occur">53 - Ocorreu outras vezes?</label>
                    <select name="violence_case_occur" id="violence_case_occur" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_self_provoked">54 - A lesão foi autoprovocada?</label>
                    <select name="violence_case_self_provoked" id="violence_case_self_provoked" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

            </div>

    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Violência</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="violence_case_motivation">55 - Essa violência foi motivada por</label>
                    <select name="violence_case_motivation" id="violence_case_motivation" class="form-control">
                        <option selected>99 - Ignorado</option>
                        <option>01 - Sexismo</option>
                        <option>02 - Homofobia/Lesbofobia/Bifobia/Transfobia</option>
                        <option>03 - Racismo</option>
                        <option>04 - Intolerância religiosa</option>
                        <option>05 - Xenofobia</option>
                        <option>06 - Conflito geracional</option>
                        <option>07 - Situação de rua</option>
                        <option>08 - Deficiência</option>
                        <option>09 - Outros</option>
                        <option>88 - Não se aplica</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="violence_case_motivation_COMPLEMENT">Outros</label>
                    <input type="text" name="violence_case_motivation_COMPLEMENT"
                        id="violence_case_motivation_COMPLEMENT" class="form-control">
                </div>
            </div>
            <p>56 - Tipo de violência</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_type_physical">Física</label>
                    <select name="violence_case_type_physical" id="violence_case_type_physical" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_type_mental">Psicológica/Moral</label>
                    <select name="violence_case_type_mental" id="violence_case_type_mental" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_type_torture">Tortura</label>
                    <select name="violence_case_type_torture" id="violence_case_type_torture" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_type_sex">Sexual</label>
                    <select name="violence_case_type_sex" id="violence_case_type_sex" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_type_traffic">Tráfico de seres humanos</label>
                    <select name="violence_case_type_traffic" id="violence_case_type_traffic" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_type_financial">Financeira/Econômica</label>
                    <select name="violence_case_type_financial" id="violence_case_type_financial" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_type_neglect">Negligência/Abandono</label>
                    <select name="violence_case_type_neglect" id="violence_case_type_neglect" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_type_child">Trabalho infantil</label>
                    <select name="violence_case_type_child" id="violence_case_type_child" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="violence_case_type_legal">Intervenção legal</label>
                    <select name="violence_case_type_legal" id="violence_case_type_legal" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_type_other">Outros</label>
                    <select name="violence_case_type_other" id="violence_case_type_other" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_type_other_COMPLEMENT">Outros</label>
                    <input type="text" name="violence_case_type_other_COMPLEMENT"
                        id="violence_case_type_other_COMPLEMENT" class="form-control">
                </div>
            </div>

            <p>57 - Meio de agressão</p>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="violence_case_assault_beat">Força corporal/espancamento</label>
                    <select name="violence_case_assault_beat" id="violence_case_assault_beat" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_assault_hanging">Enforcamento</label>
                    <select name="violence_case_assault_hanging" id="violence_case_assault_hanging"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_assault_obj_force">Obj. contundente</label>
                    <select name="violence_case_assault_obj_force" id="violence_case_assault_obj_force"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="violence_case_assault_obj_sharp">Obj. pérfurocortante</label>
                    <select name="violence_case_assault_obj_sharp" id="violence_case_assault_obj_sharp"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_assault_obj_hot">Substância/Obj. quente</label>
                    <select name="violence_case_assault_obj_hot" id="violence_case_assault_obj_hot"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_assault_poison">Envenenamento, Intoxicação</label>
                    <select name="violence_case_assault_poison" id="violence_case_assault_poison" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_assault_gun">Arma de fogo</label>
                    <select name="violence_case_assault_gun" id="violence_case_assault_gun" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_assault_threat">Ameaça</label>
                    <select name="violence_case_assault_threat" id="violence_case_assault_threat" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_assault_other">Outro</label>
                    <select name="violence_case_assault_other" id="violence_case_assault_other" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_assault_other_COMPLEMENT">Outro</label>
                    <input type="text" name="violence_case_assault_other_COMPLEMENT"
                        id="violence_case_assault_other_COMPLEMENT" class="form-control">
                </div>
            </div>


        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Violência Sexual</strong></legend>
            <br>
            <p>58 - Se ocorreu violência sexual, qual o tipo?</p>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="violence_case_sex_harass">Assédio sexual</label>
                    <select name="violence_case_sex_harass" id="violence_case_sex_harass" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_sex_rape">Estupro</label>
                    <select name="violence_case_sex_rape" id="violence_case_sex_rape" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_sex_child">Pornografia infantil</label>
                    <select name="violence_case_sex_child" id="violence_case_sex_child" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="violence_case_sex_abuse">Exploração sexual</label>
                    <select name="violence_case_sex_abuse" id="violence_case_sex_abuse" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_sex_other">Outro</label>
                    <select name="violence_case_sex_other" id="violence_case_sex_other" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_sex_other_COMPLEMENT">Outro</label>
                    <input type="text" name="violence_case_sex_other_COMPLEMENT" id="violence_case_sex_other_COMPLEMENT"
                        class="form-control">
                </div>
            </div>

            <p>59 - Procedimento realizado</p>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_sex_std">Profilaxia DST</label>
                    <select name="violence_case_sex_std" id="violence_case_sex_std" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_sex_hiv">Profilaxia HIV</label>
                    <select name="violence_case_sex_hiv" id="violence_case_sex_hiv" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_sex_hepatitis">Profilaxia Hepatite B</label>
                    <select name="violence_case_sex_hepatitis" id="violence_case_sex_hepatitis" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_sex_blood">Coleta de sangue</label>
                    <select name="violence_case_sex_blood" id="violence_case_sex_blood" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_sex_semen">Coleta de sêmen</label>
                    <select name="violence_case_sex_semen" id="violence_case_sex_semen" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_sex_secretion">Coleta de secreção vaginal</label>
                    <select name="violence_case_sex_secretion" id="violence_case_sex_secretion" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_sex_contraception">Contracepção de emergência</label>
                    <select name="violence_case_sex_contraception" id="violence_case_sex_contraception"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_sex_abortion">Aborto previsto em lei</label>
                    <select name="violence_case_sex_abortion" id="violence_case_sex_abortion" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>
            </div>

        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Dados do Provável Autor da Violência</strong></legend>
            <br>
            <div class="form-group">
                <label for="violence_case_author_num">60 - Número de envolvidos</label>
                <select name="violence_case_author_num" id="violence_case_author_num" class="form-control">
                    <option selected>9 - Ignorado</option>
                    <option>1 - Um</option>
                    <option>2 - Dois ou mais</option>
                </select>
            </div>
            <p>61 - Vínculo/grau de parentesco com a pessoa atendida</p>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_author_dad">Pai</label>
                    <select name="violence_case_author_dad" id="violence_case_author_dad" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_mom">Mãe</label>
                    <select name="violence_case_author_mom" id="violence_case_author_mom" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_stepfather">Padrasto</label>
                    <select name="violence_case_author_stepfather" id="violence_case_author_stepfather"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_stepmother">Madrasta</label>
                    <select name="violence_case_author_stepmother" id="violence_case_author_stepmother"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_author_partner">Cônjuge</label>
                    <select name="violence_case_author_partner" id="violence_case_author_partner" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_expartner">Ex-Cônjuge</label>
                    <select name="violence_case_author_expartner" id="violence_case_author_expartner"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_date">Namorado(a)</label>
                    <select name="violence_case_author_date" id="violence_case_author_date" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_exdate">Ex-Namorado(a)</label>
                    <select name="violence_case_author_exdate" id="violence_case_author_exdate" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_author_child">Filho(a)</label>
                    <select name="violence_case_author_child" id="violence_case_author_child" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_sibling">Irmão(ã)</label>
                    <select name="violence_case_author_sibling" id="violence_case_author_sibling" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_friend">Amigos/conhecidos</label>
                    <select name="violence_case_author_friend" id="violence_case_author_friend" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_stranger">Desconhecido(a)</label>
                    <select name="violence_case_author_stranger" id="violence_case_author_stranger"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="violence_case_author_caregiver">Cuidador(a)</label>
                    <select name="violence_case_author_caregiver" id="violence_case_author_caregiver"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_boss">Patrão/chefe</label>
                    <select name="violence_case_author_boss" id="violence_case_author_boss" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_police">Policial/agente da lei</label>
                    <select name="violence_case_author_police" id="violence_case_author_police" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="violence_case_author_self">Própria pessoa</label>
                    <select name="violence_case_author_self" id="violence_case_author_self" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="violence_case_author_person">Pessoa com relação institucional</label>
                    <select name="violence_case_author_person" id="violence_case_author_person" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_author_other">Outros</label>
                    <select name="violence_case_author_other" id="violence_case_author_other" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_author_other_COMPLEMENT">Outros</label>
                    <input type="text" name="violence_case_author_other_COMPLEMENT"
                        id="violence_case_author_other_COMPLEMENT" class="form-control">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="violence_case_author_sex">62 - Sexo do provável autor da violência</label>
                    <select name="violence_case_author_sex" id="violence_case_author_sex" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Masculino</option>
                        <option>2 - Feminino</option>
                        <option>3 - Ambos os sexos</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="violence_case_author_alcohol">63 - Suspeita de uso de álcool</label>
                    <select name="violence_case_author_alcohol" id="violence_case_author_alcohol" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_author_life">64 - Ciclo de vida do provável autor da violência</label>
                    <select name="violence_case_author_life" id="violence_case_author_life" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Criança (0 a 9 anos)</option>
                        <option>2 - Adolescente (10 a 19 anos)</option>
                        <option>3 - Jovem (20 a 24 anos)</option>
                        <option>4 - Pessoa adulta (25 a 59 anos)</option>
                        <option>5 - Pessoa idosa (60 anos ou mais)</option>
                    </select>
                </div>
            </div>




        </fieldset>
    </div>
    <hr>
    <div class="container">
        <fieldset>
            <legend style="text-align: center;"><strong>Encaminhamento</strong></legend>
            <br>
            <p>65 - Encaminhamento</p>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_ref_ubs">Rede da Saúde (Unidade Básica de Saúde,hospital,outras)</label>
                    <select name="violence_case_ref_ubs" id="violence_case_ref_ubs" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_ref_social">Rede da Assistência Social (CRAS, CREAS, outras)</label>
                    <select name="violence_case_ref_social" id="violence_case_ref_social" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_ref_scholar">Rede da Educação (Creche, escola, outras)</label>
                    <select name="violence_case_ref_scholar" id="violence_case_ref_scholar" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_ref_council">Conselho Tutelar</label>
                    <select name="violence_case_ref_council" id="violence_case_ref_council" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="violence_case_ref_women">Rede de Atendimento à Mulher (Centro Especializado de Atendimento à
                    Mulher, Casa da Mulher Brasileira, outras)</label>
                <select name="violence_case_ref_women" id="violence_case_ref_women" class="form-control">
                    <option selected>9 - Ignorado</option>
                    <option>1 - Sim</option>
                    <option>2 - Não</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_ref_elderly_c">Conselho do Idoso</label>
                    <select name="violence_case_ref_elderly_c" id="violence_case_ref_elderly_c" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_ref_elderly_d">Delegacia de Atendimento ao Idoso</label>
                    <select name="violence_case_ref_elderly_d" id="violence_case_ref_elderly_d" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_ref_h_rights">Centro de Referência dos Direitos
                        Humanos</label>
                    <select name="violence_case_ref_h_rights" id="violence_case_ref_h_rights" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_ref_p_ministry">Ministério Público</label>
                    <select name="violence_case_ref_p_ministry" id="violence_case_ref_p_ministry" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_ref_children">Delegacia Especializada de Proteção
                        à Criança e Adolescente</label>
                    <select name="violence_case_ref_children" id="violence_case_ref_children" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_ref_women_d">Delegacia de Atendimento à Mulher</label>
                    <select name="violence_case_ref_women_d" id="violence_case_ref_women_d" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="violence_case_ref_other_d">Outras delegacias</label>
                    <select name="violence_case_ref_other_d" id="violence_case_ref_other_d" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_ref_children_j">Justiça da Infância e da Juventude</label>
                    <select name="violence_case_ref_children_j" id="violence_case_ref_children_j" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label for="violence_case_ref_p_defender">Defensoria Pública</label>
                    <select name="violence_case_ref_p_defender" id="violence_case_ref_p_defender" class="form-control">
                        <option selected>9 - Ignorado</option>
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
            <legend style="text-align: center;"><strong>Dados Finais</strong></legend>
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_end_work">66 - Violência Relacionada
                        ao Trabalho</label>
                    <select name="violence_case_end_work" id="violence_case_end_work" class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_end_work_accident">67 - Se sim, foi emitida a Comunicação de
                        Acidente do Trabalho (CAT)</label>
                    <select name="violence_case_end_work_accident" id="violence_case_end_work_accident"
                        class="form-control">
                        <option selected>9 - Ignorado</option>
                        <option>1 - Sim</option>
                        <option>2 - Não</option>
                        <option>8 - Não se aplica</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="violence_case_end_injury">68 - Circunstância da lesão (CID 10 - Cap XX)</label>
                    <input type="text" name="violence_case_end_injury" id="violence_case_end_injury"
                        class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="violence_case_end_date">69 - Data de encerramento</label>
                    <input type="date" name="violence_case_end_date" id="violence_case_end_date" class="form-control">
                </div>

            </div>

    </div>

    </fieldset>
    </div>


    @endsection