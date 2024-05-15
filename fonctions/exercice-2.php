<?php


function average(array $numbers) : float
{
    $sum = array_sum($numbers);
    $count = count($numbers);
    
    return $sum / $count;
}   

echo average([12, 15, 18, 9])."<br>"; // doit afficher 13.5
echo average([12, 15, 18, 11, 14])."<br>"; // doit afficher 14

?>