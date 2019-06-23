<?php

require './head.php';
$head = head();
print($head);


echo "<h1 class='h2'> Ese restaurante ya no existe ? Eliminalo</h1>";

echo 
 "<div class='formeliminar'><form>

    <div class='form-group'>
        <label for='Identificacion Restaurante'>Identificacion Restaurante</label>
        <input type='number' class='form-control' id='id_restaurante' aria-describedby='emailHelp' placeholder='Identificacion Restaurante'>
    </div>

    <button type='button' id='elirest' class='btn btn-primary'>Eliminar Restaurante</button>
    <button type='button' id='atras' class='btn btn-primary'>Atras</button>
 
 </form></div>";