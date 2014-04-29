<?php 

	require_once 'class/Card.php';
	require_once 'class/Player.php';
	
	// Create a player Oobj
	$player = new Player(1);
	
	// Add cards to the player
	foreach ($_POST['cards'] as $key => $posted_card)
	{
		$card = null;
		$card = new Card(substr($posted_card, -1), substr($posted_card, 0, -1));
		$player->add_card($card);
	}
	
	echo 'Cards value: ' . $player->get_cards_value();