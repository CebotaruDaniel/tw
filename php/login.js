$(function(){
  $(".submit").click(() => $(".success").text(""));
  $(".submit").click(() => $(".error").text(""));
  $("form[name='login_form']").validate({
      rules: {
          Username: "required",
          Password: {
              required: true,
          },
      },

      messages: {
          Username: "* Introduceti Login-ul *",
          Password: "* Introduceti parola *"
      },
          submitHandler: function(form){
              $.ajax({
                  url: "login.php",
                  type: "POST",
                  data: $(form).serialize(),
                  dataa: $(form).serialize(),
                  success: function(response) {
                      let rs = JSON.parse(response);
                      if(rs.succes) {
                          $(".success").text(rs.data);
                          $(".error").text(rs.dataa);
                          $("input[type=text],input[type=password], textarea").val("");
                      }
                  }
              });
          }
  });
});