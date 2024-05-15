<?php


function getFirst(array $array) {
    
        if (!empty($array)) {
    
    return $array[0];
    
    }   else {
        
    return null;

    }
}
echo getFirst([13, 24, 45]) . "<br>"; // doit afficher 13
echo getFirst([]) . "<br>"; // doit afficher null
?>