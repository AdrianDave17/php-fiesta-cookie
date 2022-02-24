<?php
//Practice 4-01: Mutidimensional Array 
$convelpas = [
   
    ['id'=> 1, 'species'=> 'Bulbasaur', 'type1'=>'Grass', 'type2'=> 'Poison', 'ability'=> 'Overgrow', 'hp'=> 45, 'attack'=> 49, 'defense'=> 49],
    ['id'=> 2, 'species'=> 'Ivysaur', 'type1'=>'Grass', 'type2'=> 'Poison', 'ability'=> 'Overgrow', 'hp'=> 60, 'attack'=> 62, 'defense'=> 63],
    ['id'=> 3, 'species'=> 'Venusaur', 'type1'=>'Grass', 'type2'=> 'Poison', 'ability'=> 'Overgrow', 'hp'=> 80, 'attack'=> 82, 'defense'=> 83],
    ['id'=> 4, 'species'=> 'Charmander', 'type1'=>'Fire', 'type2'=> '', 'ability'=> 'Blaze', 'hp'=> 39, 'attack'=> 52, 'defense'=> 43],
    ['id'=> 5, 'species'=> 'Charmeleon', 'type1'=>'Fire', 'type2'=> '', 'ability'=> 'Blaze', 'hp'=> 58, 'attack'=> 64, 'defense'=> 58],
    ['id'=> 6, 'species'=> 'Charizard', 'type1'=>'Fire', 'type2'=> 'Flying', 'ability'=> 'Blaze', 'hp'=> 78, 'attack'=> 84, 'defense'=> 78],
    ['id'=> 7, 'species'=> 'Squirtle', 'type1'=>'Water', 'type2'=> '', 'ability'=> 'Torrent', 'hp'=> 44, 'attack'=> 48, 'defense'=> 65],
    ['id'=> 8, 'species'=> 'Wartortle', 'type1'=>'Water', 'type2'=> '', 'ability'=> 'Torrent', 'hp'=> 59, 'attack'=> 63, 'defense'=> 80],
    ['id'=> 9, 'species'=> 'Blastoise', 'type1'=>'Water', 'type2'=> '', 'ability'=> 'Torrent', 'hp'=> 79, 'attack'=> 83, 'defense'=> 100],
    ['id'=> 10, 'species'=> 'Caterpie', 'type1'=>'Bug', 'type2'=> '', 'ability'=> 'Shield Dust', 'hp'=> 50, 'attack'=> 20, 'defense'=> 55],
];


# Print the Array
echo "Print the Array";
echo "<br> <br>";
print_r ($convelpas);
echo "<br> <br>";

#Echo the number of elements in an array
echo "The number of elements in this array is:";
echo count($convelpas); 
echo "<br> <br>";

#Declare variable $favorite and assign your favorite specie
$favorite = $convelpas[3]['species'];
echo "My favorite specie is:";
echo $favorite;
echo "<br> <br>";

#Practice 4-02: Foreach loop to display species
echo "Species in list";
echo "<br> <br>";
foreach ($convelpas as $name) {
    echo$name['species'];
    echo "<br>";
}

?>
