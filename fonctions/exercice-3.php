<?php


function isOdd(int $numbers) : bool
{
   if ($numbers %2 === 0 ) {
   
    return false;
    
}   
else 
{
return true;

}
}
echo isOdd(19)."<br>"; // doit afficher 0 ou false
echo isOdd(21)."<br>"; // doit afficher 1 ou true

echo isOdd(15)."<br>";
?>