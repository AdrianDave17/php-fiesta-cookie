
 <?php

 #Practice 4-03

$convelpas = [
    ['Id' => 1, 'species' => 'Bulbasaur', 'type1' => 'Grass', 'type2' => 'Poison', 'Ability' => 'Overgrow', 'HP' => 45,'Attack' => 49, 'Defense' => 49],
    ['Id' => 2, 'species' => 'Ivysaur', 'type1' => 'Grass', 'type2' => 'Poison', 'Ability' => 'Overgrow', 'HP' => 60,'Attack' => 62, 'Defense' => 63],
    ['Id' => 3, 'species' => 'Venusaur', 'type1' => 'Grass', 'type2' => 'Poison', 'Ability' => 'Overgrow', 'HP' => 80,'Attack' => 82, 'Defense' => 83],
    ['Id' => 4, 'species' => 'Charmander', 'type1' => 'Fire', 'type2' => 'N/A', 'Ability' => 'Blaze', 'HP' => 39,'Attack' => 52, 'Defense' => 43],
    ['Id' => 5, 'species' => 'Charmeleon', 'type1' => 'Fire', 'type2' => 'N/A', 'Ability' => 'Blaze', 'HP' => 58,'Attack' => 64, 'Defense' => 58],
    ['Id' => 6, 'species' => 'CCharizard', 'type1' => 'Fire', 'type2' => 'Flying', 'Ability' => 'Blaze', 'HP' => 78,'Attack' => 84, 'Defense' => 78],
    ['Id' => 7, 'species' => 'Squirtle', 'type1' => 'Water', 'type2' => 'N/A', 'Ability' => 'Torrent', 'HP' => 44,'Attack' => 48, 'Defense' => 65],
    ['Id' => 8, 'species' => 'Wartortle', 'type1' => 'Water', 'type2' => 'N/A', 'Ability' => 'Torrent', 'HP' => 59,'Attack' => 63, 'Defense' => 80],
    ['Id' => 9, 'species' => 'Blastoise', 'type1' => 'Water', 'type2' => 'N/A', 'Ability' => 'Torrent', 'HP' => 79,'Attack' => 83, 'Defense' => 100],
    ['Id' => 10, 'species' => 'Caterpie', 'type1' => 'Bug', 'type2' => 'N/A', 'Ability' => 'Shield'.'Dust', 'HP' => 50,'Attack' => 20, 'Defense' => 55]

];

echo "Create a function using this template hp_sum, ave_attack. <br> <br>";

#hp_sum will return the sum of the column hp
$sum_hp = array_sum(array_column($convelpas, 'HP'));

function hp_sum($sum_hp){
	echo "The hp sum is: ".$sum_hp;
	echo "<br> <br>";
}

hp_sum($sum_hp);



#ave_attack will return the average of column attack
$attack_sum = array_sum(array_column($convelpas, 'Attack'));
$attack_ave = $attack_sum / count($convelpas);

function ave_attack($attack_ave){
	echo "The attack average is: ".$attack_ave;
}

ave_attack($attack_ave);

?>