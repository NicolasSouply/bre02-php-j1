<?php

$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];

foreach($users as $formateur)
{
		echo "Prénom : " .$formateur["firstName"]."<br>";
		echo "Nom : ".$formateur["lastName"]."<br>";
		
}

?>