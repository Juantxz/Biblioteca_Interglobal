$(document).ready(function() {
  $("#aceptar").click(function(event) {
    /* Act on the event */

    var matricula = $("#titulo1").val();
    $.getJSON('alumnos.json?nocache=123', function(json) {
      var FECHA_ENTRADA = json[0].LIBROS[0].FECHA_ENTRADA.map(Number);
      alert(FECHA_ENTRADA.join("/"))
      var FECHA_SALIDA=FECHA_ENTRADA[0]+7;
      alert(FECHA_SALIDA)



    }).fail(function(d, Status, error) {
      console.error(" status: " + Status + ", error: " + error)
    });
  });
});
