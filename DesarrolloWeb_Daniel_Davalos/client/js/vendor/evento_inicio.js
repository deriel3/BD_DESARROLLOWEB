$( document ).ready(function() {
      $('#enviar_inicio').click(function(event){
          var correo=$('#user').val();
          var contrasena=$('#password').val();
          if(correo!="" && contrasena!="")
          {
            $.ajax({
      				url:"http://localhost:8080/server/check_login.php",
      				data:{em:correo,cont: contrasena},
      				type:"POST",
      				success: function(datos)
      				{
      					if (datos=="c") {
                  alert("bienvenido");
                  window.location.replace("http://localhost:8080/client/main.html");
                }
                else {
                  if (datos=="i") {
                    alert("Datos ingresados son incorrectos");
                  }
                  else {
                    alert("Error con su conneccion a internet")
                  }
                }
      				}
      			});
          }
      });
});
