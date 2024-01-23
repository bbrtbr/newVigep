document.addEventListener('DOMContentLoaded', function () {
    var healthWorkerSelect = document.getElementById('health_worker_name');
    var healthWorkerCodeInput = document.getElementById('health_worker_registration');

    healthWorkerSelect.addEventListener('change', function () {
        var selectedOption = healthWorkerSelect.options[healthWorkerSelect.selectedIndex];
        var code = selectedOption.getAttribute('data-code');
        healthWorkerCodeInput.value = code;
    });

    // Preenche o código inicialmente se uma opção estiver pré-selecionada
    var initialSelectedOption = healthWorkerSelect.options[healthWorkerSelect.selectedIndex];
    var initialCode = initialSelectedOption ? initialSelectedOption.getAttribute('data-code') : '';
    healthWorkerCodeInput.value = initialCode;
});