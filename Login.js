$(document).ready(function() {
  $("#log").click(function(event) {
    /* Act on the event */
    localStorage.setItem('usuario', $("#usuario").val());
    localStorage.setItem('password', $("#pass").val());
    $.getJSON('admin.json?nocache=123ff', function(data) {
      for (var i = 0; i < data.length; i++) {
        console.log(data);
        if (localStorage.getItem("usuario") == data[i].USUARIO && localStorage.getItem("password") == data[i].PASS) {
          alert("Bienvenido " + data[i].USUARIO);
          sessionStorage.setItem('sesion_id', data[i].username);
          sessionStorage.setItem('ubicacion', data[i].direccion);
          window.location.href = 'Principal.html';
          break;
        } else {
          $("#usuario").val("");
          $("#pass").val("");
        }


      }


    }).fail(function(d,Status,error){
        console.error(" status: " + Status + ", error: "+error)
});


  });
});
