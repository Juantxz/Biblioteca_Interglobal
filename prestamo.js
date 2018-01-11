$(document).ready(function() {
      $("#prestar").click(function(event) {
          /* Act on the event */

          var matricula = $("#user").val();
          $.getJSON('alumnos.json?nocache=123', function(json) {
              for (var i = 0; i < json.length; i++) {
                if (matricula == json[i].BOLETA) {


                  json.push({
                      "BOLETA": matricula,
                      "NOMBRE": json[i].NOMBRE,
                      "CORREO": json[i].CORREO,
                      "LIBROS": [{
                          "ID": $("#titulo1") val(),
                          "FECHA_ENTRADA": ["", "", ""],
                          "FECHA_SALIDA": ["", "", ""]

                        },
                        {
                          "ID": $("#titulo2") val(),
                          "FECHA_ENTRADA": ["", "", ""],
                          "FECHA_SALIDA": ["", "", ""]

                        },
                        {
                          "ID": $("#titulo3") val(),
                          "FECHA_ENTRADA": ["", "", ""],
                          "FECHA_SALIDA": ["", "", ""]

                        }
                      });
                    var parametros = {
                      "test": json
                    }; $.ajax({
                      data: parametros,
                      url: 'escribir_json.php',
                      type: 'post',
                      beforeSend: function() {
                        alert("Procesando, espere por favor...");
                      },
                      success: function(response) {
                        alert("Exito!")
                      },
                      error: function(error, xhr, status) {
                        alert(error)
                        alert(xhr)
                        alert(status)

                      }
                    });
                  }
                }



              }).fail(function(d, Status, error) {
              console.error(" status: " + Status + ", error: " + error)
            });
          });
      });
