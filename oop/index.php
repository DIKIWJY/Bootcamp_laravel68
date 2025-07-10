<?php 
require_once ('Animal.php');
require_once ('Frog.php');
require_once ('Ape.php');

$sheep = new Animal ("shaun");
echo "Nama : " . $sheep->name. "<br>"; 
echo "legs : " . $sheep->legs. "<br>"; 
echo "cold blooded  : " . $sheep->cold_blooded. "<br>"; 
echo "<br>";

$kodok = new Frog ("Buduk");
echo "Nama : " . $kodok->name. "<br>"; 
echo "legs : " . $kodok->legs. "<br>"; 
echo "cold blooded  : " . $kodok->cold_blooded. "<br>"; 
echo $kodok->jump();

$sungokong = new Ape ("kera sakti");
echo "Nama : " . $sungokong->name. "<br>"; 
echo "legs : " . $sungokong->legs. "<br>"; 
echo "cold blooded  : " . $sungokong->cold_blooded. "<br>"; 
echo $sungokong->yell();
?>