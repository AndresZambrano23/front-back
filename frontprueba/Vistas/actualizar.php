<?php

require './head.php';
$head = head();
print($head);

echo "<h1 class='h2'> Actualiza datos restaurantes</h1>";

echo 
 "<div class='formactualizar'><form>

    <div class='form-group'>
        <label for='Identificacion Restaurante'>Identificacion Restaurante</label>
        <input type='number' class='form-control' id='id_restaurante' aria-describedby='emailHelp' placeholder='Identificacion Restaurante'>
    </div>

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

    <button type='button' id='actrest' class='btn btn-primary'>Actualizar Restaurante</button>
    <button type='button' id='atras' class='btn btn-primary'>Atras</button>
 
 </form></div>";