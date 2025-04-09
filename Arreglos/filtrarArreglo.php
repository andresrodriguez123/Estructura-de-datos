<?php
    
    $numeros = array(2,4,18,12,1,34);
    $numerosFiltrar = array_filter($numeros,function($valor)
    {
        return $valor < 15;
    });
    print_r($numerosFiltrar);

?>