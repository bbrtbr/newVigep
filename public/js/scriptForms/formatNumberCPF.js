function formatNumberCPF(input) {
    let numberCPF = input.value.replace(/\D/g, '');

    if (numberCPF.length >= 11) {
        const formattednumberCPF = `${numberCPF.substr(0, 3)}.${numberCPF.substr(3, 3)}.${numberCPF.substr(6, 3)}-${numberCPF.substr(9, 2)}`;
        input.value = formattednumberCPF;
    }
   
}
