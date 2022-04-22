$(document).ready(function() {
    $("#basic-form").validate({
      errorClass: "error fail-alert",
      validClass: "valid success-alert",
      rules: {
        login : {
          required: true,
          minlength: 3
        },
        password: {
          required: true,
          minlength: 5
        },
        email: {
          required: true,
          email: true
        },
        emailrepetat: {
          email:true,
          required: true,
          equalTo: "#email"
        },
        numar: {
          required:true,
          number: true,
          },
          loginsaved: {
            required:true,
            equalTo: "#login"
            },
            passwordsaved: {
              required:true,
              equalTo: "#password"
              },
      },
      messages : {
        login: {
          minlength: "*Login-ul trebuie sa fie de cel putin 3 caractere*",
          required: "*Introduceti loginul care doriti sa-l creati*"
        },
        password: {
          required: "*Introduceti parola*",
          minlength: "*Parola trebuie sa fie de minim 5 caractere*"
        },
        email: {
          email: "*Posta de email trebuie sa fie de forma abc@gmail.com*",
          required :"*Trebuie sa introduci posta de email*"
        },
        emailrepetat: {
          email: "*Posta de email trebuie sa fie de forma abc@gmail.com*",
          required :"*Trebuie sa introduci posta de email*",
          equalTo: "*Posta de email trebuie sa fie ca cea anterioara*"
        },
        numar: {
          required: "*Introduceti numarul de telefon*",
          number: "*Numarul de telefon nu a fost scris corect*"
        },
        loginsaved: {
          required: "*Introduceti login-ul creat*",
          equalTo: "*Login-ul nu este corect*"
        },
        passwordsaved: {
          required: "*Introduceti parola contului*",
          equalTo: "*Parola nu este corecta*"
        }
      }
    });


  });