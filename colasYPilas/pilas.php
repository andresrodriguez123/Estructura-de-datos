<?php
    $pila = array();
    array_push($pila,"palto1");
    array_push($pila,"palto2");
    array_push($pila,"palto3");
    array_push($pila,"palto4");
    array_push($pila,"palto5");
    array_push($pila,"palto6");
    array_push($pila,"palto7");
    array_push($pila,"palto8");

    $orden = array_pop($pila);
    echo "La cantidad de platos son: ".$orden;

?>