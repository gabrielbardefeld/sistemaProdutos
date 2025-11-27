<?php 

function calcularPrecoFinal($precoBase){
    $taxa = $precoBase * 0.05; // que seria 5%
    $imposto = $precoBase * 0.07; // que seria 7%
    $precoFinal = $precoBase + $imposto + $taxa;
    
    return $precoFinal;
}

?>