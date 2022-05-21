$(function(){
  $(".submit").click(() => $(".success").text(""));
  $(".submit").click(() => $(".error").text(""));
  $("form[name='register_form']").validate({
      rules: {
          Username: "required",
          Password: {
              required : true,
          },
          PasswordRepeat: {
              equalTo: "#password",
              required : true
          },
          email: {
              required: true,
              email: true
          },
      },

      messages: {
          Username: "*Va rog introduceți numele",
          email: "*Va rog introduceți o poștă validă",
          PasswordRepeat: "*Va rog introduceți aceeași parola",
          Password: "*Va rog introduceți parola"
      },
      submitHandler: function(form){
          $.ajax({
              url: "register.php",
              type: "POST",
              data: $(form).serialize(),
              success: function(response) {
                  let rs = JSON.parse(response);
                  if(rs.succes) {
                      $(".success").text(rs.data);
                      $("input[type=text],input[type=password], textarea").val("");
                  }
                  else {
                      $(".success").text("A aparut o eroare la rularea scriptului");
                  }
              }
          });
      }
  });
});