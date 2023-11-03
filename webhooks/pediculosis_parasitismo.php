<?php
// Llamamos la librería de diaogflow
include_once "../somosioticos/somosioticos_dialogflow.php";
// llamamos las credenciales definidas en dialogflow en (Fulfillment)
credenciales('pediculosisparasitismobot','Jul&@n18/');

// identificamos el intent que golpea la puerta
if (intent_recibido("calculadora")){
  $valor1 = obtener_variables()['numero1'];
  $valor2 = obtener_variables()['numero2'];
  $resultado = $valor1 + $valor2;

  // Devolvemos la respuesta a dialogflow
  enviar_texto("Luego de sumar los valores te digo que el resultado es: $resultado");
}

if (intent_recibido("Tomar_Ordenar")){
  $cantidad1 = obtener_variables()['cantidad1'];
  $producto1 = obtener_variables()['producto1'];

  // Devolvemos la respuesta a dialogflow
  enviar_texto("La orden es: $cantidad1 $producto1");
}


?>
