<?php
#Codigo imperativo o espagueti

$automovil1 = (object)["marca" => "Toyota", "modelo" => "Corolla"];
$automovil2 = (object)["marca" => "Hyundai", "modelo" => "Accent vision"];

function mostrar($automovil){
    echo("<p>Hola! Soy un $automovil->marca, $automovil->modelo</p>");
}

mostrar($automovil1);
mostrar($automovil2);

?>