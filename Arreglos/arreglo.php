<?php
    $carros = array("BMW","Ford","Toyota","Renault");
    
    $carroEliminar = "Ford";

    $key = array_search($carroEliminar,$carros);
    if ($key != false)
    {
        unset($carros[$key]);
    }
    print_r($carros);

?>