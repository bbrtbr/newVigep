//import './bootstrap';

//import Alpine from 'alpinejs';

//window.Alpine = Alpine;

//Alpine.start();

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

     // MASK
     var cellMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    cellOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(cellMaskBehavior.apply({}, arguments), options);
        }
    };
    $('.mask-percent').mask('##0,00', {reverse: true});
    $('.mask-cell').mask(cellMaskBehavior, cellOptions);
    $('.mask-phone').mask('(00) 0000-0000');
    $(".mask-date").mask('00/00/0000');
    $(".mask-datetime").mask('00/00/0000 00:00');
    $('.mask-time').mask('00:00');
    $(".mask-month").mask('00/0000', {reverse: true});
    $(".mask-doc").mask('000.000.000-00', {reverse: true});
    $(".mask-cnpj").mask('00.000.000/0000-00', {reverse: true});
    $(".mask-zipcode").mask('00000-000', {reverse: true});
    $(".mask-money").mask('R$ 000.000.000.000.000,00', {reverse: true, placeholder: "R$ 0,00"});
});