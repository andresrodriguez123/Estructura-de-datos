<?php
    
    $personas = array("Jaime"=>23000,"Lorena"=>54000,"Rafael"=>15000,"Miguel"=>2000);

    asort($personas);
    $preciosFiltrar = array_filter($personas,function($v)
    {
        return $v > 20000;
    });
    print_r($preciosFiltrar);

?>