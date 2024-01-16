document.addEventListener('DOMContentLoaded', function () {
    var healthUnitSelect = document.getElementById('health_unit_name');
    var healthUnitCodeInput = document.getElementById('health_unit_code');

    healthUnitSelect.addEventListener('change', function () {
        var selectedOption = healthUnitSelect.options[healthUnitSelect.selectedIndex];
        var code = selectedOption.getAttribute('data-code');
        healthUnitCodeInput.value = code;
    });

    // Preenche o código inicialmente se uma opção estiver pré-selecionada
    var initialSelectedOption = healthUnitSelect.options[healthUnitSelect.selectedIndex];
    var initialCode = initialSelectedOption ? initialSelectedOption.getAttribute('data-code') : '';
    healthUnitCodeInput.value = initialCode;
});