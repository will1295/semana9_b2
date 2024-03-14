<?php

function mayoria($edad){
    if($edad>=18){
        echo "La persona es mayor de edad";
    }
    else if($edad<18 && $edad>0){
       
        echo "La persona es menor de edad";
    }
    else{
         throw new Exception("Edad no valida");
    }
}

try {
    mayoria(-1);
} catch (Exception $e) {
    echo "Error: ".$e->getMessage();
    
}
?>