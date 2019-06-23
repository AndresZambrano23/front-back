<?php
require './head.php';
$head = head();
print($head);
echo "<div class='container'>";
echo "<table class='table table-hover' id='x'> ";
    echo 
    "<thead> 
    <tr>
    <th scope='col'>ID_Restaurante</th>
    <th scope='col'>Nombre_Restaurante</th>
    <th scope='col'>Direccion</th>
    <th scope='col'>Tipo_Restaurante</th>
    <th scope='col'>Horario</th>
    <th scope='col'>Actualizar</th>
    <th scope='col'>Borrar</th>
    </tr>
    </thead>
    <tbody id='tbl'></tbody>";
echo "</table>";
echo "</div>";

echo "<button type='button' id='registrar' class='btn btn-success'>Registrar Restaurante</button>";
echo "<button type='button' id='Actualizar' class='btn btn-success'>Actualizar Restaurante</button>";
echo "<button type='button' id='Eliminar' class='btn btn-danger'>Eliminar Restaurante</button>";
