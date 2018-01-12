<?php 
	$pikachu['name'] = 'Pikachu';
	$pikachu['type'] = 'Electric';
	$pikachu['moves']['basic'] = 'Thundershock';
	$pikachu['moves']['special'] = 'Thunderbolt';
	$pikachu['image'] = 'https://vignette.wikia.nocookie.net/pokemon/images/d/d0/Ash_Pikachu_Anime.png/revision/latest?cb=20110526013016';

	$charmander['name'] = 'Charmander';
	$charmander['type'] = 'Fire';
	$charmander['moves']['basic'] = 'Tail Whip';
	$charmander['moves']['special'] = 'Flamethrower';
	$charmander['image'] = 'https://vignette.wikia.nocookie.net/agus-pokemon/images/5/56/Charmander.png/revision/latest/scale-to-width-down/438?cb=20150531123106';

	$squirtle['name'] = 'Squirtle';
	$squirtle['type'] = 'Water';
	$squirtle['moves']['basic'] = 'Tackle';
	$squirtle['moves']['special'] = 'Water Gun';
	$squirtle['image'] = 'https://vignette4.wikia.nocookie.net/pokemon/images/2/23/007Squirtle_AG_anime_2.png/revision/latest?cb=20150101074735';

	$pokemons = [
		'pikachu' => $pikachu, 
		'charmander' => $charmander, 
		'squirtle' => $squirtle
	];

	$key = strtolower($_GET['pokemon']);
	if (array_key_exists($key,$pokemons)) {
		echo json_encode($pokemons[$key]);
	}
	else {
		echo "";
	}
	
?>