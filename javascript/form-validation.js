$(document).ready(function() {
  $("#form-support").validate({
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    
    rules: {
      nume: {
        required: true,
        minlength: 3
      },
      posta: {
        required: true,
        email: true
      },
      help: {
        required: true,
      },
    },
    messages : {
      nume: {
        minlength: "*Numele trebuie sa fie de cel putin 3 caractere*",
        required: "*Introduceti numele care doriti sa-l creati*"
      },
      help: {
        required: "*Introduceti problema cu care v-ati confruntat!*",
      },
      posta: {
        email : "*Posta de email trebuie sa fie de forma abc@gmail.com*",
        required :"*Trebuie sa introduci posta de email*"
      },
    }
  });

});