$(document).ready(function() {
  var busqueda;
  $("#libro").css('display', 'none');
  $("#lupa").css('display', 'none');
  $(".contenido").css('display', 'block');
  $("#Buscar").click(function(event) {
    $("#libro").toggle(500);
    $("#lupa").toggle(500);
    $("#lupa").click(function(event) {
      /* Act on the event */

      busqueda = $("#libro").val();
      $.getJSON('libros.json?nocache=123', function(json) {
        for (var i = 0; i < json.length; i++) {
          if (json[i].TEMA1.includes(busqueda) || json[i].TITULO.includes(busqueda)) {
            console.log("encontrado " + json[i].ID);
            $(".contenido").append('<p>' + 'CLASIFICACION : ' + json[i].CLASIFICACION + '</p>')
            $(".contenido").append('<p>' + 'ID : ' + json[i].ID + '</p>')
            $(".contenido").append('<p>' + 'TITULO : ' + json[i].TITULO + '</p>')

          }
        }
      }).fail(function(d, Status, error) {
        console.error(" status: " + Status + ", error: " + error)
      });

      $(".contenido").toggle(500);
      $(".contenido").empty();




    });

  });


});
