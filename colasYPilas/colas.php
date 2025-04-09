<?php
    $cola = array();
    array_push($cola,100);
    array_push($cola,99);
    array_push($cola,98);
    array_push($cola,97);
    array_push($cola,96);
    array_push($cola,95);
    array_push($cola,94);
    array_push($cola,93);

    $orden = array_shift($cola);
    echo "El primer elemento de la cuenta regresiva es: ".$orden;

?>