<?php
#@author David González Conejero
    echo "pagina 2";
    echo "<br>Esperando 5 segundos...";
    //Aquí podemos recoger los parámetros. Descomenta la siguiente línea y comenta el header
    //print_r($_GET);
    //header("location: pagina3.php");

    header( "refresh:5;url=pagina3.php" );