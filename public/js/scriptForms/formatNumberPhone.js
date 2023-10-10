function formatPhoneNumber(input) {
 //Utilizando regex para remover caracteres não numericos /\D
 let phoneNumber = input.value.replace(/\D/g, '');

 if (phoneNumber.length >= 10) {
     //substr para dividir a string
     const formattedPhoneNumber = `(${phoneNumber.substr(0, 2)}) ${phoneNumber.substr(2, 5)}-${phoneNumber.substr(7, 4)}`;
     
  
     input.value = formattedPhoneNumber;
 }
}