patient_birthday.addEventListener('input', function () {
    const birthDate = new Date(document.getElementById("patient_birthday").value);
    const today = new Date();
    const differenceYears = today.getFullYear() - birthDate.getFullYear();
    // Verifica se o mês de nascimento já ocorreu este ano
    if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())) {
        document.getElementById("patient_age").value = differenceYears - 1;
    } else {
        document.getElementById("patient_age").value = differenceYears;
    }
});