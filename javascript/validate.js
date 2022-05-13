
$(document).ready(function() {
$("#basic-form").validate({
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    
    rules: {
      login: {
        required: true,
        minlength: 3
      },
      password: {
        required: true,
        minlength : 5 
      },
      email: {
        required: true,
        email: true
      },
      numar: {
        required: true,
        number : true
      },
    },
    messages : {
      login: {
        minlength: "*Numele trebuie sa fie de cel putin 3 caractere*",
        required: "* Nu ati introdus un login *"
      },
      password: {
        required: "* Nu ati introdus o parola *",
        minlength : "* Parola trebuie sa fie de minim 5 caractere *"
      },
      email: {
        email : "* Posta de email trebuie sa fie de forma abc@gmail.com *",
        required :"* Trebuie sa introduci posta de email *"
      },
      numar: {
        required :"* Trebuie sa introduci posta de email *",
        number : "* Telefonul trebuie sa contina doar cifre! *"
      },
    }
  });


  $("#basicform").validate({
    errorClass: "error fail-alert",
    validClass: "valid success-alert",
    
    rules: {
      login: {
        required: true,
        minlength: 3
      },
      password: {
        required: true,
        minlength : 5 
      },
    },
    messages : {
      login: {
        minlength: "*Numele trebuie sa fie de cel putin 3 caractere*",
        required: "* Nu ati introdus un login *"
      },
      password: {
        required: "* Nu ati introdus o parola *",
        minlength : "* Parola trebuie sa fie de minim 5 caractere *"
      },
    }
  });
});