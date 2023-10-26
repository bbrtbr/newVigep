document.addEventListener('DOMContentLoaded', function () {
    var patient_cpf = document.getElementById('patient_cpf');
    var patient_name = document.getElementById('patient_name');
    var patient_mother_name = document.getElementById('patient_mother_name');
    var patient_birthday = document.getElementById('patient_birthday');
    var patient_sex = document.getElementById('patient_sex');
    var patient_pregnant = document.getElementById('patient_pregnant');
    var patient_race = document.getElementById('patient_race');
    var patient_education = document.getElementById('patient_education');
    var patient_cns = document.getElementById('patient_cns');
    var patient_phone = document.getElementById('patient_phone');
    var patient_age = document.getElementById('patient_age');
    patient_cpf.addEventListener('blur', function () {
        var cpf = patient_cpf.value;
        if (cpf.length > 13) { 
            fetch(`/vigep/verifyCPF?patient_cpf=${cpf}`)
                .then(response => response.json())
                .then(data => {
                    if (data.patient_id>0) {
                        patient_name.value = data.patient_name;
                        patient_mother_name.value = data.patient_mother_name;
                        patient_birthday.value = data.patient_birthday;
                        patient_sex.value = data.patient_sex;
                        patient_pregnant.value = data.patient_pregnant;
                        patient_race.value = data.patient_race;
                        patient_education.value = data.patient_education;
                        patient_cns.value = data.patient_cns;
                        patient_phone.value = data.patient_phone;
                        patient_age.value = data.patient_age;
                    } else {
                        // Caso o CPF não corresponda a um paciente

                    }
                });
        }
    });
});
