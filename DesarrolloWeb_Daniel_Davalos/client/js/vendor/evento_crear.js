$( document ).ready(function() {
      var nombres=['Juan','Jose','Daniel'];
      var apellidos=['Salas','Villa','Ruiz'];
      var email=['juan@gmail.com','jose@gmail.com','daniel@gmail.com'];
      var fecha=['1994/12/01','1994/12/01','1996/12/01'];
      var contrasena=['juan123','jose123','daniel123'];
			for(var i=0;i<3;i++)
      {
        var nom=nombres[i];
        var ape=apellidos[i];
        var em=email[i];
        var fec=fecha[i];
        var cont=contrasena[i];
  			$.ajax({
  				url:"http://localhost:8080/server/create_user.php",
  				data:{em:em, nom:nom, apel:ape, fecha:fec,cont: cont},
  				type:"POST",
  				success: function(datos)
  				{
  					alert("Usuario Creado");
  				}
  			});
      }
});
