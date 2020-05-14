<?php
#Codigo imperativo o espagueti

echo("<h1>Programación espagueti o estructurada en php</h1>");

$automovil1 = (object)["marca" => "Toyota", "modelo" => "Corolla"];
$automovil2 = (object)["marca" => "Hyundai", "modelo" => "Accent vision"];

function mostrar($automovil){
    echo("<p>Hola! Soy un <b>$automovil->marca</b>, modelo <b>$automovil->modelo</b></p>");
}

mostrar($automovil1);
mostrar($automovil2);

?>