var field = document.getElementById('health_unit_name');
var suggestion = document.getElementById('suggestionUnidSaude');
var codUnidSaude = document.getElementById('health_unit_code');
var vetorSugestoes = [
    {"name": "UBS SITIO TAQUARI JUNCO", "code": "5462762"},
    {"name": "CENTRO DE ZOONOSES DE JUAZEIRO DO NORTE", "code": "7808542"},
    {"name": "UNIDADE DE SAUDE DA FAMILIA BETOLANDIA II", "code": "72095"},
    {"name": "POLICLINICA GERALDO MENEZES BARBOSA", "code": "4011457"},
    {"name": "UBS JOAO CABRAL I E III", "code": "2425793"},
    {"name": "UBS SAO JOSE II", "code": "2425823"},
    {"name": "UBS CENTRO", "code": "6510116"},
    {"name": "CENTRAL DE ABASTECIMENTO FARMACEUTICO CAF", "code": "5352282"},
    {"name": "UBS TIMBAUBA", "code": "4011473"},
    {"name": "UBS ROMEIRAO", "code": "3010872"},
    {"name": "SECRETARIA MUNICIPAL DE SAUDE", "code": "5379067"},
    {"name": "UBS FRANCISCANOS I", "code": "2717530"},
    {"name": "UBS LEANDRO BEZERRA AEROPORTO", "code": "2425904"},
    {"name": "SALA DE VACINA VAPT VUPT", "code": "178004"},
    {"name": "UBS VILA NOVA I E II", "code": "6757057"},
    {"name": "UBS PIO XII III", "code": "2425785"},
    {"name": "UBS TIMBAUBAS III", "code": "7424558"},
    {"name": "UBS SALESIANOS TIA NENA", "code": "3465748"},
    {"name": "BANCO DE LEITE HUMANO HOSPITAL MUNICIPAL SAO LUCAS", "code": "7280416"},
    {"name": "CENTRO DE ESPECIALIDADES ODONTOLOGICAS CEO", "code": "2664658"},
    {"name": "UBS SALESIANO I", "code": "2425807"},
    {"name": "UBS VILA SAO FRANCISCO", "code": "2426161"},
    {"name": "UBS FREI DAMIAO I", "code": "2425890"},
    {"name": "UNIDADE DE PRONTO ATENDIMENTO UPA LAGOA SECA", "code": "830739"},
    {"name": "UBS TRIANGULO", "code": "4011554"},
    {"name": "UBS SAO MIGUEL", "code": "3010775"},
    {"name": "CAPS AD DE JUAZEIRO DO NORTE", "code": "3616711"},
    {"name": "CENTRO DE ATENCAO PSICOSSOCIAL INFANTIL CAPS I SEU MOCINHO", "code": "7867328"},
    {"name": "UBS SAO JOSE III", "code": "6576834"},
    {"name": "UBS VILA TRES MARIA", "code": "3430057"},
    {"name": "UBS SOCORRO SALGADINHO", "code": "2425998"},
    {"name": "USF 50 CARAS DO UMARI", "code": "2425815"},
    {"name": "HOSPITAL MATERNIDADE SAO LUCAS", "code": "2562499"},
    {"name": "UBS LIMOEIRO", "code": "2426110"},
    {"name": "CENTRO DE APOIO A SAUDE DA FAMILIA DE JUAZEIRO DO NORTE", "code": "7413955"},
    {"name": "UBS LAGOA SECA I", "code": "2426129"},
    {"name": "HOSPITAL INFANTIL MUNICIPAL MARIA AMELIA BEZERRA", "code": "2426072"},
    {"name": "UBS PIO XII I E II", "code": "2425777"},
    {"name": "UBS BETOLANDIA", "code": "2426064"},
    {"name": "UBS GAVIAO E SABIA", "code": "2426048"},
    {"name": "UBS PALMEIRINHA", "code": "2425874"},
    {"name": "UBS JOAO CABRAL II E IV", "code": "2717611"},
    {"name": "UBS SANTA TEREZA I", "code": "3474666"},
    {"name": "UBS CAMPO ALEGRE", "code": "7107560"},
    {"name": "CEREST DE JUAZEIRO DO NORTE", "code": "3761622"},
    {"name": "UBS HORTO II", "code": "5005043"},
    {"name": "UBS JOSE GERALDO DA CRUZ", "code": "3631117"},
    {"name": "UBS NOVO JUAZEIRO", "code": "2717654"},
    {"name": "UBS ANTONIO VIEIRA I", "code": "2425947"},
    {"name": "UBS SAO JOSE I", "code": "2425831"},
    {"name": "SAME SERV DE ASSIST MEDICA ESPECIALIZADA", "code": "2425912"},
    {"name": "CENTRO DE DERMATOLOGIA", "code": "2425866"},
    {"name": "UBS MARROCOS SAO GONCALO", "code": "2426013"},
    {"name": "UBS HORTO I MARIA FRANCISCA GERMANO", "code": "2425920"},
    {"name": "UBS JUVENCIO SANTANA", "code": "2717573"},
    {"name": "UBS TIRADENTES I", "code": "2426137"},
    {"name": "UBS VILA FATIMA PADRE SILVINO", "code": "2425963"},
    {"name": "UBS PIRAJA I", "code": "2717646"},
    {"name": "SERVICO DE OFICINA ORTOPEDICA FIXA DE JUAZEIRO DO NORTE", "code": "9237313"},
    {"name": "UBS JARDIM GONZAGA", "code": "5936268"},
    {"name": "HOSPITAL DE CAMPANHA COVID 19", "code": "258857"},
    {"name": "UBS FREI DAMIAO II", "code": "3464288"},
    {"name": "UBS SALESIANOS", "code": "3465721"},
    {"name": "UBS TIRADENTES II", "code": "3452239"},
    {"name": "UNIDADE DE PRONTO ATENDIMENTO UPA LIMOEIRO", "code": "7501366"},
    {"name": "UBS FRANCISCANOS II", "code": "5799015"},
    {"name": "SERVICO DE ATENCAO ESPECIALIDADE SAE", "code": "7423039"},
    {"name": "CER III", "code": "4202198"}
];

//é criado um datalist dinâmico
var dataList = document.createElement('datalist');
dataList.id = 'datalist-sugestoes';


field.setAttribute('list', 'datalist-sugestoes');


document.body.appendChild(dataList);

field.addEventListener('input', function () {
    var textTyped = field.value.toLowerCase();
    
 
    dataList.innerHTML = '';

    // Filtra o vetor de sugestões com base no texto digitado
    var suggestionFiltered = vetorSugestoes.filter(function (suggestion) {
        return suggestion.name.toLowerCase().startsWith(textTyped);
    });

    // Adiciona as sugestões filtradas
    suggestionFiltered.forEach(function (suggestion) {
        var newOption = document.createElement('option');
        newOption.value = suggestion.name;
        dataList.appendChild(newOption);
    });

    var suggestionSelected = vetorSugestoes.find(function (suggestion) {
        return suggestion.name === field.value;
    });

    if (suggestionSelected) {
        codUnidSaude.value = suggestionSelected.code;
    } else {
        codUnidSaude.value = ''; 
    }
});
