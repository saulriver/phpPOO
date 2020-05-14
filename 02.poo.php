<?php
#Clase
#Es un modelo que se utiliza para crear objetos
#que comparten un mismo comportamiento, el mismo estado e identidad.

class Automovil{

    #Propiedades.
    #Son las caracteristicas que pueda tener un objeto.
    public $marca;
    public $modelo;

    #Metodo
    #Es el algoritmo asociado a un objeto que indica la capacidad
    #de lo que este puede hacer.
    #La unica diferencia entre metodo y función, es que llamamos 
    #metodos a las funciones de una clase en la (POO),
    #mientras que llamamos funciones a los algoritmos de la programación estructurada.

    public function mostrar(){

        echo("<p>Hola! soy un <b>$this->marca</b>, modelo <b>$this->modelo</b></p>");

    }
    
}

#Objeto
#Una entidad provista de metodos o mensajes a los cuales responde propiedades con valores
#concretos.

$a = new Automovil();
$a->marca = "Toyota";
$a->modelo = "Corolla";
$a->mostrar();

$b = new Automovil();
$b->marca = "Hyundai";
$b->modelo = "Accent vision";
$b->mostrar();

$b = new Automovil();
$b->marca = "Mazda";
$b->modelo = "6";
$b->mostrar();

#Principios de la POO que se cumplen en este ejemplo.
#Abstraccion: nuevos tipos de datos (el que tu quieras tu lo creas).
#Encapsulacion: organizar el codigo en grupos logicos.
#Ocultamiento: ocultar detalles de implementacion y exponer solo los detalles 
#que sean necesarios para el resto del sistema.

?>