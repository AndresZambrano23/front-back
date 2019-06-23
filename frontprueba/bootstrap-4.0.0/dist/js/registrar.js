$(document).ready(function(){
    $("#registrar").click(function(){
        window.location.href="registro.php";
    })

    $("#atras").click(function(){
        window.location.href="restaurante.php";
    })

    $("#agregar").click(function(){
        var nombre_restaurante = $("#nombre_restaurante").val();
        var direccion = $("#direccion").val();
        var tipo_restaurante = $("#tipo_restaurante").val();
        var horario = $("#horario").val();

        var array =[{
            "nombre_restaurante": nombre_restaurante,
            "direccion": direccion,
            "tipo_restaurante": tipo_restaurante,
            "horario": horario
        }];

        var json = JSON.stringify(array);

        $.ajax({
            contentType: "application/json",
            dataType: "json",
            url: "http://localhost/prueba_tecninca/prueba/Controladores/RestauranteController.php?",
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
});