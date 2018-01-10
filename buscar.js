$(document).ready(function() {
    var contador = 0;
    $(".Busqueda").click(function(event) {
        /* Act on the event */
        txt = "<textarea id=libro></textarea>"
        txt2 = "<img  src=search.png id=lupa>"
        if (contador == 0) {
            $(".Busqueda").append(txt);
            $(".Busqueda").append(txt2);
          
            contador++;

            $("#lupa").click(function(event) {
                alert($("#libro").val());

            });
        }
    });


});
