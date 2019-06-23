$(document).ready(function() {
    $("#Actualizar").click(function(){
        window.location.href="actualizar.php";
    })

    $("#actrest").click(function(){
        var id_restaurante = $("#id_restaurante").val();
        var nombre_restaurante = $("#nombre_restaurante").val();
        var direccion = $("#direccion").val();
        var tipo_restaurante = $("#tipo_restaurante").val();
        var horario = $("#horario").val();

        var array=[{
            "id_restaurante" : id_restaurante,
            "nombre_restaurante" : nombre_restaurante,
            "direccion" : direccion,
            "tipo_restaurante" : tipo_restaurante,
            "horario" : horario
        }]

        var json = JSON.stringify(array);

        $.ajax({
            contentType: "application/json",
            dataType: "json",
            url: "http://localhost/prueba_tecninca/prueba/Controladores/ActualizarRestaurante.php?",
            type: "POST",
            data: json,
            success: function (datos) {
                console.log(datos);
                alert("Datos Ingresados");
            },
            error: function (err) {
                console.log(err);
            }
        });
    })
})