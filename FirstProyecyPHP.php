<?php
	echo "Hello World, primeros pasos de PHP"; //Se usa Echo para imprimir texto en CDM
	
	$colores = array("Rojo", "Azul", "Gris", "Blanco"); //$ Para declarar variables y constantes
	
	print_r($colores);  //print_r Sirve para imprimir de manera legible y estructura el valor de una variable 
	
	$colores[]= "Negro";// Agrega un nuevo dato en el array
	
	var_dump($colores);
	
  	$coloresEliminar= "Azul"; //Se le asigna el valor a la variale
  	$llave = array_search($coloresEliminar, $colores); //Recorre todo el arrays de $colores en busca de $coloresEliminar
    
  	if($llave==true)  //Se evalua 
    {
  	  unset($colores[$llave]); //Se elimina el valor de llave en el array $colores
    }

    print_r($colores);
?>