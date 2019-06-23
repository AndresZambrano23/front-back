$(document).ready(function(){
    $("#consulta").click(function(){
        window.location.href="restaurante.php";
    })

    $.ajax({
        url:"http://localhost/prueba_tecninca/prueba/Controladores/MostrarRestaurante.php",
        type:"GET",
        dataType:"text",
        contentType:"application/text",
        success:function(datos) {
           //console.log(datos);
            
            $.each($.parseJSON(datos) , function(i, elemento){
                //console.log(elemento.id_restaurante);
                $("#tbl").append("<tr><td id='id_restaurante'>"+elemento.id_restaurante+"</td><td>"+
                elemento.nombre_restaurante+"</td><td>"+
                elemento.direccion+"</td><td>"+
                elemento.tipo_restaurante+"</td><td>"+
                elemento.horario+"</td><td><button type='button' id='actualizar' onclick='actualizar()' class='btn btn-success' >Actualizar</button></td><td><button type='button' class='btn btn-danger'>Eliminar</button></td></tr>");
            })
        },
        error: function (err) {
            console.log(err);   
            alert("no funciona");
        }
    });


    
})

function actualizar(){
    //var id_restaurante = $("#id_restaurante").val();
    var id_restaurante= document.getElementById('id_restaurante').innerHTML;

    

}