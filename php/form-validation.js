
$(function(){
  $("input[type=submit]").click(() => $(".success").text(""));
  $("form[name='support']").validate({
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
    },
      submitHandler: function(form){
          $.ajax({
              url: "contact.php",
              type: "POST",
              data: $(form).serialize(),
              success: function(response) {
                  let rs = JSON.parse(response);
                  if(rs.succes) {
                      $(".success").text(rs.data);
                      $("input[type=text], textarea").val("");
                  }
                  else {
                      $(".success").text("A aparut o eroare la rularea scriptului");
                  }
              }
          });
      }
  });
});