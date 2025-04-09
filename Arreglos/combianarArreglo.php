<?php
    $carros = array("BMW","Ford","Toyota","Renault");
    
    $carros2 = array("Chevrolet","Mercedes Benz","MClaren");
    
    $carrosCombinados = array_merge($carros,$carros2);

    print_r($carrosCombinados);

?>