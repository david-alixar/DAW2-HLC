<?php
#@author David González Conejero
  
  # Conexión a la base de datos

  $conn = mysqli_connect( 'localhost', 'pruebas', 'pruebas', 'pruebas');
  echo "<pre>";
  print_r($conn);
  # Sentencia para insertar registros en la base de datos
  $insert = "insert into users( name, email) values( 'david', 'alum.dgonzalezc@iesalixar.org')";

  # Instrucción que ejecuta el insert anterior en la base de datos PRUEBAS y nos devuelve
  # un valor con el resultado de la consulta.
  $return = mysqli_query ( $conn, $insert);

  # Mostramos por pantalla el resultado del insert
  print_r( ( $return));


  # Cerramos conexión, es muy importante no ir dejando conexiones abiertas en el servidor.
  # si no lo hacemos podemos tener problemas de rendimiento.
  mysqli_close( $conn);
  ?>

  