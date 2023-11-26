// Função para máscara do Telefone
var inputTel = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
    options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(inputTel.apply({}, arguments), options);
        }
    };

$('#inputtelefone').mask(inputTel, options);



// Função para máscara do CPF
var inputCpf = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '000.000.000-00' : '000.000.000-09';
},
    options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(inputCpf.apply({}, arguments), options);
        }
    };

$('#inputcpf').mask(inputCpf, options);




