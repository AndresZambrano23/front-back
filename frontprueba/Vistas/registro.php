<?php
require './head.php';
$head = head();
print($head);

echo "<h1 class='h2'> Ingreso de nuevos restaurantes</h1>";
 echo 
 "<div class='form'><form>
    <div class='form-group'>
        <label for='Nombre Restaurante'>Nombre Restaurante</label>
        <input type='text' class='form-control' id='nombre_restaurante' aria-describedby='emailHelp' placeholder='Nombre Restaurante'>
    </div>

    <div class='form-group'>
        <label for='Direccion'>Direccion</label>
        <input type='text' class='form-control' id='direccion' aria-describedby='emailHelp' placeholder='Direccion'>
    </div>

    <div class='form-group'>
        <label for='Tipo Restaurante'>Tipo Restaurante</label>
        <select class='custom-select' id='tipo_restaurante'>
            <option selected=''>Seleccione una opcion</option>
            <option >Comidas Rapida</option>
            <option >Restaurante Familiar</option>
            <option >Restaurante Gourmet</option>
            <option >Restaurante Tematico</option>
            <option >Restaurante Chino</option>
        </select>
    </div>

    <div class='form-group'>
        <label for='Horario'>Horario</label>
        <input type='text' class='form-control' id='horario' aria-describedby='emailHelp' placeholder='Horario'>
    </div>

    <button type='button' id='agregar' class='btn btn-primary'>Agregar Restaurante</button>
    <button type='button' id='atras' class='btn btn-primary'>Atras</button>
 
 </form></div>";