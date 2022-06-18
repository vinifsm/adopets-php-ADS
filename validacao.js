$("#frmInsUser").validate({
    errorPlacement: function(error, element) {
        error.appendTo( element.parent("label").next("label") );
      }
});

jQuery.extend(jQuery.validator.messages, {
    required: "Esse campo é requirido.",
    remote: "Please fix this field.",
    email: "Informe um e-mail válido.",
    url: "Please enter a valid URL.",
    date: "Please enter a valid date.",
    dateISO: "Please enter a valid date (ISO).",
    number: "Please enter a valid number.",
    digits: "Informe um número válido.",
    creditcard: "Please enter a valid credit card number.",
    equalTo: "Please enter the same value again.",
    accept: "Please enter a value with a valid extension.",
    maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
    minlength: jQuery.validator.format("Please enter at least {0} characters."),
    rangelength: jQuery.validator.format("O campo deve ter entre {0} e {1} caracteres."),
    range: jQuery.validator.format("Please enter a value between {0} and {1}."),
    max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
    min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
});