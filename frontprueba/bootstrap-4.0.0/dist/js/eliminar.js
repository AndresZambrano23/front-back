$(document).ready(function(){
    $("#Eliminar").click(function(){
        window.location.href="eliminar.php";
    })

    $("#elirest").click(function(){
        var id_restaurante = $("#id_restaurante").val();

        var array= [{
            "id_restaurante" : id_restaurante
        }]

        var json = JSON.stringify(array);

        $.ajax({
            contentType: "application/json",
            dataType: "json",
            url: "http://localhost/prueba_tecninca/prueba/Controladores/EliminarRestaurante.php?",
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